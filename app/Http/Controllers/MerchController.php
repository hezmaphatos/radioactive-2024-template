<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Http\Requests\StoreMerchRequest;
use App\Http\Requests\UpdateMerchRequest;
use App\Models\Cart;
use App\Models\MerchImage;
use App\Models\MerchOrder;
use App\Models\MerchOrderDetail;
use App\Models\MerchVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $merches = Merch::all();
        return view('Merch.index', ['merches' => $merches]);
    }

    public function cart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        // dd($carts);
        return view('Merch.cart', ['carts'=>$carts]);
    }

    public function addToCartOld($id_merch)
    {
        $cart = session('cart');
        $merch = Merch::find($id_merch);
        $cart[$id_merch] = $merch;

        session(['cart' => $cart]);

        return redirect('/cart');
    }

    public function addToCart(Request $request)
    {
        if (Auth::check()) {
            // dd($request);
            $user = auth()->user();
            $carts = $user->carts;
            $flag = 'false';

            $merch = Merch::find($request->merch_id);
            $merchvariation = MerchVariation::where('description', $request->variation)
            ->where('merch_id', $request->merch_id)
            ->first();


            $price = $request->quantity * ($merch->price + $merchvariation->additional_price);

            if (isset($carts[0])) {
                foreach ($carts as $cart) {
                    if ($cart->merch_id == $request->merch_id) {
                        if ($cart->variation == $request->variation) {
                            $new_quantity = $cart->quantity + $request->quantity;
                            $cart->update(['quantity' => $new_quantity]);
                            $flag = 'true';
                        }
                    }
                }
                if ($flag == 'false') {
                    Cart::create([
                        'user_id' => $user->id,
                        'merch_id' => $request->merch_id,
                        'quantity' => $request->quantity,
                        'variation' => $request->variation,
                        'total_price' => $price
                    ]);
                }
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'merch_id' => $request->merch_id,
                    'quantity' => $request->quantity,
                    'variation' => $request->variation,
                    'total_price' => $price
                ]);
            }

            return Redirect::back();
        } else {
            return redirect('/login');
        }
    }

    public function removeFromCart(Cart $cart)
    {
        $cart->delete();

        return redirect('/cart');
    }

    public function updateCartQuantity(Cart $cart, Request $request){
        $request->validate([
            'quantity' => 'required'
        ]);

        $merch = $cart->merch;
        $merchvariation = MerchVariation::where('description', $cart->variation)
            ->where('merch_id', $merch->id)
            ->first();
        // dd($merch, $merchvariation);

        if ($request->quantity <= 0) {
            $cart->delete();
        }else{
            $cart->quantity = $request->quantity;
            $price = $request->quantity * ($merch->price + $merchvariation->additional_price);
            $cart->total_price = $price;
            $cart->update();
        }

        return redirect('/cart');
    }

    public function checkout()
    {
        $carts = auth()->user()->carts;
        // dd($carts);
        return view('Merch.checkout')->with('carts', $carts);
    }

    public function order(Request $request){
        if (Auth::check()) {
            $user = auth()->user();

            $carts = $user->carts;

            $orderData = $request->validate([
                'email' => 'required',
                'phone' => 'required',
                'line' => 'required',
                'payment_image' => 'required|image|file|max:10240',
            ]);

            if ($request->file('payment_image')) {
                $orderData['payment_image'] = $request->file('payment_image')->storePublicly('merch_payment_images', 'public');
            }

            $orderData['user_id'] = $user->id;
            $orderData['status'] = 'PENDING';
            $orderData['cumulative_price'] = 0;
            $cumulative_price = 0;

            $order = MerchOrder::create($orderData);

            foreach ($carts as $cart) {
                MerchOrderDetail::create([
                    'order_id' => $order->id,
                    'merch_id' => $cart->merch_id,
                    'quantity' => $cart->quantity,
                    'variation' => $cart->variation,
                    'total_price' => $cart->total_price,
                ]);

                $cumulative_price += $cart->total_price;

                $cart->delete();
            }

            $order->update(['cumulative_price'=>$cumulative_price]);

            return redirect('/cart');
        } else {
            return redirect('/login');
        }
    }

    public function approval(MerchOrder $merchOrder)
    {
        $merchOrder->update([
            'status' => 'Paid'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //bikin invoice
        //email approve, link ke invoice

        return redirect('/admin/orders/dashboard')->with('success', 'Order Approved');
    }

    public function cancel(MerchOrder $merchOrder)
    {
        $merchOrder->update([
            'status' => 'Cancelled'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //email cancel

        return redirect('/admin/orders/dashboard')->with('success', 'Order Cancelled');
    }

    public function suspend(MerchOrder $merchOrder)
    {
        $merchOrder->update([
            'status' => 'Suspended'
        ]);

        $customer_email = $merchOrder->email;
        $name = $merchOrder->user->name;

        //email suspen, suruh kontak tim RA

        return redirect('/admin/orders/dashboard')->with('success', 'Order Suspended');
    }

    public function userDashboard(){
        $merchOrders = auth()->user()->merchOrders;
        return view('Merch.userdash', ['merchOrders' => $merchOrders]);
    }

    public function showOrder($merchOrder)
    {
        return view('Merch.showorder', ['merchOrder'=>$merchOrder]);
    }

    public function ordersDashboard(){
        $orders = MerchOrder::all();

        return view('Merch.admin.ordersdash', ['orders' => $orders]);
    }


    public function resetCart()
    {
        if (Auth::check()) {
            $user = auth()->user();

            $carts = $user->carts;

            foreach ($carts as $cart) {
                $cart->delete();
            }

            return redirect('/menu');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Merch.Admin.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|file|max:10240',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        Merch::create($validData);

        return redirect('/merch/admin/new')->with([
            'success' => 'Merch Baru Telah Ditambahkan',
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);
    }

    public function addImage(Merch $merch)
    {
        return view('Merch.Admin.addimage', ['merch' => $merch]);
    }

    public function storeImage(Request $request, Merch $merch)
    {
        $validData = $request->validate([
            'description' => 'required',
            'image' => 'required|image|file|max:10240'
        ]);

        if ($request->file('image')) {
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $validData['merch_id'] = $merch->id;

        MerchImage::create($validData);

        return redirect('/merch/admin/' . $merch->id . '/addimage')->with('success', 'Merch Image Uploaded');
    }

    public function deleteImage(MerchImage $merchImage)
    {
        Storage::delete($merchImage->image);
        //ini belom bisa delete imagenya dari storage folder, gatau caranya gimana pls bantu
        $merch_id = $merchImage->merch_id;
        $merchImage->delete();
        return redirect('/merch/admin/' . $merch_id . '/edit')->with('success', 'Merch Image Removed');
    }

    public function addVariation(Merch $merch)
    {
        return view('Merch.Admin.addvariation', ['merch' => $merch]);
    }

    public function storeVariation(Request $request, Merch $merch){
        $validData = $request->validate([
            'description' => 'required',
            'stock' => 'required',
            'additional_price' => 'required'
        ]);

        $validData['merch_id'] = $merch->id;

        MerchVariation::create($validData);

        return redirect('/merch/admin/' . $merch->id . '/addvariation')->with('success', 'Merch Variant Added');
    }

    public function updateVariation(Request $request, MerchVariation $merchvariation){
        $validData = $request->validate([
            'description' => 'required',
            'additional_price' => 'required',
            'stock' => 'required',
        ]);

        $merchvariation->update($validData);

        return redirect('/merch/admin/' . $merchvariation->merch_id . '/edit')->with('success', 'Merch Variation Updated');
    }

    public function deleteVariation(MerchVariation $merchvariation){
        $merch_id = $merchvariation->merch_id;
        $merchvariation->delete();
        return redirect('/merch/admin/' . $merch_id . '/edit')->with('success', 'Merch Variation Removed');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merch $merch)
    {
        //
        return view('Merch.merch', ['merch' => $merch]);
    }

    public function dashboard()
    {
        $merches = Merch::all();

        return view('Merch.Admin.dashboard', ['merches' => $merches]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merch $merch)
    {
        //
        return view('Merch.Admin.edit', ['merch' => $merch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merch $merch)
    {
        //
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->old_image) {
                Storage::delete($request->old_image);
            }
            $validData['image'] = $request->file('image')->storePublicly('merch_images', 'public');
        }

        $merch->update($validData);

        return redirect('/merch/admin/' . $merch->id . '/edit')->with('success', 'Merch Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merch $merch)
    {
        //
        $merch->delete();
        return redirect('/merch/admin/dashboard')->with('success', 'Merch Deleted');
    }
}

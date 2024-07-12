<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a9b6894e0.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radioactive UMN</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden bg-black text-white">
    {{-- <nav id="header" class="fixed navbar bg-transparent justify-center gap-16 z-40 transition-all duration-700">
        <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
            href="/">HOME</a>
        <a
            class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">VO
            CHALLENGE</a>
        <a
            class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">RAC</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
            href="ticket">CLOSING
            NIGHT</a>
        @auth
            <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="/logout">LOGOUT</a>
        @endauth
    </nav> --}}
    <div id="header" x-data="{ isOpen: false }"
        class="fixed navbar bg-[#0E0EC0] justify-center gap-16 z-40 transition-all duration-700">
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://umnradioactive.com/">HOME</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://umnradioactive.com/voc">VO
                    CHALLENGE</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://umnradioactive.com/rac">RAC</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://umnradioactive.com/closing-night">CLOSING
                    NIGHT</a>
                <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                @auth
                    <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer"
                        href="/logout">LOGOUT</a>
                @endauth
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-52 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://umnradioactive.com/">HOME</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://umnradioactive.com/voc">VO
                            CHALLENGE</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://umnradioactive.com/rac">RAC</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://umnradioactive.com/closing-night">CLOSING
                            NIGHT</a>
                        <a class="font-taruno text-black text-xs underline underline-offset-4 decoration-[#0E0EC0] cursor-pointer"
                            href="https://merch.umnradioactive.com/">MERCHANDISE</a>
                        @auth
                            <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer"
                                href="/logout">LOGOUT</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row justify-center pb-[50px] pt-[200px]  text-white">
        <div class="text-center flex">
            <div class="w-full">
                @if ($cart->isEmpty())
                    <div class="flex justify-center align-middle items-center h-[800px]">
                        <div>
                            <p class="font-taruno text-xl">Cart is empty</p>
                            <div class="mt-[20px]">
                                <a class="text-[.8rem] hover:text-[#3838ff] rounded-[6px] no-underline text-white"
                                    href="{{ url('/') }}">Back to Merch</a>
                            </div>
                        </div>
                    </div>
            </div>
        @else
            <table border="1" cellpadding="10"
                class="hidden md:contents w-4/5 text-white dark:text-gray-800 text-sm lg:text-lg md:mr-[50px] md:ml-[50px] shadow-lg lg:w-full">
                <tr class="text-white">
                    <th class="font-taruno text-left ">Items</th>
                    <!-- <th class="font-taruno">Name</th> -->
                    <th class="font-taruno">Price</th>
                    <th class="font-taruno">Size</th>
                    <th class="font-taruno">Qty</th>
                    <th class="font-taruno">Total Price</th>
                    <th class="font-taruno">Remove</th>
                </tr>
                <?php $no = 1;
                $total = 0; ?>
                @foreach ($cart as $obj)
                    @foreach ($merches as $merch)
                        @if ($merch->id == $obj->merch_id)
                            <?php $price = $obj->qty * $obj->price;
                            $total += $price;
                            ?>
                            <tr class="border-b-[1px] text-white">
                                <!-- <td>{{ $no++ }}</td> -->
                                <td class="flex flex-wrap gap-3 h-full justify-left items-center">
                                    <img src="/images/{{ $merch->description }}//{{ $merch->image1 }}"
                                        class="h-[150px] w-auto object-cover" />
                                    <div class="flex mr-5 gap-0">
                                        <div>
                                            <p class="text-left h-5">{{ $merch->name }}</p>
                                            <p class="text-left m-0 text-gray-500 text-[11px]">{{ $obj->tee }}</p>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td>{{ $merch->name }}</td> --}}
                                <td>{{ number_format($obj->price, 0, ',', '.') }}</td>
                                <td>{{ $obj->size }}</td>
                                <td>{{ $obj->qty }}</td>
                                <td>{{ number_format($price, 0, ',', '.') }}</td>
                                <td class="text-[1.1rem] w-[20px] rounded-[6px]">
                                    <a class="text-center text-[1.6rem] no-underline text-white hover:text-red-600"
                                        href="/cart/{{ $obj->id }}">×</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                <tr class="text-white">
                    <td colspan="4" class="text-xl font-bold">Total</td>
                    <td>{{ number_format($total, 0, ',', '.') }}</td>
                </tr>
            </table>

            <table border="1" cellpadding="10"
                class="contents md:hidden w-4/5 text-white dark:text-gray-800 text-sm lg:text-lg md:mr-[50px] md:ml-[50px] shadow-lg lg:w-full">
                <tr class="text-white">
                    <td class="font-taruno text-left ">Items</td>
                    <!-- <td class="font-taruno">Name</td> -->
                    <td class="font-taruno">Details</td>
                    <td class="font-taruno">Remove</td>
                </tr>
                <?php $no = 1;
                $total = 0; ?>
                @foreach ($cart as $obj)
                    @foreach ($merches as $merch)
                        @if ($merch->id == $obj->merch_id)
                            <?php $price = $obj->qty * $obj->price;
                            $total += $price;
                            ?>
                            <tr class="border-b-[1px] text-white">
                                <!-- <td>{{ $no++ }}</td> -->
                                <td class="flex flex-wrap gap-3 h-full justify-left items-center">
                                    <img src="/images/{{ $merch->description }}//{{ $merch->image1 }}"
                                        class="h-[150px] w-auto object-cover" />
                                    <div class="flex mr-5 gap-0 mb-3 md:mb-0">
                                        <div>
                                            <p class="text-left h-5">{{ $merch->name }}</p>
                                            <p class="text-left m-0 text-gray-500 text-[11px]">{{ $obj->tee }}</p>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td>{{ $merch->name }}</td> --}}
                                <td class="text-left">Price : {{ $obj->price }} <br>Size : {{ $obj->size }}
                                    <br>Qty: {{ $obj->qty }} <br>Total Price: {{ $price }}
                                </td>
                                <td class="text-[1.1rem] w-[20px] rounded-[6px]">
                                    <a class="text-center text-[1.6rem] no-underline text-white hover:text-red-600"
                                        href="/cart/{{ $obj->id }}">×</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
                <tr class="text-white">
                    <td colspan="1" class="text-xl font-bold">Total</td>
                    <td>{{ $total }}</td>
                </tr>
            </table>

            <div class="mt-[80px] flex justify-center mb-[10px]">
                <a href='/checkout' class="text-[1.1rem] no-underline text-white">
                    <div
                        class="text-[1.1rem] bg-[#0E0EC0] hover:bg-[#1313c4] w-[200px] pt-[10px] pb-[10px]  border-white border-[1px] cursor-pointer">
                        Checkout
                    </div>
                </a>
            </div>
            <a class="text-[.8rem] hover:text-[#3838ff] no-underline text-white" href="{{ url('/') }}">Back to
                Merch</a>
        </div>
        @endif
    </div>
    </div>


    <footer class="bg-gradient-to-b from-transparent to-[#0E0EC0] pt-56 pb-16">
        <div class="flex flex-col w-full justify-center md:items-center md:flex-row">
            <div class="flex justify-center lg:container w-full">
                <img src="/images/LOGO RA.webp" alt="" class="h-40 object-contain">
            </div>
            <div class="lg:container flex flex-col justify-evenly py-3 my-10 gap-4 text-center md:text-left">
                <a href="https://umnradioactive.com/"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>HOME</b>
                    </h5>
                </a>
                <a href="https://umnradioactive.com/voc"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>VO CHALLENGE</b>
                    </h5>
                </a>
                <a href="https://umnradioactive.com/rac"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>RAC</b>
                    </h5>
                </a>
                <a href="https://umnradioactive.com/closing-night"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>CLOSING NIGHT</b>
                    </h5>
                </a>
                <a href="https://merch.umnradioactive.com"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>MERCHANDISE</b>
                    </h5>
                </a>
            </div>
            <div class="mx-auto flex flex-wrap content-center mb-12 md:mb-0">
                <div class="flex space-x-4 mt-4 sm:mt-0">
                    <a href="mailto:mediarelation.radioactive@gmail.com" target="_blank" class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M18.821,20.5H5.179A3.683,3.683,0,0,1,1.5,16.821V7.179A3.683,3.683,0,0,1,5.179,3.5H18.821A3.683,3.683,0,0,1,22.5,7.179v9.642A3.683,3.683,0,0,1,18.821,20.5ZM5.179,4.5A2.682,2.682,0,0,0,2.5,7.179v9.642A2.682,2.682,0,0,0,5.179,19.5H18.821A2.682,2.682,0,0,0,21.5,16.821V7.179A2.682,2.682,0,0,0,18.821,4.5Z">
                            </path>
                            <path
                                d="M12,14.209a.5.5,0,0,1-.346-.138L4.286,7.028a.5.5,0,0,1,.691-.723L12,13.018l7.023-6.713a.5.5,0,1,1,.691.723l-7.368,7.043A.5.5,0,0,1,12,14.209Z">
                            </path>
                            <path
                                d="M4.7,17.833a.5.5,0,0,1-.347-.86l5.54-5.31a.5.5,0,0,1,.692.722L5.048,17.694A.5.5,0,0,1,4.7,17.833Z">
                            </path>
                            <path
                                d="M19.3,17.832a.5.5,0,0,1-.346-.139l-5.538-5.308a.5.5,0,0,1,.692-.722l5.538,5.308a.5.5,0,0,1-.346.861Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://instagram.com/umnradioactive" target="_blank" class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z">
                            </path>
                            <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                            <path
                                d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://tiktok.com/@umnradioactive" target="_blank" class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" target="_blank"
                        class="text-white">
                        <svg class="h-12 w-12 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-center md:justify-end items-center w-full mb-10 md:mb-0">
                <img src="/images/LOGO UMN RADIO.webp" alt="" class="h-12 lg:h-16">
            </div>
            <div class="flex justify-center w-full">
                <img src="/images/LOGO UMN.webp" alt="" class="h-36 lg:h-40">
            </div>

        </div>
        <div class="flex justify-center align-middle mt-10 text-center">
            <p class="mb-2 text-xs font-taruno font-medium text-white">&copy; UMN RADIOACTIVE 2023</p>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            var header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-[#0E0EC0]');
                // header.classList.add('fixed');
            } else {
                header.classList.add('bg-transparent');
                header.classList.remove('bg-[#0E0EC0]');
                // header.classList.remove('fixed');
            }
        });
    </script>
</body>

</html>

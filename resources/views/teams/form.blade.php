<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMN Radioactive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-black min-h-screen">
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
                    href="/">HOME</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/voc">VO
                    CHALLENGE</a>
                <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="/rac">RAC</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="/closing-night">CLOSING
                    NIGHT</a>
                {{-- <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="https://merch.umnradioactive.com/">MERCHANDISE</a> --}}
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-52 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a class="font-taruno text-black text-xs no-underline underline-offset-4 decoration-[#0E0EC0] cursor-pointer"
                            href="/">HOME</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/voc">VO
                            CHALLENGE</a>
                        <a class="font-taruno text-black text-xs underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/rac">RAC</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/closing-night">CLOSING
                            NIGHT</a>
                        {{-- <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="https://merch.umnradioactive.com/">MERCHANDISE</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="font-taruno2 text-lg md:text-3xl text-white flex justify-center text-center mb-6 pt-20">
        FORM PENDAFTARAN RAC
    </div>
    @if ($amount == 1)
        <form action="/rac/store" class="" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content shadow-md  px-8 py-3 mb-10 font-pathway shadow-[#FFF000]">
                        <div class="w-full font-taruno text-md md:text-lg text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0" for="">
                                    <span class="">Nama Tim</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('tim1_nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Nama Tim" name="tim1_nama"
                                        value="{{ old('tim1_nama') }}">
                                    @error('tim1_nama')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0" for="">
                                    <span class="">Penyiar 1</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                        value="{{ old('tim1_penyiar1') }}">
                                    @error('tim1_penyiar1')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Penyiar
                                        2</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                        value="{{ old('tim1_penyiar2') }}">
                                    @error('tim1_penyiar2')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Operator</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                        value="{{ old('tim1_operator') }}">
                                    @error('tim1_operator')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Institusi/Organisasi
                                    Asal</label>
                            </div>
                            <div>
                                <input required
                                    class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                    value="{{ old('tim1_institusi') }}">
                                @error('tim1_institusi')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">NIM
                                        Penyiar
                                        1</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                        value="{{ old('tim1_nims1') }}">
                                    @error('tim1_nims1')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">NIM
                                        Penyiar
                                        2</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                        value="{{ old('tim1_nims2') }}">
                                    @error('tim1_nims2')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">NIM
                                        Operator</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                        value="{{ old('tim1_nimop') }}">
                                    @error('tim1_nimop')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Nomor WA
                                        Perwakilan</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="number" placeholder="" name="tim1_contact_wa"
                                        value="{{ old('tim1_contact_wa') }}">
                                    @error('tim1_contact_wa')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">ID Line
                                        Perwakilan</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="" name="tim1_contact_line"
                                        value="{{ old('tim1_contact_line') }}">
                                    @error('tim1_contact_line')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Email</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="email" placeholder="" name="tim1_email"
                                        value="{{ old('tim1_email') }}">
                                    @error('tim1_email')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-content shadow-md  px-8 py-3 mb-4 font-pathway shadow-[#FFF000]">
                        <div class="mb-1">
                            <div>
                                <label
                                    class="block font-taruno text-center text-md md:text-lg text- form-label text-sm mb-0"
                                    for="">Bukti Pembayaran</label>
                            </div>
                            <div>
                                <h6 class="text-sm">Pembayaran sebesar Rp 125.000,~ ke xxxxx a/n xxxxx</h6>
                            </div>
                            <div>
                                <input required
                                    class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    type="file" accept="image/*" name="payment_proof">
                                @error('payment_proof')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1"
                                type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                                Daftar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @elseif($amount == 2)
        <form action="/rac/store" class="" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[800px] max-w-[95vw]">
                    <div
                        class="flex justify-center flex-wrap w-full form-content shadow-md py-3 mb-10 font-pathway shadow-[#FFF000]">
                        <div class="w-full font-taruno text-md md:text-lg text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif

                        <div class="min-w-2/5 w-[340px] my-1 mx-4">
                            <div class="font-taruno text-xl">TIM 1</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Nama Tim</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Tim" name="tim1_nama"
                                            value="{{ old('tim1_nama') }}">
                                        @error('tim1_nama')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                            value="{{ old('tim1_penyiar1') }}">
                                        @error('tim1_penyiar1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                            value="{{ old('tim1_penyiar2') }}">
                                        @error('tim1_penyiar2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                            value="{{ old('tim1_operator') }}">
                                        @error('tim1_operator')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                        value="{{ old('tim1_institusi') }}">
                                    @error('tim1_institusi')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                            value="{{ old('tim1_nims1') }}">
                                        @error('tim1_nims1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                            value="{{ old('tim1_nims2') }}">
                                        @error('tim1_nims2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                            value="{{ old('tim1_nimop') }}">
                                        @error('tim1_nimop')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="number" placeholder="" name="tim1_contact_wa"
                                            value="{{ old('tim1_contact_wa') }}">
                                        @error('tim1_contact_wa')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="" name="tim1_contact_line"
                                            value="{{ old('tim1_contact_line') }}">
                                        @error('tim1_contact_line')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Email</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="email" placeholder="" name="tim1_email"
                                            value="{{ old('tim1_email') }}">
                                        @error('tim1_email')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-2/5 w-[340px] my-1 mx-4">
                            <div class="font-taruno text-xl">TIM 2</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Nama Tim</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Tim" name="tim2_nama"
                                            value="{{ old('tim2_nama') }}">
                                        @error('tim2_nama')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim2_penyiar1"
                                            value="{{ old('tim2_penyiar1') }}">
                                        @error('tim2_penyiar1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim2_penyiar2"
                                            value="{{ old('tim2_penyiar2') }}">
                                        @error('tim2_penyiar2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim2_operator"
                                            value="{{ old('tim2_operator') }}">
                                        @error('tim2_operator')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim2_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim2_institusi"
                                        value="{{ old('tim2_institusi') }}">
                                    @error('tim2_institusi')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims1"
                                            value="{{ old('tim2_nims1') }}">
                                        @error('tim2_nims1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims2"
                                            value="{{ old('tim2_nims2') }}">
                                        @error('tim2_nims2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nimop"
                                            value="{{ old('tim2_nimop') }}">
                                        @error('tim2_nimop')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="number" placeholder="" name="tim2_contact_wa"
                                            value="{{ old('tim2_contact_wa') }}">
                                        @error('tim2_contact_wa')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="" name="tim2_contact_line"
                                            value="{{ old('tim2_contact_line') }}">
                                        @error('tim2_contact_line')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Email</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="email" placeholder="" name="tim2_email"
                                            value="{{ old('tim2_email') }}">
                                        @error('tim2_email')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center w-full">
                        <div
                            class="w-1/2 min-w-[340px] my-1 form-content shadow-md  px-6 py-3 mb-4 font-pathway shadow-[#FFF000]">
                            <div class="mb-1">
                                <div>
                                    <label
                                        class="block font-taruno text-center text-md md:text-lg form-label text-sm mb-0"
                                        for="">Bukti Pembayaran</label>
                                </div>
                                <div>
                                    <h6 class="text-sm">Pembayaran sebesar Rp 200.000,~ ke xxxxx a/n xxxxx</h6>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        type="file" accept="image/*" name="payment_proof">
                                    @error('payment_proof')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <button
                                    class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1"
                                    type="submit"
                                    onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    @elseif($amount == 3)
        <form action="/rac/store" class="" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[1200px] max-w-[95vw]">
                    <div
                        class="flex flex-row flex-wrap justify-center w-full form-content shadow-md  py-3 mb-10 font-pathway shadow-[#FFF000]">
                        <div class="w-full font-taruno text-md md:text-lg text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                        @endif

                        <div class="min-w-[30%] w-[340px] my-1 mx-4">
                            <div class="font-taruno text-xl">TIM 1</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Nama Tim</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Tim" name="tim1_nama"
                                            value="{{ old('tim1_nama') }}">
                                        @error('tim1_nama')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                            value="{{ old('tim1_penyiar1') }}">
                                        @error('tim1_penyiar1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                            value="{{ old('tim1_penyiar2') }}">
                                        @error('tim1_penyiar2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                            value="{{ old('tim1_operator') }}">
                                        @error('tim1_operator')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                        value="{{ old('tim1_institusi') }}">
                                    @error('tim1_institusi')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                            value="{{ old('tim1_nims1') }}">
                                        @error('tim1_nims1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                            value="{{ old('tim1_nims2') }}">
                                        @error('tim1_nims2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                            value="{{ old('tim1_nimop') }}">
                                        @error('tim1_nimop')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="number" placeholder="" name="tim1_contact_wa"
                                            value="{{ old('tim1_contact_wa') }}">
                                        @error('tim1_contact_wa')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="" name="tim1_contact_line"
                                            value="{{ old('tim1_contact_line') }}">
                                        @error('tim1_contact_line')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Email</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="email" placeholder="" name="tim1_email"
                                            value="{{ old('tim1_email') }}">
                                        @error('tim1_email')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-[30%] w-[340px] my-1 mx-4">
                            <div class="font-taruno text-xl">TIM 2</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Nama Tim</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Tim" name="tim2_nama"
                                            value="{{ old('tim2_nama') }}">
                                        @error('tim2_nama')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim2_penyiar1"
                                            value="{{ old('tim2_penyiar1') }}">
                                        @error('tim2_penyiar1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim2_penyiar2"
                                            value="{{ old('tim2_penyiar2') }}">
                                        @error('tim2_penyiar2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim2_operator"
                                            value="{{ old('tim2_operator') }}">
                                        @error('tim2_operator')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim2_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim2_institusi"
                                        value="{{ old('tim2_institusi') }}">
                                    @error('tim2_institusi')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims1"
                                            value="{{ old('tim2_nims1') }}">
                                        @error('tim2_nims1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims2"
                                            value="{{ old('tim2_nims2') }}">
                                        @error('tim2_nims2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nimop"
                                            value="{{ old('tim2_nimop') }}">
                                        @error('tim2_nimop')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="number" placeholder="" name="tim2_contact_wa"
                                            value="{{ old('tim2_contact_wa') }}">
                                        @error('tim2_contact_wa')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="" name="tim2_contact_line"
                                            value="{{ old('tim2_contact_line') }}">
                                        @error('tim2_contact_line')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Email</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="email" placeholder="" name="tim2_email"
                                            value="{{ old('tim2_email') }}">
                                        @error('tim2_email')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-[30%] w-[340px] my-1 mx-4">
                            <div class="font-taruno text-xl">TIM 3</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Nama Tim</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Tim" name="tim3_nama"
                                            value="{{ old('tim3_nama') }}">
                                        @error('tim3_nama')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim3_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim3_penyiar1"
                                            value="{{ old('tim3_penyiar1') }}">
                                        @error('tim3_penyiar1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim3_penyiar2"
                                            value="{{ old('tim3_penyiar2') }}">
                                        @error('tim3_penyiar2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim3_operator"
                                            value="{{ old('tim3_operator') }}">
                                        @error('tim3_operator')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim3_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim3_institusi"
                                        value="{{ old('tim3_institusi') }}">
                                    @error('tim3_institusi')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim3_nims1"
                                            value="{{ old('tim3_nims1') }}">
                                        @error('tim3_nims1')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim3_nims2"
                                            value="{{ old('tim3_nims2') }}">
                                        @error('tim3_nims2')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim3_nimop"
                                            value="{{ old('tim3_nimop') }}">
                                        @error('tim3_nimop')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="number" placeholder="" name="tim3_contact_wa"
                                            value="{{ old('tim3_contact_wa') }}">
                                        @error('tim3_contact_wa')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="text" placeholder="" name="tim3_contact_line"
                                            value="{{ old('tim3_contact_line') }}">
                                        @error('tim3_contact_line')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0" for="">Email</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                            type="email" placeholder="" name="tim3_email"
                                            value="{{ old('tim3_email') }}">
                                        @error('tim3_email')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center w-full">
                        <div
                            class="min-w-[33%] w-[340px] my-1 form-content shadow-md  px-6 py-3 mb-4 font-pathway shadow-[#FFF000]">
                            <div class="mb-1">
                                <div>
                                    <label
                                        class="block font-taruno text-center text-md md:text-lg form-label text-sm mb-0"
                                        for="">Bukti Pembayaran</label>
                                </div>
                                <div>
                                    <h6 class="text-sm">Pembayaran sebesar Rp 300.000,~ ke xxxxx a/n xxxxx</h6>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        type="file" accept="image/*" name="payment_proof">
                                    @error('payment_proof')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <button
                                    class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1"
                                    type="submit"
                                    onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</body>
<style>
    .form-content {
        background-color: rgb(45, 45, 45);
        color: white;
        border-radius: 3px;
        border: solid 3px white;
    }

    .form-input {
        background-color: black;
        border: 1.5px solid white;
    }

    .form-input:focus {
        border-bottom: solid 4px #FFF000;
    }

    .button-submit {
        transition: background-color 0.25s, transform 0.25s;
        border: 2px solid white;
    }

    .button-submit:hover {
        background-color: #FFF000;
        color: black;
        transform: scale(1.05);
    }

    .button-submit:active {
        background-color: white;
        color: black;
    }

    /* WebKit, Edge */
    ::-webkit-input-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* Firefox 4-18 */
    :-moz-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* Firefox 19+ */
    ::-moz-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* IE 10-11 */
    :-ms-input-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* Edge */
    ::-ms-input-placeholder {
        font-family: 'Pathway Extreme';
    }

    /* MODERN BROWSER */
    ::placeholder {
        font-family: 'Pathway Extreme';
    }
</style>

</html>

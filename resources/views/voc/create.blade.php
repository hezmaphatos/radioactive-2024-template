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
    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-black min-h-screen">
    <div class="font-taruno2 text-lg md:text-3xl text-white flex justify-center text-center pt-8 mb-6">
        FORM PENGUMPULAN VOC
    </div>
    <form action="/voc/store" class="" enctype="multipart/form-data" method="post">
        <div class="flex justify-center align-middle form-container">
            <div class="flex flex-col w-[400px] max-w-[95vw]">
                @if (session()->has('success'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4 rounded" role="alert">
                        <p class="font-bold">Success</p>
                        <p>Pengumpulan Berhasil, Terimakasih Revends!</p>
                    </div>
                @endif
                <div class="w-full form-content shadow-md  px-8 py-3 mb-10 font-pathway shadow-[#FFF000]">
                    <div class="w-full font-taruno text-md md:text-lg text-white text-center">Data VOC</div>
                    @csrf
                    <div>
                        <div class="mb-1">
                            <label class="block form-label text-sm mb-0" for="">
                                <span class="">Nama Lengkap</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('nama') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap" name="nama"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Usia</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('usia') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="number" onkeypress="return isNumberKey(event)" placeholder="Usia"
                                    name="usia" value="{{ old('usia') }}">
                                @error('usia')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Nomor Telepon/WA</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('no_telp') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="number" placeholder="Nomor Telepon/WA" name="no_telp"
                                    value="{{ old('no_telp') }}">
                                @error('no_telp')
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
                            <input
                                class="block @error('institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="institusi"
                                value="{{ old('institusi') }}">
                            @error('institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">NIM</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('nim') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="nim"
                                    value="{{ old('nim') }}">
                                @error('nim')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">E-mail</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('email') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"class="block @error('usia') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Username Tiktok</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('uname') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="@username" name="uname" value="{{ old('uname') }}">
                                @error('uname')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0" for="">Link Video VOC</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('link') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="https://www.tiktok.com/@username/video/" name="link"
                                    value="{{ old('link') }}">
                                @error('link')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Daftar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
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

@extends('layouts.main')

@section('container')
<body class="antialiased bg-black min-h-screen">
    <div class="font-brodyrawk text-3xl md:text-4xl text-white flex justify-center text-center mb-6 pt-20">
        FORM PENDAFTARAN RAC
    </div>
    @if ($amount == 1)
        <form action="/rac/store" class="pb-24" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div class="w-full form-content shadow-md  px-8 py-3 mb-10 font-pathway shadow-[#D61625]">
                        <div class="w-full font-brodyrawk text-xl md:text-2xl text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500 font-ltmuseumbold" role="alert">{{ session('success') }}</div>
                        @endif
                        <div>
                            <div class="mb-1">
                                <label class="block form-label text-sm mb-0" for="">
                                    <span class="font-ltmuseumbold">Penyiar 1</span>
                                </label>
                                <div>
                                    <input required
                                        class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                        value="{{ old('tim1_penyiar1') }}">
                                    @error('tim1_penyiar1')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Penyiar
                                        2</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                        value="{{ old('tim1_penyiar2') }}">
                                    @error('tim1_penyiar2')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Operator</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                        value="{{ old('tim1_operator') }}">
                                    @error('tim1_operator')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-1">
                            <div>
                                <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Institusi/Organisasi
                                    Asal</label>
                            </div>
                            <div>
                                <input required
                                    class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                    type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                    value="{{ old('tim1_institusi') }}">
                                @error('tim1_institusi')
                                    <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                        Penyiar
                                        1</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                        value="{{ old('tim1_nims1') }}">
                                    @error('tim1_nims1')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                        Penyiar
                                        2</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                        value="{{ old('tim1_nims2') }}">
                                    @error('tim1_nims2')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                        Operator</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                        value="{{ old('tim1_nimop') }}">
                                    @error('tim1_nimop')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Nomor WA
                                        Perwakilan</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="number" placeholder="Nomor WA Perwakilan" name="tim1_contact_wa"
                                        value="{{ old('tim1_contact_wa') }}">
                                    @error('tim1_contact_wa')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">ID Line
                                        Perwakilan</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="ID Line Perwakilan" name="tim1_contact_line"
                                        value="{{ old('tim1_contact_line') }}">
                                    @error('tim1_contact_line')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-content shadow-md px-8 py-3 mb-4 font-pathway shadow-[#D61625]">
                        <div class="mb-1">
                            <div>
                                <label
                                    class="block font-brodyrawk text-center text-xl md:text-2xl form-label mb-0"
                                    for="">Bukti Pembayaran</label>
                            </div>
                            <div>
                                <h6 class="text-lg font-ltmuseumbold">Pembayaran sebesar Rp 130.000,~ ke BCA 6600448160 a/n Helena Hanna Haryadi</h6>
                            </div>
                            <div>
                                <input required
                                    class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 font-ltmuseumreg"
                                    type="file" accept="image/*" name="payment_proof">
                                @error('payment_proof')
                                    <div class="text-sm text-red-600 font-bold">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<div class="">
    <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-xl md:text-2xl px-5 py-1"
        type="button" data-modal-target="#confirmationModal">
        Daftar
    </button>
</div>
<div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-11/12 md:w-1/3 p-5 rounded-lg shadow-lg">
        <h2 class="font-ltmuseumbold text-xl mb-4 text-black">Konfirmasi Pendaftaran</h2>
        <p class="text-black mb-6 font-ltmuseumreg">Pastikan data yang dimasukkan benar adanya.</p>
        <div class="flex justify-end">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2 font-ltmuseum" data-modal-close>Cancel</button>
            <button class="bg-[#D61625] text-white px-4 py-2 rounded font-ltmuseum" type="submit">Daftar</button>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
        </form>
    @elseif($amount == 2)
        <form action="/rac/store" class="pb-24" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] max-w-[95vw]">
                    <div
                        class="flex justify-center flex-wrap w-full form-content shadow-md px-8 py-3 mb-10 font-pathway shadow-[#D61625]">
                        <div class="w-full font-brodyrawk text-xl md:text-2xl text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500 font-ltmuseumbold" role="alert">{{ session('success') }}</div>
                        @endif
                        <div class="min-w-2/5 w-[340px] my-1 mx-4">
                            <div class="font-ltmuseumbold text-xl md:text-2xl">TIM 1</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="font-ltmuseumbold">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                            value="{{ old('tim1_penyiar1') }}">
                                        @error('tim1_penyiar1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                            value="{{ old('tim1_penyiar2') }}">
                                        @error('tim1_penyiar2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                            value="{{ old('tim1_operator') }}">
                                        @error('tim1_operator')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                        value="{{ old('tim1_institusi') }}">
                                    @error('tim1_institusi')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                            value="{{ old('tim1_nims1') }}">
                                        @error('tim1_nims1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                            value="{{ old('tim1_nims2') }}">
                                        @error('tim1_nims2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                            value="{{ old('tim1_nimop') }}">
                                        @error('tim1_nimop')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="number" placeholder="Nomor WA Perwakilan" name="tim1_contact_wa"
                                            value="{{ old('tim1_contact_wa') }}">
                                        @error('tim1_contact_wa')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="ID Line Perwakilan" name="tim1_contact_line"
                                            value="{{ old('tim1_contact_line') }}">
                                        @error('tim1_contact_line')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-2/5 w-[340px] my-1 mx-4">
                            <div class="font-ltmuseumbold text-xl md:text-2xl">TIM 2</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="font-ltmuseumbold">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outlinefont-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim2_penyiar1"
                                            value="{{ old('tim2_penyiar1') }}">
                                        @error('tim2_penyiar1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim2_penyiar2"
                                            value="{{ old('tim2_penyiar2') }}">
                                        @error('tim2_penyiar2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim2_operator"
                                            value="{{ old('tim2_operator') }}">
                                        @error('tim2_operator')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim2_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim2_institusi"
                                        value="{{ old('tim2_institusi') }}">
                                    @error('tim2_institusi')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims1"
                                            value="{{ old('tim2_nims1') }}">
                                        @error('tim2_nims1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims2"
                                            value="{{ old('tim2_nims2') }}">
                                        @error('tim2_nims2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nimop"
                                            value="{{ old('tim2_nimop') }}">
                                        @error('tim2_nimop')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="number" placeholder="Nomor WA Perwakilan" name="tim2_contact_wa"
                                            value="{{ old('tim2_contact_wa') }}">
                                        @error('tim2_contact_wa')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="ID Line Perwakilan" name="tim2_contact_line"
                                            value="{{ old('tim2_contact_line') }}">
                                        @error('tim2_contact_line')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center w-full">
                        <div
                            class="w-1/2 min-w-[340px] my-1 form-content shadow-md  px-6 py-3 mb-4 font-pathway shadow-[#D61625]">
                            <div class="mb-1">
                                <div>
                                    <label
                                        class="block font-brodyrawk text-center text-xl md:text-2xl form-label mb-0"
                                        for="">Bukti Pembayaran</label>
                                </div>
                                <div>
                                    <h6 class="text-lg font-ltmuseumbold">Pembayaran sebesar Rp 250.000,~ ke BCA 6600448160 a/n Helena Hanna Haryadi</h6>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 font-ltmuseumreg"
                                        type="file" accept="image/*" name="payment_proof">
                                    @error('payment_proof')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-xl md:text-2xl px-5 py-1"
                                    type="button" data-modal-target="#confirmationModal">
                                    Daftar
                                </button>
                            </div>
                            <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-white w-11/12 md:w-1/3 p-5 rounded-lg shadow-lg">
                                    <h2 class="font-ltmuseumbold text-xl mb-4 text-black">Konfirmasi Pendaftaran</h2>
                                    <p class="text-black mb-6 font-ltmuseumreg">Pastikan data yang dimasukkan benar adanya.</p>
                                    <div class="flex justify-end">
                                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2 font-ltmuseum" data-modal-close>Cancel</button>
                                        <button class="bg-[#D61625] text-white px-4 py-2 rounded font-ltmuseum" type="submit">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    @elseif($amount == 3)
        <form action="/rac/store" class="pb-24" enctype="multipart/form-data" method="post">
            <div class="flex justify-center align-middle form-container">
                <div class="flex flex-col w-[400px] md:w-[1200px] max-w-[95vw]">
                    <div
                        class="flex flex-row flex-wrap justify-center w-full form-content shadow-md px-8 py-3 mb-10 font-pathway shadow-[#D61625]">
                        <div class="w-full font-brodyrawk text-xl md:text-2xl text-white text-center">Data Tim</div>
                        @csrf
                        @if (session()->has('success'))
                            <div class="text-sm text-green-500 font-ltmuseumbold" role="alert">{{ session('success') }}</div>
                        @endif

                        <div class="min-w-[30%] w-[340px] my-1 mx-4">
                            <div class="font-ltmuseumbold text-xl md:text-2xl">TIM 1</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="font-ltmuseumbold">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                            value="{{ old('tim1_penyiar1') }}">
                                        @error('tim1_penyiar1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                            value="{{ old('tim1_penyiar2') }}">
                                        @error('tim1_penyiar2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                            value="{{ old('tim1_operator') }}">
                                        @error('tim1_operator')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg "
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                        value="{{ old('tim1_institusi') }}">
                                    @error('tim1_institusi')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                            value="{{ old('tim1_nims1') }}">
                                        @error('tim1_nims1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                            value="{{ old('tim1_nims2') }}">
                                        @error('tim1_nims2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                            value="{{ old('tim1_nimop') }}">
                                        @error('tim1_nimop')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="number" placeholder="Nomor WA Perwakilan" name="tim1_contact_wa"
                                            value="{{ old('tim1_contact_wa') }}">
                                        @error('tim1_contact_wa')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="ID Line Perwakilan" name="tim1_contact_line"
                                            value="{{ old('tim1_contact_line') }}">
                                        @error('tim1_contact_line')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-[30%] w-[340px] my-1 mx-4">
                            <div class="font-ltmuseumbold text-xl md:text-2xl">TIM 2</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="font-ltmuseumbold">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim2_penyiar1"
                                            value="{{ old('tim2_penyiar1') }}">
                                        @error('tim2_penyiar1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim2_penyiar2"
                                            value="{{ old('tim2_penyiar2') }}">
                                        @error('tim2_penyiar2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim2_operator"
                                            value="{{ old('tim2_operator') }}">
                                        @error('tim2_operator')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim2_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim2_institusi"
                                        value="{{ old('tim2_institusi') }}">
                                    @error('tim2_institusi')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims1"
                                            value="{{ old('tim2_nims1') }}">
                                        @error('tim2_nims1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nims2"
                                            value="{{ old('tim2_nims2') }}">
                                        @error('tim2_nims2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim2_nimop"
                                            value="{{ old('tim2_nimop') }}">
                                        @error('tim2_nimop')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="number" placeholder="Nomor WA Perwakilan" name="tim2_contact_wa"
                                            value="{{ old('tim2_contact_wa') }}">
                                        @error('tim2_contact_wa')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim2_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="ID Line Perwakilan" name="tim2_contact_line"
                                            value="{{ old('tim2_contact_line') }}">
                                        @error('tim2_contact_line')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-[30%] w-[340px] my-1 mx-4">
                            <div class="font-ltmuseumbold text-xl md:text-2xl">TIM 3</div>
                            <div>
                                <div class="mb-1">
                                    <label class="block form-label text-sm mb-0" for="">
                                        <span class="font-ltmuseumbold">Penyiar 1</span>
                                    </label>
                                    <div>
                                        <input required
                                            class="block @error('tim3_penyiar1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim3_penyiar1"
                                            value="{{ old('tim3_penyiar1') }}">
                                        @error('tim3_penyiar1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_penyiar2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outlinefont-ltmuseumreg" 
                                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim3_penyiar2"
                                            value="{{ old('tim3_penyiar2') }}">
                                        @error('tim3_penyiar2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_operator') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="Nama Lengkap Operator" name="tim3_operator"
                                            value="{{ old('tim3_operator') }}">
                                        @error('tim3_operator')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-1">
                                <div>
                                    <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Institusi/Organisasi
                                        Asal</label>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('tim3_institusi') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                        type="text" placeholder="Institusi/Organisasi Asal" name="tim3_institusi"
                                        value="{{ old('tim3_institusi') }}">
                                    @error('tim3_institusi')
                                        <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            1</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nims1') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim3_nims1"
                                            value="{{ old('tim3_nims1') }}">
                                        @error('tim3_nims1')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Penyiar
                                            2</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nims2') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim3_nims2"
                                            value="{{ old('tim3_nims2') }}">
                                        @error('tim3_nims2')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">NIM
                                            Operator</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_nimop') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="'-' untuk luar UMN" name="tim3_nimop"
                                            value="{{ old('tim3_nimop') }}">
                                        @error('tim3_nimop')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">Nomor WA
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_contact_wa') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="number" placeholder="Nomor WA Perwakilan" name="tim3_contact_wa"
                                            value="{{ old('tim3_contact_wa') }}">
                                        @error('tim3_contact_wa')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div>
                                        <label class="block form-label text-sm mb-0 font-ltmuseumbold" for="">ID
                                            Line
                                            Perwakilan</label>
                                    </div>
                                    <div>
                                        <input required
                                            class="block @error('tim3_contact_line') border-red-500 @enderror shadow appearance-none border  w-full py-2 px-3 form-input leading-tight focus:outline-none focus:shadow-outline font-ltmuseumreg"
                                            type="text" placeholder="ID Line Perwakilan" name="tim3_contact_line"
                                            value="{{ old('tim3_contact_line') }}">
                                        @error('tim3_contact_line')
                                            <div class="text-sm text-red-600 font-ltmuseumreg">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center w-full">
                        <div
                            class="min-w-[33%] w-[340px] my-1 form-content shadow-md  px-6 py-3 mb-4 font-pathway shadow-[#D61625]">
                            <div class="mb-1">
                                <div>
                                    <label
                                        class="block font-brodyrawk text-center text-xl md:text-2xl form-label mb-0"
                                        for="">Bukti Pembayaran</label>
                                </div>
                                <div>
                                    <h6 class="text-lg font-ltmuseumbold">Pembayaran sebesar Rp 380.000,~ ke BCA 6600448160 a/n Helena Hanna Haryadi/h6>
                                </div>
                                <div>
                                    <input required
                                        class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border  cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 font-ltmuseumreg"
                                        type="file" accept="image/*" name="payment_proof">
                                    @error('payment_proof')
                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <button class="button-submit font-ltmuseumbold text-white bg-[#D61625] w-full text-xl md:text-2xl px-5 py-1"
                                    type="button" data-modal-target="#confirmationModal">
                                    Daftar
                                </button>
                            </div>
                            <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-white w-11/12 md:w-1/3 p-5 rounded-lg shadow-lg">
                                    <h2 class="font-ltmuseumbold text-xl mb-4 text-black">Konfirmasi Pendaftaran</h2>
                                    <p class="text-black mb-6 font-ltmuseumreg">Pastikan data yang dimasukkan benar adanya.</p>
                                    <div class="flex justify-end">
                                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded mr-2 font-ltmuseum" data-modal-close>Cancel</button>
                                        <button class="bg-[#D61625] text-white px-4 py-2 rounded font-ltmuseum" type="submit">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</body>
<script>
    document.querySelectorAll('[data-modal-target]').forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.getAttribute('data-modal-target'));
        modal.classList.remove('hidden');
    });
});

document.querySelectorAll('[data-modal-close]').forEach(button => {
    button.addEventListener('click', () => {
        button.closest('.fixed').classList.add('hidden');
    });
});

// Optional: Close modal when clicking outside the modal content
window.addEventListener('click', event => {
    const modal = document.querySelector('#confirmationModal');
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
});
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
        border-bottom: solid 4px #D61625;
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
    /* ::-webkit-input-placeholder {
        font-family: 'Brody_Rawk';
    } */

    /* Firefox 4-18 */
    /* :-moz-placeholder {
        font-family: 'Brody_Rawk';
    } */

    /* Firefox 19+ */
    /* ::-moz-placeholder {
        font-family: 'Brody_Rawk';
    } */

    /* IE 10-11 */
    /* :-ms-input-placeholder {
        font-family: 'Brody_Rawk';
    } */

    /* Edge */
    /* ::-ms-input-placeholder {
        font-family: 'Brody_Rawk';
    } */

    /* MODERN BROWSER */
    /* ::placeholder {
        font-family: 'Brody_Rawk';
    } */
</style>
@endsection

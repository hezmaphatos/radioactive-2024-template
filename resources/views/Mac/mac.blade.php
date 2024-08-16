@extends('layouts.main')

@section('container')
<body class="text-white" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('tes1.jpg') center/cover fixed;">


<section class="flex min-h-screen flex-col justify-center items-center text-center px-4 font-['Brody_Rawk',sans-serif]">
    <h1 class="text-[24px] md:text-[48px] font-bold mb-8 mt-auto text-red-800" style="letter-spacing: 5px;" data-aos="fade-up">Mini Announcing Challenge</h1>
    <p class="text-[9px] max-w-4xl sm:text-[20px] mb-8" style="letter-spacing: 5px;" data-aos="fade-up" data-aos-delay="100">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel cursus nisi. Fusce dictum maximus eros. Mauris convallis nunc non odio lobortis tincidunt. Vestibulum ultrices vel lectus a pharetra. Nullam at molestie mauris, posuere accumsan eros. Aenean congue eget massa id sollicitudin. Etiam eu turpis at magna sagittis rutrum eget in lorem. Sed et orci quis sapien finibus consectetur. Curabitur ut metus id enim pulvinar bibendum ut mollis erat.
    </p>
    <nav class="flex justify-between w-full max-w-2xl mb-8 mt-5 text-[15px] m-s:text-[20px] ">
        <a href="#" class="no-underline text-white md:text-base font-['LT_Museum',sans-serif] hover:text-red-500" onclick="scrollToDownload()">HANDBOOK & PENDAFTARAN</a>
        <a href="#" class="no-underline text-white md:text-base font-['LT_Museum',sans-serif] hover:text-red-500" onclick="scrollToTimeline()">TIMELINE</a>
    </nav>
    <p class="mb-4 mt-auto animate-bounce">Scroll Down</p>
    <svg class="w-6 h-20 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Scroll down icon">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</section>

<section class="relative bg-black min-h-screen flex items-center justify-center font-['Brody_Rawk',sans-serif]" id="download">
    <div class="absolute inset-0 h-[88%]" data-aos="fade-right" data-aos-delay="500">
        <img src="tes1.jpg" alt="Background Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="absolute flex left-0 bottom-5 opacity-50">
        <button class="bg-black border border-white text-white px-4 py-2 hover:bg-white transition duration-300 hover:text-black">Handbook</button>
        <button class="bg-black border border-white text-white px-4 py-2 hover:bg-white transition duration-300 hover:text-black">Pendaftaran</button>  
    </div>
    <div class="absolute bottom-10 right-10 z-10">
        <span class="text-red-800 text-5xl sm:text-7xl md:text-8xl lg:text-9xl xl:text-10xl font-bold" data-aos="fade-up" data-aos-delay="100">MAC</span>
    </div>
</section>

<section class="min-h-screen timeline max-w font-['LT_Museum',sans-serif]" id="timeline">
    <div id="title" class="text-center my-10">
        <h1 class="m-[48px] md:text-5xl italic" style="letter-spacing: 5px;">TIMELINE MINI ANNOUNCING CHALLENGE 2024</h1>
        <p class="text-white md:text-xl tracking-widest">INI MOTTONYA</p>
    </div>
    <div class="relative" data-aos="zoom-in-right" data-aos-delay="100">
        <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
        <div class="mx-auto max-w-[65%] m-s:max-w-[34.15em]">
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 1 : Pendaftaran</h2>
                    <p class="text-[10px] text-gray-300 m-s:text-[16px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 2 : Seleksi</h2>
                    <p class="text-[10px] text-gray-300 m-s:text-[16px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 3 : Pemberitahuan Hasil Seleksi</h2>
                    <p class="text-[10px] text-gray-300 m-s:text-[16px]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
    function scrollToTimeline() {   
        const timelineSection = document.getElementById('timeline');
        timelineSection.scrollIntoView({ behavior: 'smooth' });
    }
    function scrollToDownload() {
        const downloadSection = document.getElementById('download');
        downloadSection.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection

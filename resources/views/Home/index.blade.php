@extends('layouts.main')

@section('container')
<body class="overflow-x-hidden bg-black">
    <div id="button1"
        class="fixed bottom-12 end-4 md:bottom-20 md:end-20 flex justify-center items-center z-50 animate-bounce"
        data-aos="fade-up">
        <a href="/closing-night/#ticket" class="no-underline">
            <button
                class="rounded-[100%] h-[5.5rem] md:h-32 aspect-square bg-[#D61525] text-white border-white font-museum text-2xs md:text-sm p-2 md:p-4 font-bold border-2 hover:bg-[#FFF000] hover:text-[#D61525]">
                GET YOUR TICKETS
            </button>
        </a>
    </div>
    <div class="relative flex flex-col items-center" data-aos="fade-up" data-aos-duration="3000">
        <div data-aos="fade-up" class="flex flex-col md:flex-row items-center justify-center gap-4 mt-18">
            <p class="text-center font-museum text-xs text-white z-20">THE MOST SPECTACULAR ANNUAL EVENT BY </p>
            <img class="w-20 md:w-24 z-16" src="images/LOGO UMN RADIO.webp">
        </div>
        <img class="object-cover -mt-4 md:-mt-28 z-0" src="images/logo.png" alt="background logo" />
        <video autoplay loop muted class="object-cover -mt-4 md:mt-0 z-30 w-[640px] absolute"
            src="images/BACKGROUND_VIDEO.webm" loading="lazy" alt="logo video">
            <source src="images/BACKGROUND_VIDEO.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>

<div id="about-us" class="flex flex-col justify-center items-center h-screen mt-0 mb-0 px-4 sm:px-8" data-aos="fade-up" data-aos-duration="1500">
    <h4 class="font-brody text-5xl sm:text-6xl md:text-8xl text-white text-center my-6 sm:my-12 tracking-wider">ABOUT US</h4>
    <div class="px-4 sm:px-8 md:px-20 lg:px-48">
        <p class="font-museum text-base sm:text-lg md:text-xl text-white text-justify md:text-center tracking-wider">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel cursus nisi. Fusce dictum maximus eros.
            Mauris convallis nunc non odio lobortis tincidunt. Vestibulum ultrices vel lectus a pharetra. Nullam at
            molestie mauris, posuere accumsan eros. Aenean congue eget massa id sollicitudin.
        </p>
    </div>
</div>

<div id="marquee-section" class="">
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
        </div>
        <div class="marquee marquee2 marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8"> DARE TO STRIVE
                DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE </span>
        </div>
    </div>
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w marquee-reverse">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
        </div>
    </div>
</div>

<div id="marquee-section" class="mt-8 mb-16">
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
  
    <div id="section-1" class="pt-24 max-w-4xl mx-auto">
        <div class="marquee marquee2 marquee-w">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8"> DARE TO STRIVE
                DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE </span>
        </div>
    </div>
    <div class="overflow-hidden whitespace-nowrap">
        <div class="marquee marquee-w marquee-reverse">
            <span class="font-museum text-2xl text-white text-justify md:text-center tracking-8">DARE TO STRIVE DARE
                TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE DARE TO STRIVE</span>
        </div>
    </div>
</div>

<!-- <div id="upcoming-events" class="mt-8 lg:mb-0 lg:my-16 relative" data-aos="fade-up" data-aos-duration="3000" >
        <h4 class="font-brody md:text-3xl text-white text-center my-12 tracking-8">UPCOMING EVENTS</h4>
        <div class="relative overflow-hidden">
            <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
                    <a href="/voc" class="no-underline">
                        <div class="flex bg-[#0E0EC0] flex-row max-h-44 lg:max-h-96">
                            <div class="flex flex-col justify-start p-4 lg:p-6 w-24 lg:w-56">
                                <h1 class="mb-2 text-xs lg:text-4xl font-taruno font-medium text-white pt-4">
                                    <b>18-30</b>
                                </h1>
                                <h3 class="mb-2 text-xs lg:text-3xl font-taruno font-medium text-white">
                                    <b>Sept</b>
                                </h3>
                            </div>
                            <div class="relative">
                                <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO VO CHALLENGE.webp" alt="Voiceover Challenge">
                                <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                    <div class="lg:px-4 lg:pb-6 pb-3">
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Voiceover</h3>
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Challenge</h3>
                                    </div>
                                    <div class="lg:px-4">
                                        <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
                    <a href="/rac" class="no-underline">
                        <div class="flex bg-[#0E0EC0] max-h-44 lg:max-h-96 flex-row">
                            <div class="flex flex-col justify-start p-4 lg:p-6 w-24 lg:w-56">
                                <h1 class="mb-2 text-xs lg:text-4xl font-taruno font-medium text-white pt-4">
                                    <b>28</b>
                                </h1>
                                <h3 class="mb-2 text-xs lg:text-3xl font-taruno font-medium text-white">
                                    <b>Oct</b>
                                </h3>
                            </div>
                            <div class="relative">
                                <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO RAC.webp" alt="Announcing Competition">
                                <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                    <div class="lg:px-4 lg:pb-6 pb-3">
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Announcing</h3>
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Competition</h3>
                                    </div>
                                    <div class="lg:px-4">
                                        <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item flex-none w-full lg:w-1/3 border border-white">
                    <a href="/closing-night" class="no-underline">
                        <div class="flex bg-[#0E0EC0] max-h-44 lg:max-h-96">
                            <div class="flex flex-col justify-start p-4 lg:p-6 w-24 lg:w-56">
                                <h1 class="mb-2 text-xs lg:text-4xl font-taruno font-medium text-white pt-4">
                                    <b>18</b>
                                </h1>
                                <h3 class="mb-2 text-xs lg:text-3xl font-taruno font-medium text-white">
                                    <b>Nov</b>
                                </h3>
                            </div>
                            <div class="relative">
                                <img class="h-44 lg:h-96 w-56 lg:w-auto object-cover" src="/images/FOTO CLOSING NIGHT.webp" alt="Closing Night">
                                <div class="flex flex-row justify-between items-center md:items-start absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black lg:from-50% from-30%">
                                    <div class="lg:px-4 lg:pb-6 pb-3">
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Closing</h3>
                                        <h3 class="text-md lg:text-3xl font-taruno text-white font-bold">Night</h3>
                                    </div>
                                    <div class="lg:px-4">
                                        <img class="h-10 md:h-16" src="/images/BUTTON.webp" alt="Button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="absolute top-1/2 transform -translate-y-1/2 left-4 lg:left-10 z-10">
                <button id="prev" class="bg-white text-black p-2 rounded-full shadow hover:bg-gray-300 focus:outline-none">←</button>
            </div>
            <div class="absolute top-1/2 transform -translate-y-1/2 right-4 lg:right-10 z-10">
                <button id="next" class="bg-white text-black p-2 rounded-full shadow hover:bg-gray-300 focus:outline-none">→</button>
            </div>
        </div>
    </div> -->

<section class="min-h-screen max-w font-['LT_Museum',sans-serif] p-4" id="timeline">
    <div id="title" class="text-center my-8 px-4">
        <h1 class="font-brody md:text-3xl text-white text-center my-12 tracking-8 m-[0.3em] md:text-[3em] italic"
            style="letter-spacing: 5px;">GENERAL TIMELINE</h1>
        <p class="text-white md:text-xl tracking-widest">------</p>
    </div>
    <div class="relative" data-aos="zoom-in-right" data-aos-delay="100">
        <div class="absolute left-1/2 h-full w-px bg-white hidden m-s:block"></div>
        <div class="mx-auto max-w-[34.15em]">
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 1 : Pendaftaran</h2>
                    <p class="leading-[27px] text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel
                        illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque
                        labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:-translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 2 : Seleksi</h2>
                    <p class="leading-[27px] text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel
                        illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque
                        labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
            <div id="checkpoint" class="border-2 border-white pl-12 m-s:translate-x-[19em] rounded-2xl p-6 mb-4 mt-4">
                <div>
                    <h2 class="mb-2">Date 3 : Pemberitahuan Hasil Seleksi</h2>
                    <p class="leading-[27px] text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam atque sit tenetur commodi vel
                        illo amet natus, corporis, facilis magni voluptate quibusdam quis ducimus ipsum ullam itaque
                        labore voluptatibus! Reprehenderit!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<div id="partners" class="-mb-20 md:-mb-0 md:my-24 mt-16" data-aos="fade-up">
    <div class="container mx-auto flex flex-col lg:flex-row items-center lg:justify-between">
        <!-- Text -->
        <div data-aos="zoom-in-right" data-aos-delay="400"
            class="w-full lg:w-1/2 mb-12 lg:mb-0 lg:text-left text-center">
            <h2 class="font-brody md:text-5xl my-12 tracking-8 text-red-600">PARTNERS</h2>
        </div>
        <!-- Images -->
        <div class="w-full lg:w-1/2">
            <div class="grid grid-cols-4 gap-4">
                <img data-aos="zoom-in-right" data-aos-delay="200" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/logo-imkom.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="400" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/ubradio.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="600" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/ultimagz.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="800" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/funradio.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1000" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/radiountar.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1200" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/LOGO-ERAFM-UNJ.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1400" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/infolombasch.webp" alt="" />
                <img data-aos="zoom-in-right" data-aos-delay="1600" class="h-auto md:w-40 md:mx-8 mb-2"
                    src="/images/medialomba.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/logo-event.list.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/eventcampus.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/t-radio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/logo-eventmahasiswa8.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/eventcenter.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2 rounded bg-[#ffffff7d]" src="/images/eventnetwork.webp"
                    alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/Logo-Eventhunter.id.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/umntv.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/fourtyfiveradio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/eventapaaja.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/infoevent.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/LOGO-UBV-Radio.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2 rounded bg-[#ffffff7d]" src="/images/moestopo.webp" alt="" />
                <img class="h-auto md:w-40 md:mx-8 mb-2" src="/images/Se7enline-Radio.webp" alt="" />
            </div>
        </div>
    </div>
</div>

<!-- Sponsors Section -->
<div id="sponsors" class="py-16">
    <div data-aos="zoom-in-right" data-aos-delay="400"
        class="container mx-auto flex flex-col lg:flex-row items-center lg:justify-between">
        <!-- Images -->
        <div class="w-full lg:w-1/2">
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
                <div class="bg-black border border-white aspect-w-1 aspect-h-1"></div>
            </div>
        </div>
        <!-- Text -->
        <div class="w-full lg:w-1/2 mt-12 lg:mt-0 lg:text-right text-center">
            <h2 class="font-brody md:text-5xl my-12 tracking-8 text-red-600">SPONSORS</h2>
        </div>
    </div>
</div>


<div id="after" class="-mb-20 md:-mb-0 md:my-24" data-aos="fade-up">
    <h2 class="font-brody md:text-3xl text-white text-center my-12 tracking-8">AFTER MOVIE</h2>
    <div class="w-full flex justify-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/noafJ76PHeM?si=x_X9yxOawXxH8Id2"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script>
    window.addEventListener('scroll', function () {
        var header = document.getElementById('header');
        if (window.scrollY > 0) {
            header.classList.remove('bg-transparent');
            header.classList.add('bg-[#0E0EC0]');
        } else {
            header.classList.add('bg-transparent');
            header.classList.remove('bg-[#0E0EC0]');
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('carousel');
        const items = document.querySelectorAll('.carousel-item');
        const totalItems = items.length;
        let currentIndex = 0;

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        });

        function updateCarousel() {
            const offset = -currentIndex * 100;
            carousel.style.transform = `translateX(${offset}%)`;
        }
    });
</script>
<script>
    var CurrentDate = new Date();
    var regDate = new Date("2023-09-18");
    var closeDate = new Date("2024-10-20");
    var btnReg = document.getElementById('btnReg');

    function checkTime() {
        if (CurrentDate >= regDate) {
            // handbookbtn.removeAttribute("disabled");
            btnReg.removeAttribute("disabled");
        }
        if (CurrentDate >= closeDate) {
            btnReg.setAttribute("class", "hidden");
        }
    }
    checkTime();
    setInterval(checkTime, 1000);
</script>
<script>
    function scrollToTimeline() {
        const timelineSection = document.getElementById('timeline');
        timelineSection.scrollIntoView({ behavior: 'smooth' });
    }
    function scrollToDownload() {
        const handbookSection = document.getElementById('download');
        handbookSection.scrollIntoView({ behavior: 'smooth' });
    }
</script>
</body>
@endsection

<x-frontend-layout>
    <section id="homepageTop" class="h-[800px] lg:h-[95vh] w-full relative  overflow-hidden py-0">

        <div class="content">
            <div class="max-w-7xl mx-auto px-6 md:px-0 w-full">
                <div class="flex flex-row gap-8">
                    <div class="w-full">
                        <h1 class="text-white font-roboBold text-5xl lg:text-8xl mb-8">
                            Hi, I'm <span class="">Matt Noye</span>
                        </h1>
                        <p class="text-white font-montsRegular text-xl lg:text-4xl mb-10">I create <span id="homepageTypeWriter"></span></p>
                        <div class="flex flex-col md:flex-row gap-10">
                            <a href="#recentWorkBanner" class="smoothScroll purpleBtnLg">VIEW MY WORK</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        <div class="heroBottomWave absolute bottom-0 w-full h-auto lg:h-[150px] z-20">
            <img class="block w-full lg:h-auto" src="{{ asset('assets/images/backgrounds/hero-bottom-wave.svg') }}">
        </div>
    </section>
    <section id="homeAboutBanner" class="relative">
        <div class="container2">
            <div class="flex flex-row">
                <div class="w-full md:w-1/2">
                    <h2 class="sectionTitle text-left">
                        About Me
                    </h2>
                    <p>
                        Hi and welcome to my website, I'm Matt Noye a full stack developer with over a decades experience (nearly 15 years to be precise).
                    </p>
                    <p>
                        Sed pellentesque cursus orci in venenatis. Aenean laoreet massa nec sapien cursus, sed vestibulum sem laoreet. Aenean volutpat scelerisque eleifend. Sed dictum bibendum urna, id sodales eros facilisis vel. Sed eu quam a massa semper malesuada. In mattis, nibh ut aliquam tincidunt, felis ipsum imperdiet nibh, quis fermentum nunc nisl in erat. Nunc id euismod nisl, eu vulputate eros. Integer a magna nec erat consequat consequat. Sed convallis lectus vel malesuada rutrum.
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <img class="block w-auto h-[350px] mx-auto" src="{{ asset('assets/images/matt-avator.svg') }}">
                </div>
            </div>
            <div class="flex flex-row">
                <div class="collapse w-full" id="aboutMeCollapse">
                    <div class="pt-8 pb-4 px-2">
                        <div class="flex flex-col md:flex-row">
                            <div class="w-full md:w-1/2">
                                <h3 class="text-slate-700 font-roboBold text-3xl mb-6 ">My Skills</h3>
                            </div>
                            <div class="w-full md:w-1/2">
                                <h3 class="text-slate-700 font-roboBold text-3xl mb-6 ">The Tools I Use</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row pt-8 pb-16">
                <button class="purpleBtnLg aboutMeCollapseBtn mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#aboutMeCollapse" aria-expanded="false">
                    Read more <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
        <div class="heroBottomWave absolute bottom-0 w-full h-auto lg:h-[150px] z-20">
            <img class="block w-full lg:h-auto" src="{{ asset('assets/images/backgrounds/purple-wave-top.svg') }}">
        </div>
    </section>
    <section class="whatIDoBanner bg-purple-700 relative">
        <div class="container2">
            <div class="flex flex-row">
                <div class="w-full">
                    <h2 class="text-white text-4xl font-roboBold uppercase mb-12 mx-auto">What I Do</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="item">
                    <a href="">
                        <h4>Web & UX Design</h4>
                        <div class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <h4>Web Development</h4>
                        <div class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <h4>eCommerce Development</h4>
                        <div class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>

                </div>
                <div class="item">
                    <a href="">
                        <h4>Laravel Development</h4>
                        <div href="" class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <h4>Website Maintenance</h4>
                        <div href="" class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <h4>Web Hosting</h4>
                        <div href="" class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <h4>Consulting</h4>
                        <div href="" class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <h4>Training </h4>
                        <div href="" class="pageBtn">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="recentWorkBanner relative" id="recentWorkBanner">
        <div class="heroBottomWave absolute top-0 w-full h-auto lg:h-[150px] z-20">
            <img class="block w-full lg:h-auto" src="{{ asset('assets/images/backgrounds/purple-wave-bottom.svg') }}">
        </div>
        <div class="container2 py-40">
            <div class="flex flex-row align-center justify-center">
                <div class="w-full">
                    <h3 class="sectionTitle !text-slate-700 !text-left">
                        My Recent Work
                    </h3>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">

            </div>
            <div class="flex flex-row">
                <a href="" class="slateBtnLg w-[200px] mx-auto">View all <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </section>
    <section class="whoWorkWithBanner">
        <div class="container2"></div>
    </section>
    <section class="testimonialsBanner">
        <div class="container2">

        </div>
    </section>
    <section class="recentPostsBanner">
        <div class="container2"></div>
    </section>
</x-frontend-layout>

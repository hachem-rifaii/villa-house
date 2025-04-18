<header>
    <!-- header top -->
    <div class="bg-section-bg-6">
        <div class="container text-white text-13px md:text-sm font-bold">
            <div class="flex justify-center md:justify-between items-center flex-wrap md:flex-nowrap">
                <div class="flex justify-center md:block pt-2 md:pt-0">
                    <ul class="basis-full md:basis-auto flex gap-6 lg:gap-9 items-center">
                        <li>
                            <a class="hover:text-secondary-color" href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you">
                                <i class="icon-mail text-secondary-color font-bold mr-0.5"></i>
                                info@webmail.com
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="basis-full md:basis-auto flex justify-center md:block py-5px md:py-0">
                    <ul class="text flex items-center gap-15px">
                        <li>
                            <a href="https://www.facebook.com" title="Facebook">
                                <i class="fab fa-facebook-f font-bold"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.x.com" title="Twitter">
                                <i class="fab fa-twitter font-bold"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" title="Instagram">
                                <i class="fab fa-instagram font-bold"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.dribbble.com" title="Dribbble">
                                <i class="fab fa-dribbble font-bold"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- navbar main -->
    <div class="sticky-header z-xl bg-white transition-all duration-700">
        <div class="container flex flex-col md:flex-row justify-center md:justify-between items-center relative py-21px">
            <nav class="flex-grow hidden xl:block">
                <ul class="flex items-center justify-center gap-15px xl:gap-5">
                    <li class="relative group">
                        <a href="{{ route('home') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Home
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('sell') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Sell
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('rent') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Rent
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('offplan') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Off Plan
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('catalog') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Catalogs
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('agents') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Agents
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('about') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            About
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="{{ route('contact') }}" class="text-lg xl:text-15px 2xl:text-lg text-heading-color hover:text-secondary-color font-semibold whitespace-nowrap pl-10px py-22px">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- header right -->
            <div>
                <ul class="flex items-center gap-10px">
                    <li class="relative search-form-container">
                        <button class="search-toggle h-50px w-50px text-heading-color shadow-box-shadow-1 flex justify-center items-center hover:bg-secondary-color hover:text-white transition-all duration-300">
                            <i class="icon-search for-search-show font-bold"></i>
                            <i class="icon-cancel for-search-close font-bold hidden"></i>
                        </button>
                        <div class="search-form h-0 overflow-hidden absolute right-0 top-full mt-15px transition-all duration-300 shadow-box-shadow-3 z-xl bg-white">
                            <form class="w-80 p-15px relative">
                                <input type="text" placeholder="Search here..." class="text-sm text-paragraph-color pl-5 pr-50px placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-60px block w-full rounded-none">
                                <button type="submit" class="absolute top-1/2 -translate-y-1/2 right-7 text-heading-color">
                                    <i class="icon-search text-lg font-bold"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                    <li class="group relative">
                        <a href="#" class="h-50px w-50px text-heading-color shadow-box-shadow-1 flex justify-center items-center hover:bg-secondary-color hover:text-white transition-all duration-300">
                            <i class="icon-user font-bold text-lg"></i>
                        </a>
                        <!-- dropdown -->
                        <ul class="py-10px w-150px shadow-box-shadow-4 absolute right-0 top-full opacity-0 invisible translate-y-4 bg-white transition-all duration-300 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 z-xl">
                            <li>
                                <a class="whitespace-nowrap px-15px py-5px" href="{{ route('wishlist') }}">Wishlist</a>
                            </li>
                        </ul>
                    </li>
                    <li class="block xl:hidden">
                        <div class="show-drawer d-xl-none h-50px w-50px text-heading-color shadow-box-shadow-1 flex justify-center items-center transition-all duration-300 relative">
                            <a href="#ltn__utilize-drawer" class="utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)"></path>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="drawer-container mobile-menu-container">
        <div class="drawer-overlay fixed top-0 left-0 w-full h-full bg-black -z-1 close-drawer opacity-0 transition-all duration-300 invisible cursor-zoom-out block xl:hidden"></div>
        <div class="drawer mobile-menu fixed top-0 -left-[300px] xs:-left-[400px] px-5 xs:px-10 py-50px w-300px xs:w-100 h-full transition-all duration-500 shadow-dropdown-secodary bg-whiteColor z-high block xl:hidden bg-white">
            <div class="pr-15px overflow-auto h-full">
                <!-- mobile menu wrapper -->
                <div>
                    <!-- mobile logo area -->
                    <div class="flex justify-between items-center border-b border-border-primary pt-3px pb-10px mb-25px">
                        <div>
                            <button class="close-drawer text-black text-3xl px-15px py-2">×</button>
                        </div>
                    </div>

                    <!-- search input -->
                    <div class="mb-50px">
                        <form class="w-full relative">
                            <input type="text" placeholder="Search..." class="text-sm text-paragraph-color pl-5 pr-50px placeholder:text-paragraph-color outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none">
                            <button type="submit" class="absolute top-1/2 -translate-y-1/2 right-7 text-heading-color">
                                <i class="icon-search text-lg font-bold"></i>
                            </button>
                        </form>
                    </div>

                    <!-- mobile menu accordions -->
                    <div class="border-b border-border-primary dark:border-borderColor-dark pb-8">
                        <ul class="accordion-container">
                            <li class="accordion mt-4">
                                <div class="accordion-controller flex items-center justify-between cursor-pointer hover:text-secondary-color uppercase text-sm lg:text-base py-2 lg:py-2.5">
                                    <a href="{{ route('home') }}">Home</a>
                                    <button class="px-3 h-full">
                                        <span class="w-[10px] h-0.5 bg-gray1 block dark:bg-whiteColor bg-opacity-75"></span>
                                        <span class="w-[10px] h-0.5 bg-gray1 block dark:bg-whiteColor bg-opacity-75 rotate-90 -mt-[2px] transition-all duration-500"></span>
                                    </button>
                                </div>
                            </li>
                            <li class="accordion mt-4">
                                <div class="accordion-controller flex items-center justify-between cursor-pointer hover:text-secondary-color uppercase text-sm lg:text-base py-2 lg:py-2.5">
                                    <a href="{{ route('sell') }}">Sell</a>
                                    <button class="px-3 h-full">
                                        <span class="w-[10px] h-0.5 bg-gray1 block dark:bg-whiteColor bg-opacity-75"></span>
                                        <span class="w-[10px] h-0.5 bg-gray1 block dark:bg-whiteColor bg-opacity-75 rotate-90 -mt-[2px] transition-all duration-500"></span>
                                    </button>
                                </div>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('rent') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">Rent</a>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('offplan') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">Off Plan</a>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('catalog') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">Catalogs</a>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('agents') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">Agents</a>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('about') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">About Us</a>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('contact') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">Contact</a>
                            </li>
                            <li class="mt-4">
                                <a href="{{ route('wishlist') }}" class="!leading-22px text-darkdeep1 text-sm lg:text-base hover:text-secondary-color">Wishlist</a>
                            </li>
                        </ul>
                    </div>

                    <!-- my account -->
                    <div>
                        <ul class="mb-30px pb-5 pt-5px border-b border-border-primary">
                            <li class="group mt-4">
                                <a href="{{ route('wishlist') }}" class="text-sm lg:text-base">
                                    <span class="inline-block h-50px w-50px border-2 border-border-color-1 text-center leading-50px mr-3">
                                        <i class="far fa-heart"></i><sup class="pl-0.5">3</sup>
                                    </span>
                                    Wishlist
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Mobile menu social area -->
                    <div>
                        <ul class="flex gap-3 items-center pt-4">
                            <li>
                                <a class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base" href="https://www.facebook.com">
                                    <i class="fab fa-facebook-f leading-10"></i>
                                </a>
                            </li>
                            <li>
                                <a class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base" href="https://www.twiter.com">
                                    <i class="fab fab fa-twitter leading-10"></i>
                                </a>
                            </li>
                            <li>
                                <a class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base" href="https://www.linkedin.com">
                                    <i class="fab fa-linkedin leading-10"></i>
                                </a>
                            </li>
                            <li>
                                <a class="h-10 w-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white text-center text-sm lg:text-base" href="https://www.instagram.com">
                                    <i class="fab fa-instagram leading-10"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
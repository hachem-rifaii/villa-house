@extends('layouts.app')

@section('title', 'Property Details - VillaHouse')

@section('content')
    <!-- banner section -->
    <main>
        <!-- banner section -->
        <section>
          <!-- banner section -->
          <div
            class="w-full bg-[url('../img/bg/14.jpg')] bg-no-repeat bg-cover bg-center relative z-0 after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-white after:bg-opacity-30 after:-z-1"
          >
            <div class="container py-110px">
              <h1
                class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-4xl font-bold text-heading-color mb-15px"
              >
                <span
                  class="leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3"
                  >Property details</span
                >
              </h1>
              <ul
                class="breadcrumb flex gap-30px items-center text-sm lg:text-base font-bold pt-4"
              >
                <li class="home relative leading-1.8 lg:leading-1.8">
                  <a href="index.html"
                    ><i class="fas fa-home text-secondary-color"></i> Home</a
                  >
                </li>
                <li class="leading-1.8 lg:leading-1.8 text-heading-color">
                  Property details
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- details slider -->
        <div>
          <div class="news-slider-container swiper-container relative">
            <!-- product details -->
            <div class="swiper product-details-slider static">
              <div class="swiper-wrapper mb-10">
                <!-- card 1 -->
                <div class="swiper-slide cursor-default">
                  <a
                    href="assets/img/img-slide/31.jpg"
                    class="glightbox overflow-hidden"
                    data-width="118vh"
                    ><img
                      class="hover:scale-110 transition-all duration-700"
                      src="./assets/img/img-slide/31.jpg"
                      alt=""
                  ></a>
                </div>
  
                <!-- card 2 -->
                <div class="swiper-slide cursor-default">
                  <a
                    href="assets/img/img-slide/32.jpg"
                    class="glightbox overflow-hidden"
                    data-width="118vh"
                    ><img
                      class="hover:scale-110 transition-all duration-700"
                      src="./assets/img/img-slide/32.jpg"
                      alt=""
                  ></a>
                </div>
  
                <!-- card 3 -->
                <div class="swiper-slide cursor-default">
                  <a
                    href="assets/img/img-slide/33.jpg"
                    class="glightbox overflow-hidden"
                    data-width="118vh"
                    ><img
                      class="hover:scale-110 transition-all duration-700"
                      src="./assets/img/img-slide/33.jpg"
                      alt=""
                  ></a>
                </div>
  
                <!-- card 4 -->
                <div class="swiper-slide cursor-default">
                  <a
                    href="assets/img/img-slide/34.jpg"
                    class="glightbox overflow-hidden"
                    data-width="118vh"
                    ><img
                      class="hover:scale-110 transition-all duration-700"
                      src="./assets/img/img-slide/34.jpg"
                      alt=""
                  ></a>
                </div>
  
                <!-- card 5 -->
                <div class="swiper-slide cursor-default">
                  <a
                    href="assets/img/img-slide/35.jpg"
                    class="glightbox overflow-hidden"
                    data-width="118vh"
                    ><img
                      class="hover:scale-110 transition-all duration-700"
                      src="./assets/img/img-slide/35.jpg"
                      alt=""
                  ></a>
                </div>
              </div>
              <!-- pagination -->
              <div
                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block lg:hidden"
              >
                <span
                  class="swiper-pagination-bullet"
                  tabindex="0"
                  role="button"
                  aria-label="Go to slide 1"
                ></span
                ><span
                  class="swiper-pagination-bullet swiper-pagination-bullet-active"
                  tabindex="0"
                  role="button"
                  aria-label="Go to slide 2"
                  aria-current="true"
                ></span
                ><span
                  class="swiper-pagination-bullet"
                  tabindex="0"
                  role="button"
                  aria-label="Go to slide 3"
                ></span>
              </div>
              <!--  navigation -->
              <div class="hidden lg:block">
                <div class="swiper-button-next bg-white z-1">
                  <i class="fas fa-arrow-right" ></i>
                </div>
                <div class="swiper-button-prev bg-white z-1">
                  <i class="fas fa-arrow-left" ></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- product details section -->
        <section>
          <div class="container modal-container property-tab pt-70px pb-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px">
              <!-- details body -->
              <div class="lg:col-start-1 lg:col-span-8">
                <!--  top -->
                <ul
                  class="flex flex-wrap gap-x-15px md:gap-x-35px gap-y-15px items-center mb-30px"
                >
                  <li>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center">
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-secondary-color hover:bg-primary-color hover:text-white font-semibold"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >Featured</span
                          ></a
                        >
                      </li>
                      <li>
                        <a
                          class="text-xs md:text-sm uppercase text-white px-15px pt-5px pb-0.5 bg-orange font-semibold hover:text-white"
                          href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            >For Rent</span
                          ></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li>
                    <ul class="flex gap-x-15px md:gap-x-30px items-center">
                      <li>
                        <p class="text-xs md:text-sm font-semibold">
                          <span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-calendar-alt text-secondary-color mr-5px"
                            ></i>
                            May 19, 2024</span
                          >
                        </p>
                      </li>
                      <li>
                        <a class="text-xs md:text-sm font-semibold" href="#"
                          ><span class="leading-1.8 md:leading-1.8"
                            ><i
                              class="far fa-comments text-secondary-color mr-5px"
                            ></i>
                            35 Comments</span
                          ></a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
  
                <!-- main -->
                <div>
                  <h4
                    class="text-2xl md:text-26px lg:text-3xl xl:text-4xl font-bold text-heading-color mb-15px"
                  >
                    <span class="leading-1.3 lg:leading-1.3 xl:leading-1.3"
                      >Diamond Manor Apartment</span
                    >
                  </h4>
                  <p class="text-sm">
                    <span class="leading-1.8"
                      ><i class="flaticon-pin text-secondary-color"></i> Belmont
                      Gardens, Chicago</span
                    >
                  </p>
                  <!-- Description -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Description
                  </h4>
                  <p class="text-sm lg:text-base my-5">
                    <span class="leading-1.8 lg:leading-1.8"
                      >Massa tempor nec feugiat nisl pretium. Egestas fringilla
                      phasellus faucibus scelerisque eleifend donec Porta nibh
                      venenatis cras sed felis eget velit aliquet. Neque volutpat
                      ac tincidunt vitae semper quis lectus. Turpis in eu mi
                      bibendum neque egestas congue quisque. Sed elementum tempus
                      egestas sed sed risus pretium quam. Dignissim sodales ut eu
                      sem. Nibh mauris cursus mattis molestee iaculis at erat
                      pellentesque. Id interdum velit laoreet id donec ultrices
                      tincidunt.</span
                    >
                  </p>
  
                  <p class="text-sm lg:text-base my-5">
                    <span class="leading-1.8 lg:leading-1.8"
                      >To the left is the modern kitchen with central island,
                      leading through to the unique breakfast family room which
                      feature glass walls and doors out onto the garden and access
                      to the separate utility room.</span
                    >
                  </p>
                  <!-- Property Detail -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Property Detail
                  </h4>
                  <div class="flex flex-col md:flex-row bg-section-bg-1 mb-60px">
                    <ul
                      class="px-30px md:px-50px py-5 md:pt-30px md:pb-10 md:border-r md:border-border-color-7"
                    >
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Property ID:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> HZ29</span>
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Home Area:
                        </span>
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8">
                            120 sqft</span
                          >
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Rooms:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> 7</span>
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Baths</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> 2</span>
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Year built:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> 1992</span>
                        </p>
                      </li>
                    </ul>
                    <ul class="px-30px md:px-50px py-5 md:pt-30px md:pb-10">
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Lot Area:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> HZ29</span>
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Lot dimensions:
                        </span>
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8">
                            120 sqft</span
                          >
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Beds:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> 7</span>
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Price:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8"> 2</span>
                        </p>
                      </li>
                      <li class="text-sm mt-4 font-semibold">
                        <span
                          class="leading-1.8 min-w-[110px] inline-block flex-shrink-0"
                          >Property Status:</span
                        >
                        <p
                          class="text-sm lg:text-base inline-block text-heading-color"
                        >
                          <span class="leading-1.8 lg:leading-1.8">
                            For Sale</span
                          >
                        </p>
                      </li>
                    </ul>
                  </div>
                  <!-- Facts and Features-->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Facts and Features
                  </h4>
  
                  <ul class="flex flex-wrap mb-45px">
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Living Room</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Garage</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Dining Area</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Bedroom</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Bathroom</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Gym Area</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Garden</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                    <li class="text-sm pt-4 pb-10px pr-6 flex items-center gap-4">
                      <div
                        class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-section-bg-5"
                      >
                        <i
                          class="flaticon-double-bed text-22px text-secondary-color"
                        ></i>
                      </div>
                      <div>
                        <h6 class="text-sm text-heading-color font-normal mb-0.5">
                          <span class="leading-1.3"> Parking</span>
                        </h6>
                        <p class="text-[12.25px] lg:text-sm">
                          <span class="lg:leading-1.8"> 20 x 16 sq feet </span>
                        </p>
                      </div>
                    </li>
                  </ul>
                  <!-- Gallery -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    From Our Gallery
                  </h4>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-60px">
                    <div class="md:cols-start-1 md:col-span-1 leading-1">
                      <a
                        href="assets/img/others/14.jpg"
                        class="glightbox w-full leading-1 md:h-full"
                      >
                        <img
                          src="./assets/img/others/14.jpg"
                          alt=""
                          class="w-full md:h-full"
                        >
                      </a>
                    </div>
  
                    <div
                      class="md:cols-start-1 md:col-span-1 md:row-start-2 md:row-sapn-1 leading-1"
                    >
                      <a
                        href="assets/img/others/15.jpg"
                        class="glightbox w-full leading-1"
                      >
                        <img
                          src="./assets/img/others/15.jpg"
                          alt=""
                          class="w-full"
                        >
                      </a>
                    </div>
                    <div
                      class="md:cols-start-2 md:col-span-1 md:row-start-1 md:row-span-2 leading-1"
                    >
                      <a
                        href="assets/img/others/16.jpg"
                        class="glightbox w-full leading-1 md:h-full"
                        data-width="56vh"
                      >
                        <img
                          src="./assets/img/others/16.jpg"
                          alt=""
                          class="w-full md:h-full"
                        >
                      </a>
                    </div>
                  </div>
  
                  <!-- Amenities -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Amenities
                  </h4>
                  <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mb-60px gap-y-15px"
                  >
                    <ul class="flex flex-col gap-y-15px">
                      <li class="text-sm font-bold">
                        <label
                          for="dishwasher-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="dishwasher-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Air Conditioning
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="floor-coverings-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="floor-coverings-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Gym
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="internet-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="internet-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Microwave
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="build-wardrobes-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="build-wardrobes-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Swimming Pool
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="supermarket-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="supermarket-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Swimming Pool
                        </label>
                      </li>
                    </ul>
                    <ul class="flex flex-col gap-y-15px">
                      <li class="text-sm font-bold">
                        <label
                          for="kids-zone-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="kids-zone-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          gap-y-15px
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="recreation-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="recreation-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Recreation
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="microwave-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="microwave-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Microwave
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="basketball-cout-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="basketball-cout-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Basketball Cout
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="fireplace-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="fireplace-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Fireplace
                        </label>
                      </li>
                    </ul>
                    <ul class="flex flex-col gap-y-15px">
                      <li class="text-sm font-bold">
                        <label
                          for="refrigerator-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="refrigerator-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Refrigerator
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="window-coverings-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="window-coverings-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Window Coverings
                        </label>
                      </li>
  
                      <li class="text-sm font-bold">
                        <label
                          for="washer-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="washer-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Washer
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="24x7-security-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="24x7-security-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          24x7 Security
                        </label>
                      </li>
                      <li class="text-sm font-bold">
                        <label
                          for="indoor-game-type"
                          class="checkbox-item leading-1.8 group flex items-center cursor-pointer"
                          ><input
                            type="checkbox"
                            id="indoor-game-type"
                            class="hidden"
                            checked
                          >
                          <span
                            class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"
                          ></span>
                          Indoor Game
                        </label>
                      </li>
                    </ul>
                  </div>
                  <!-- Location -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Location
                  </h4>
                  <div class="h-360px mb-60px">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd"
                   
                     style="height:100%;width:100%;border:0px;"
                     
                      allowfullscreen=""
                      aria-hidden="false"
                      tabindex="0"
                    ></iframe>
                  </div>
  
                  <!-- Floor Plans -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Floor Plans
                  </h4>
                  <div class="tab plan-tab mb-60px">
                    <div
                      class="tab-links flex flex-wrap items-center gap-x-5 lg:gap-x-30px xl:gap-x-50px gap-y-10px text-sm lg:text-lg xl:text-xl text-heading-color mb-50px"
                    >
                      <button
                        class="p-1px border-b-2 border-transparent font-semibold relative leading-1.2 after:w-10px after:h-10px after:border-3px after:border-white after:bg-transparent after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:translate-y-1/2 after:z-10 after:rounded-100%"
                      >
                        First Floor
                      </button>
  
                      <button
                        class="active p-1px border-b-2 border-transparent font-semibold relative leading-1.2 after:w-10px after:h-10px after:border-3px after:border-white after:bg-transparent after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:translate-y-1/2 after:z-10 after:rounded-100%"
                      >
                        Second Floor
                      </button>
  
                      <button
                        class="p-1px border-b-2 border-transparent font-semibold relative leading-1.2 after:w-10px after:h-10px after:border-3px after:border-white after:bg-transparent after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:translate-y-1/2 after:z-10 after:rounded-100%"
                      >
                        Third Floor
                      </button>
  
                      <button
                        class="p-1px border-b-2 border-transparent font-semibold relative leading-1.2 after:w-10px after:h-10px after:border-3px after:border-white after:bg-transparent after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:translate-y-1/2 after:z-10 after:rounded-100%"
                      >
                        Top Garden
                      </button>
                    </div>
  
                    <div class="tab-contents">
                      <!-- content 1 -->
                      <div class="hidden opacity-0">
                        <div
                          class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px gap-y-50px"
                        >
                          <div class="lg:col-start-1 lg:col-span-7">
                            <img
                              src="./assets/img/others/10.png"
                              class="w-full"
                              alt="#"
                            >
                          </div>
                          <div class="lg:col-start-8 lg:col-span-5">
                            <h6
                              class="text-xl md:text-22px lg:text-26px xl:text-3xl font-bold text-heading-color mb-15px leading-1.3"
                            >
                              <span class="leading-1.3"> First Floor </span>
                            </h6>
                            <p class="text-sm lg:text-base">
                              <span class="leading-1.8"
                                >Enimad minim veniam quis nostrud exercitation
                                ullamco laboris. Lorem ipsum dolor sit amet cons
                                aetetur adipisicing elit sedo eiusmod
                                tempor.Incididunt labore et dolore magna aliqua.
                                sed ayd minim veniam.</span
                              >
                            </p>
                          </div>
                        </div>
                        <div
                          class="px-10 py-5 bg-section-bg-1 grid grid-cols-1 lg:grid-cols-2 gap-x-30px gap-y-10px mt-50px"
                        >
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Total Area
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    2800 Sq. Ft
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Bedroom
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    150 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Belcony/Pets
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    Allowed
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Lounge
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    650 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <!-- content 2 -->
                      <div>
                        <div
                          class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px gap-y-50px"
                        >
                          <div class="lg:col-start-1 lg:col-span-7">
                            <img
                              src="./assets/img/others/10.png"
                              class="w-full"
                              alt="#"
                            >
                          </div>
                          <div class="lg:col-start-8 lg:col-span-5">
                            <h6
                              class="text-xl md:text-22px lg:text-26px xl:text-3xl font-bold text-heading-color mb-15px leading-1.3"
                            >
                              <span class="leading-1.3"> Second Floor </span>
                            </h6>
                            <p class="text-sm lg:text-base">
                              <span class="leading-1.8"
                                >Enimad minim veniam quis nostrud exercitation
                                ullamco laboris. Lorem ipsum dolor sit amet cons
                                aetetur adipisicing elit sedo eiusmod
                                tempor.Incididunt labore et dolore magna aliqua.
                                sed ayd minim veniam.</span
                              >
                            </p>
                          </div>
                        </div>
                        <div
                          class="px-10 py-5 bg-section-bg-1 grid grid-cols-1 lg:grid-cols-2 gap-x-30px gap-y-10px mt-50px"
                        >
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Total Area
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    2800 Sq. Ft
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Bedroom
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    150 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Belcony/Pets
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    Allowed
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Lounge
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    650 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <!-- content 3 -->
                      <div class="hidden opacity-0">
                        <div
                          class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px gap-y-50px"
                        >
                          <div class="lg:col-start-1 lg:col-span-7">
                            <img
                              src="./assets/img/others/10.png"
                              class="w-full"
                              alt="#"
                            >
                          </div>
                          <div class="lg:col-start-8 lg:col-span-5">
                            <h6
                              class="text-xl md:text-22px lg:text-26px xl:text-3xl font-bold text-heading-color mb-15px leading-1.3"
                            >
                              <span class="leading-1.3"> Thired Floor </span>
                            </h6>
                            <p class="text-sm lg:text-base">
                              <span class="leading-1.8"
                                >Enimad minim veniam quis nostrud exercitation
                                ullamco laboris. Lorem ipsum dolor sit amet cons
                                aetetur adipisicing elit sedo eiusmod
                                tempor.Incididunt labore et dolore magna aliqua.
                                sed ayd minim veniam.</span
                              >
                            </p>
                          </div>
                        </div>
                        <div
                          class="px-10 py-5 bg-section-bg-1 grid grid-cols-1 lg:grid-cols-2 gap-x-30px gap-y-10px mt-50px"
                        >
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Total Area
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    2800 Sq. Ft
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Bedroom
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    150 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Belcony/Pets
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    Allowed
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Lounge
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    650 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <!-- content 4 -->
                      <div class="hidden opacity-0">
                        <div
                          class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px gap-y-50px"
                        >
                          <div class="lg:col-start-1 lg:col-span-7">
                            <img
                              src="./assets/img/others/10.png"
                              class="w-full"
                              alt="#"
                            >
                          </div>
                          <div class="lg:col-start-8 lg:col-span-5">
                            <h6
                              class="text-xl md:text-22px lg:text-26px xl:text-3xl font-bold text-heading-color mb-15px leading-1.3"
                            >
                              <span class="leading-1.3"> Top Garden </span>
                            </h6>
                            <p class="text-sm lg:text-base">
                              <span class="leading-1.8"
                                >Enimad minim veniam quis nostrud exercitation
                                ullamco laboris. Lorem ipsum dolor sit amet cons
                                aetetur adipisicing elit sedo eiusmod
                                tempor.Incididunt labore et dolore magna aliqua.
                                sed ayd minim veniam.</span
                              >
                            </p>
                          </div>
                        </div>
                        <div
                          class="px-10 py-5 bg-section-bg-1 grid grid-cols-1 lg:grid-cols-2 gap-x-30px gap-y-10px mt-50px"
                        >
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Total Area
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    2800 Sq. Ft
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Bedroom
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    150 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <ul class="flex flex-col gap-y-10px items-stretch">
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Belcony/Pets
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    Allowed
                                  </li>
                                </ul>
                              </li>
  
                              <li
                                class="text-sm font-semibold relative z-0 before:w-full before:h-1 before:border-b before:border-dashed before:border-color-1 before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:-z-1"
                              >
                                <ul class="flex justify-between items-center">
                                  <li class="leading-1.8 pr-10px bg-section-bg-1">
                                    Lounge
                                  </li>
  
                                  <li
                                    class="text-sm lg:text-base leading-1.8 pl-10px bg-section-bg-1"
                                  >
                                    650 Sq. Ft
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Property Video -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Property Video
                  </h4>
                  <div class="mb-60px">
                    <div
                      class="relative z-0 after:w-full after:h-full after:absolute after:left-0 after:top-0 after:bg-primary-color after:opacity-40 after:z-1 w-full h-auto lg:h-[450px] xl:h-[500px] min-h-80 md:min-h-[350px] bg-[url('../img/others/5.jpg')] bg-center bg-no-repeat bg-cover"
                    >
                      <div
                        class="absolute left-0 top-0 flex justify-center items-center h-full w-full z-10"
                      >
                        <a
                          class="glightbox3 w-50px h-50px lg:w-20 lg:h-20 text-center text-sm lg:text-base text-secondary-color shadow-box-shadow-2 rounded-100% bg-white flex items-center justify-center"
                          href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&showinfo=0"
                          data-glightbox="type: video;"
                        >
                          <i class="icon-play"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- Customer Reviews -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Customer Reviews
                  </h4>
                  <div>
                    <ul class="text-xs text-ratings flex items-center">
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="fas fa-star-half-alt"></i></a>
                      </li>
                      <li class="pt-2">
                        <a href="#"><i class="far fa-star"></i></a>
                      </li>
                      <li class="pt-2"><a href="#"> ( 95 Reviews )</a></li>
                    </ul>
                  </div>
                  <hr
                    class="my-50px border-t border-border-color-11 opacity-40"
                  >
                  <!-- reviews -->
                  <ul class="mb-20px">
                    <li
                      class="flex flex-col md:flex-row gap-x-30px gap-y-5 pb-30px"
                    >
                      <div class="flex-shrink-0">
                        <img
                          src="./assets/img/testimonial/1.jpg"
                          alt=""
                          class="w-20 h-20 md:w-100px md:h-100px rounded-100%"
                        >
                      </div>
                      <div class="relative">
                        <h4
                          class="text-lg text-heading-color font-semibold mb-5px"
                        >
                          <a href="#" class="leading-1.3">Adam Smit</a>
                        </h4>
                        <div>
                          <ul
                            class="text-xs text-ratings flex items-center pt-22px md:pt-0 mb-10px"
                          >
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="far fa-star"></i></a>
                            </li>
                          </ul>
                        </div>
                        <p class="text-sm mb-5 md:mb-0">
                          <span class="leading-1.8"
                            >Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Doloribus, omnis fugit corporis iste magnam
                            ratione.</span
                          >
                        </p>
                        <p
                          class="text-xs md:text-sm mb-5 md:mb-0 font-bold h-10 px-25px border-2 border-border-color-11 hover:border-secondary-color transition-all duration-300 text-nowrap md:absolute md:top-0 md:right-0 rounded-[25px] box-border md:box-border inline-block"
                        >
                          <span class="leading-9 md:leading-9"
                            >September 3, 2024</span
                          >
                        </p>
                      </div>
                    </li>
                    <li
                      class="flex flex-col md:flex-row gap-x-30px gap-y-5 py-30px border-t border-border-color-12"
                    >
                      <div class="flex-shrink-0">
                        <img
                          src="./assets/img/testimonial/3.jpg"
                          alt=""
                          class="w-20 h-20 md:w-100px md:h-100px rounded-100%"
                        >
                      </div>
                      <div class="relative">
                        <h4
                          class="text-lg text-heading-color font-semibold mb-5px"
                        >
                          <a href="#" class="leading-1.3">Jhone Doe</a>
                        </h4>
                        <div>
                          <ul
                            class="text-xs text-ratings flex items-center pt-22px md:pt-0 mb-10px"
                          >
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="far fa-star"></i></a>
                            </li>
                          </ul>
                        </div>
                        <p class="text-sm mb-5 md:mb-0">
                          <span class="leading-1.8"
                            >Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Doloribus, omnis fugit corporis iste magnam
                            ratione.</span
                          >
                        </p>
                        <p
                          class="text-xs md:text-sm mb-5 md:mb-0 font-bold h-10 px-25px border-2 border-border-color-11 hover:border-secondary-color transition-all duration-300 text-nowrap md:absolute md:top-0 md:right-0 rounded-[25px] box-border md:box-border inline-block"
                        >
                          <span class="leading-9 md:leading-9"
                            >September 3, 2024</span
                          >
                        </p>
                      </div>
                    </li>
                    <li
                      class="flex flex-col md:flex-row gap-x-30px gap-y-5 py-30px border-t border-border-color-12"
                    >
                      <div class="flex-shrink-0">
                        <img
                          src="./assets/img/testimonial/2.jpg"
                          alt=""
                          class="w-20 h-20 md:w-100px md:h-100px rounded-100%"
                        >
                      </div>
                      <div class="relative">
                        <h4
                          class="text-lg text-heading-color font-semibold mb-5px"
                        >
                          <a href="#" class="leading-1.3">Arnold Jack</a>
                        </h4>
                        <div>
                          <ul
                            class="text-xs text-ratings flex items-center pt-22px md:pt-0 mb-10px"
                          >
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li class="pt-2">
                              <a href="#"><i class="far fa-star"></i></a>
                            </li>
                          </ul>
                        </div>
                        <p class="text-sm mb-5 md:mb-0">
                          <span class="leading-1.8"
                            >Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Doloribus, omnis fugit corporis iste magnam
                            ratione.</span
                          >
                        </p>
                        <p
                          class="text-xs md:text-sm mb-5 md:mb-0 font-bold h-10 px-25px border-2 border-border-color-11 hover:border-secondary-color transition-all duration-300 text-nowrap md:absolute md:top-0 md:right-0 rounded-[25px] box-border md:box-border inline-block"
                        >
                          <span class="leading-9 md:leading-9"
                            >September 3, 2024</span
                          >
                        </p>
                      </div>
                    </li>
                  </ul>
  
                  <!-- add reviews -->
                  <form
                    class="form-primary bg-white-5 shadow-box-shadow-2 px-25px pt-10 pb-50px md:p-50px md:pt-10 mt-5 mb-60px"
                  >
                    <h4
                      class="text-17px md:text-lg lg:text-xl font-bold text-heading-color mb-5"
                    >
                      <span class="leading-1.3 md:leading-1.3 lg:leading-1.3">
                        Add a Review</span
                      >
                    </h4>
                    <div class="flex gap-15px items-center mb-30px">
                      <h5
                        class="text-sm md:text-15px lg:text-base font-bold text-heading-color mb-0"
                      >
                        <span class="leading-1.3 md:leading-1.3 lg:leading-1.3">
                          Your Ratings:</span
                        >
                      </h5>
                      <ul class="text-xs text-ratings flex items-center">
                        <li>
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="grid gap-30px mb-35px">
                      <!-- message -->
                      <div class="relative mb-2">
                        <textarea
                         
                          
                          placeholder="Enter message"
                          class="min-h-[150px] text-paragraph-color bg-white pl-5 pr-50px py-15px outline-none border-2 focus:border-0 border-white-5 h-65px block w-full rounded-none transition-none"
                        ></textarea>
                        <span
                          class="absolute top-[30px] -translate-y-1/2 right-4"
                        >
                          <i
                            class="fas fa-pencil text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
                      <!-- name -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Type your name...."
                          class="text-paragraph-color pl-5 pr-50px outline-none border-2 focus:border-0 bg-white border-white-5 h-65px block w-full rounded-none transition-none"
                        >
                        <span class="absolute top-1/2 -translate-y-1/2 right-4">
                          <i
                            class="fas fa-user text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
                      <!-- email -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Type your email...."
                          class="text-paragraph-color pl-5 pr-50px outline-none border-2 focus:border-0 bg-white border-white-5 h-65px block w-full rounded-none transition-none"
                        >
                        <span class="absolute top-1/2 -translate-y-1/2 right-4">
                          <i
                            class="fas fa-envelope text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
  
                      <!-- website -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Type your website...."
                          class="text-paragraph-color pl-5 pr-50px outline-none border-2 focus:border-0 bg-white border-white-5 h-65px block w-full rounded-none transition-none"
                        >
                        <span class="absolute top-1/2 -translate-y-1/2 right-4">
                          <i
                            class="fas fa-globe text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
                    </div>
                    <!-- agree -->
                    <div class="text-sm flex items-center mb-35px">
                      <input type="checkbox" id="agree" >
                      <label for="agree" class="text-sm ml-1">
                        Save my name, email, and website in this browser for the
                        next time I comment.
                      </label>
                    </div>
  
                    <!-- submit button -->
  
                    <div>
                      <h5
                        class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block z-0"
                      >
                        <span
                          class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black -z-1 group-hover:w-0 transition-all duration-300"
                        ></span>
                        <button
                          type="submit"
                          class="relative z-1 px-5 md:px-25px lg:px-10 py-10px md:py-15px lg:py-17px group-hover:text-heading-color leading-23px uppercase"
                        >
                          Submit
                        </button>
                      </h5>
                    </div>
                  </form>
  
                  <!-- Related Properties -->
                  <h4
                    class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color my-30px"
                  >
                    Related Properties
                  </h4>
                  <div class="-mx-15px modal-container">
                    <div class="grid grid-cols-1 sm:grid-cols-2">
                      <!-- card 1 -->
                      <div class="apart-card mb-50px px-15px">
                        <div
                          class="group border border-border-color-13 shadow-box-shadow-4"
                        >
                          <!-- card thumbs -->
                          <div class="relative leading-1">
                            <a
                              href="product-details.html"
                              class="overflow-hidden"
                            >
                              <img
                                src="./assets/img/product-3/1.jpg"
                                class="w-full group-hover:scale-110 transition-all duration-700"
                                alt=""
                              >
                            </a>
  
                            <div class="absolute top-10 lg:top-5 right-[30px]">
                              <a href="team-details.html" class="w-50px h-50px"
                                ><img
                                  src="./assets/img/blog/author.jpg"
                                  alt=""
                                  class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                              ></a>
                            </div>
                          </div>
                          <!-- card body -->
                          <div class="px-5 pt-30px lg:px-30px">
                            <p
                              class="text-secondary-color font-semibold mb-15px uppercase"
                            >
                              <span class="leading-25px">For Rent</span>
                            </p>
                            <h4
                              class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px"
                            >
                              <a
                                href="product-details.html"
                                class="hover:text-secondary-color leading-1.3"
                                >New Apartment Nice View</a
                              >
                            </h4>
  
                            <div class="text-sm">
                              <a
                                href="locations.html"
                                class="hover:text-secondary-color"
                                ><i
                                  class="flaticon-pin text-secondary-color mr-0.5"
                                ></i>
                                Belmont Gardens, Chicago</a
                              >
                            </div>
  
                            <ul class="flex flex-wrap gap-15px pt-4 pb-5">
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  3 <span class="font-normal">Bed</span>
                                </p>
                              </li>
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  2 <span class="font-normal">Bath</span>
                                </p>
                              </li>
  
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  3450 <span class="font-normal">Square Ft</span>
                                </p>
                              </li>
                            </ul>
                            <div
                              class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300"
                            >
                              <ul class="flex gap-x-2">
                                <li>
                                  <button
                                    data-modal-index="1"
                                    class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                  >
                                    <i class="flaticon-expand leading-1"></i>
                                  </button>
                                </li>
                                <li>
                                  <button
                                    data-modal-index="2"
                                    class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                  >
                                    <i class="flaticon-heart-1 leading-1"></i>
                                  </button>
                                </li>
                                <li>
                                  <a
                                    href="product-details.html"
                                    class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                    ><i class="flaticon-add leading-1"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <!-- cart footer -->
                          <div
                            class="p-5 lg:px-30px border-t border-border-color-1"
                          >
                            <h5
                              class="text-lg text-secondary-color font-semibold mb-5px"
                            >
                              <span class="leading-1.8">$34,900</span>
                              <label class="text-sm font-normal">/Month</label>
                            </h5>
                          </div>
                        </div>
                      </div>
                      <!-- card 2 -->
                      <div class="apart-card mb-50px px-15px">
                        <div
                          class="group border border-border-color-13 shadow-box-shadow-4"
                        >
                          <!-- card thumbs -->
                          <div class="relative leading-1">
                            <a
                              href="product-details.html"
                              class="overflow-hidden"
                            >
                              <img
                                src="./assets/img/product-3/2.jpg"
                                class="w-full group-hover:scale-110 transition-all duration-700"
                                alt=""
                              >
                            </a>
  
                            <div class="absolute top-10 lg:top-5 right-[30px]">
                              <a href="team-details.html" class="w-50px h-50px"
                                ><img
                                  src="./assets/img/blog/author.jpg"
                                  alt=""
                                  class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                              ></a>
                            </div>
                          </div>
                          <!-- card body -->
                          <div class="px-5 pt-30px lg:px-30px">
                            <p
                              class="text-secondary-color font-semibold mb-15px uppercase"
                            >
                              <span class="leading-25px">For Sale</span>
                            </p>
                            <h4
                              class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px"
                            >
                              <a
                                href="product-details.html"
                                class="hover:text-secondary-color leading-1.3"
                                >New Apartment Nice View</a
                              >
                            </h4>
  
                            <div class="text-sm">
                              <a
                                href="locations.html"
                                class="hover:text-secondary-color"
                                ><i
                                  class="flaticon-pin text-secondary-color mr-0.5"
                                ></i>
                                Belmont Gardens, Chicago</a
                              >
                            </div>
  
                            <ul class="flex flex-wrap gap-15px pt-4 pb-5">
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  3 <span class="font-normal">Bed</span>
                                </p>
                              </li>
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  2 <span class="font-normal">Bath</span>
                                </p>
                              </li>
  
                              <li>
                                <p class="leading-1.8 font-bold text-sm">
                                  3450 <span class="font-normal">Square Ft</span>
                                </p>
                              </li>
                            </ul>
                            <div
                              class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300"
                            >
                              <ul class="flex gap-x-2">
                                <li>
                                  <button
                                    data-modal-index="1"
                                    class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                  >
                                    <i class="flaticon-expand leading-1"></i>
                                  </button>
                                </li>
                                <li>
                                  <button
                                    data-modal-index="2"
                                    class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                  >
                                    <i class="flaticon-heart-1 leading-1"></i>
                                  </button>
                                </li>
                                <li>
                                  <a
                                    href="product-details.html"
                                    class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold"
                                    ><i class="flaticon-add leading-1"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <!-- cart footer -->
                          <div
                            class="p-5 lg:px-30px border-t border-border-color-1"
                          >
                            <h5
                              class="text-lg text-secondary-color font-semibold mb-5px"
                            >
                              <span class="leading-1.8">$34,900</span>
                              <label class="text-sm font-normal">/Month</label>
                            </h5>
                          </div>
                        </div>
                      </div>
  
                      <!-- modals -->
                      <!-- modal apartment details-->
                      <div
                        class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto"
                      >
                        <div
                          class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"
                        ></div>
                        <div
                          class="modal-content transition-all duration-500 -translate-y-20 sm:max-w-500px lg:max-w-980px m-2 mt-150px sm:mx-auto relative z-small rounded-lg"
                        >
                          <div
                            class="grid grid-cols-1 lg:grid-cols-2 gap-x-30px p-30px bg-white relative"
                          >
                            <div>
                              <img
                                src="./assets/img/product/4.png"
                                class="w-full"
                                alt=""
                              >
                            </div>
  
                            <!-- card body -->
                            <div class="pl-25px">
                              <div class="absolute right-4 top-4">
                                <button
                                  class="modal-close w-10 h-10 leading-10 text-center bg-section-bg-1 text-black text-25px inline-block"
                                >
                                  <span>×</span>
                                </button>
                              </div>
                              <ul class="flex items-center mb-5px">
                                <li>
                                  <a
                                    href="#"
                                    class="text-xs text-ratings hover:text-secondary-color"
                                    ><i class="fas fa-star leading-1.8"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="text-xs text-ratings hover:text-secondary-color"
                                    ><i class="fas fa-star leading-1.8"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="text-xs text-ratings hover:text-secondary-color"
                                    ><i class="fas fa-star leading-1.8"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="text-xs text-ratings hover:text-secondary-color"
                                    ><i
                                      class="fas fa-star-half-alt leading-1.8"
                                    ></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="text-xs text-ratings hover:text-secondary-color"
                                    ><i class="far fa-star leading-1.8"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="text-xs text-ratings hover:text-secondary-color"
                                  >
                                    ( 95 Reviews )</a
                                  >
                                </li>
                              </ul>
  
                              <h4
                                class="text-22px md:text-2xl font-bold text-heading-color mb-0"
                              >
                                <a
                                  href="product-details.html"
                                  class="leading-1.3 hover:text-secondary-color"
                                  >3 Rooms Manhattan</a
                                >
                              </h4>
                              <p
                                class="text-34px md:text-50px text-secondary-color font-semibold mb-5 pb-0 border-b border-border-color-12 border-opacity-25 leading-1.2"
                              >
                                <span>$34,900</span>
                                <del
                                  class="text-26px md:text-40px leading-1.2 opacity-60 pl-1"
                                  >$36,500</del
                                >
                              </p>
                              <p class="text-sm lg:text-base mb-9 md:mb-10">
                                <span class="leading-1.8"
                                  >Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit. Dignissimos repellendus
                                  repudiandae incidunt quidem pariatur expedita,
                                  quo quis modi tempore non.</span
                                >
                              </p>
  
                              <ul
                                class="flex flex-wrap gap-5 pb-5 mb-5 border-b border-border-color-12 border-opacity-25"
                              >
                                <li class="text-sm">
                                  <button
                                    data-modal-index="3"
                                    class="modal-open leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
                                  >
                                    <i class="far fa-heart px-0.5"></i> Add to
                                    Wishlist
                                  </button>
                                </li>
  
                                <li class="text-sm">
                                  <button
                                    class="leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
                                  >
                                    <i class="fas fa-exchange-alt px-0.5"></i>
                                    Compare
                                  </button>
                                </li>
                              </ul>
                              <!-- social area -->
                              <ul class="flex gap-x-[18px] items-center">
                                <li>
                                  <p class="text-sm lg:text-base">
                                    <span class="leading-1.8">Share</span>
                                  </p>
                                </li>
                                <li>
                                  <a
                                    href="https://www.facebook.com/"
                                    class="text-sm lg:text-base hover:text-secondary-color"
                                  >
                                    <i class="fab fa-facebook-f leading-1.8"></i>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    href="https://x.com/"
                                    class="text-sm lg:text-base hover:text-secondary-color"
                                  >
                                    <i class="fab fa-twitter leading-1.8"></i>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    href="https://www.linkedin.com/"
                                    class="text-sm lg:text-base hover:text-secondary-color"
                                  >
                                    <i class="fab fa-linkedin leading-1.8"></i>
                                  </a>
                                </li>
                                <li>
                                  <a
                                    href="https://www.instagram.com/"
                                    class="text-sm lg:text-base hover:text-secondary-color"
                                  >
                                    <i class="fab fa-instagram leading-1.8"></i>
                                  </a>
                                </li>
                              </ul>
  
                              <!-- action -->
                              <div class="text-end">
                                <a
                                  href="product-details.html"
                                  class="text-xs hover:text-secondary-color underline hover:underline"
                                >
                                  <span class="leading-1.8">View Details</span></a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- modal  wishlist 1-->
                      <div
            class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto"
          >
            <div
              class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"
            ></div>
  
            <div
              class="modal-content transition-all duration-500 -translate-y-20 max-w-500px m-2 mt-150px sm:mx-auto relative z-small p-30px bg-white"
            >
              <div class="flex">
                <div class="w-125px mr-5 flex-shrink-0">
                  <img src="./assets/img/product/4.png" class="w-full" alt="" >
                </div>
  
                <!-- card body -->
                <div class="pl-25px">
                  <div class="absolute right-4 top-4">
                    <button
                      class="modal-close w-10 h-10 leading-10 text-center bg-black bg-opacity-5 text-black text-25px inline-block"
                    >
                      <span>×</span>
                    </button>
                  </div>
  
                  <h4
                    class="text-base lg:text-lg font-bold text-heading-color mb-10px"
                  >
                    <a
                      href="product-details.html"
                      class="leading-1.3 hover:text-secondary-color"
                      >3 Rooms Manhattan</a
                    >
                  </h4>
  
                  <p
                    class="text-sm lg:text-base mb-5 md:mb-6  "
                  >
                    <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
                   Successfully added to your Wishlist
                  </p>
                  <!-- action -->
                  <div>
                    <h5
                      class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block"
                    >
                      <span
                        class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"
                      ></span>
                      <a
                        href="wishlist.html"
                        class="relative z-10 px-5 py-5px group-hover:text-heading-color leading-23px"
                        >View Wishlist</a
                      >
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
                      <!-- modal  wishlist 2-->
                      <div
                      class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto"
                    >
                      <div
                        class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"
                      ></div>
            
                      <div
                        class="modal-content transition-all duration-500 -translate-y-20 max-w-500px m-2 mt-150px sm:mx-auto relative z-small p-30px bg-white"
                      >
                        <div class="flex">
                          <div class="w-125px mr-5 flex-shrink-0">
                            <img src="./assets/img/product/4.png" class="w-full" alt="" >
                          </div>
            
                          <!-- card body -->
                          <div class="pl-25px">
                            <div class="absolute right-4 top-4">
                              <button
                                class="modal-close w-10 h-10 leading-10 text-center bg-black bg-opacity-5 text-black text-25px inline-block"
                              >
                                <span>×</span>
                              </button>
                            </div>
            
                            <h4
                              class="text-base lg:text-lg font-bold text-heading-color mb-10px"
                            >
                              <a
                                href="product-details.html"
                                class="leading-1.3 hover:text-secondary-color"
                                >3 Rooms Manhattan</a
                              >
                            </h4>
            
                            <p
                              class="text-sm lg:text-base mb-5 md:mb-6  "
                            >
                              <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
                             Successfully added to your Wishlist
                            </p>
                            <!-- action -->
                            <div>
                              <h5
                                class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block"
                              >
                                <span
                                  class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"
                                ></span>
                                <a
                                  href="wishlist.html"
                                  class="relative z-10 px-5 py-5px group-hover:text-heading-color leading-23px"
                                  >View Wishlist</a
                                >
                              </h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- sidebar -->
              <div class="lg:col-start-9 lg:col-span-4 pt-60px lg:pt-0">
                <!-- author details -->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <div class="flex flex-col items-center text-center">
                    <div class="mb-25px">
                      <img
                        src="./assets/img/team/4.jpg"
                        alt=""
                        class="w-140px h-140px rounded-100%"
                      >
                    </div>
                    <h4 class="mb-15px lg:text-lg text-heading-color font-bold">
                      <span class="leading-1.3 lg:leading-1.3"
                        >Rosalina D. Willaimson</span
                      >
                    </h4>
                    <p class="text-[12.25px] lg:text-sm">
                      <span class="lg:leading-1 8"> Traveller/Photographer </span>
                    </p>
                    <div>
                      <ul class="text-xs text-ratings flex items-center mb-10px">
                        <li class="pt-2">
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li class="pt-2">
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li class="pt-2">
                          <a href="#"><i class="fas fa-star"></i></a>
                        </li>
                        <li class="pt-2">
                          <a href="#"><i class="fas fa-star-half-alt"></i></a>
                        </li>
                        <li class="pt-2">
                          <a href="#"><i class="far fa-star"></i></a>
                        </li>
                        <li class="pt-2"><a href="#"> ( 1 Reviews )</a></li>
                      </ul>
                    </div>
                    <p class="text-sm mb-22px hyphens-none">
                      <span class="leading-1.8"
                        >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Veritatis distinctio, odio, eligendi suscipit
                        reprehenderit atque.</span
                      >
                    </p>
                    <ul
                      class="text-sm lg:text-base flex gap-18px justify-center items-center text-color-1"
                    >
                      <li class="leading-1.8 lg:leading-1.8">
                        <a href="https://www.facebook.com"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li class="leading-1.8 lg:leading-1.8">
                        <a href="https://x.com"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="leading-1.8 lg:leading-1.8">
                        <a href="https://www.linkedin.com"
                          ><i class="fab fa-linkedin"></i
                        ></a>
                      </li>
                      <li class="leading-1.8 lg:leading-1.8">
                        <a href="https://www.youtube.com"
                          ><i class="fab fa-youtube"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Search Objects -->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Search Objects</span
                    >
                  </h4>
                  <form>
                    <div class="flex items-center">
                      <input
                        type="text"
                        placeholder="Search your keyword..."
                        class="flex-grow text-paragraph-color text-sm font-semibold bg-section-bg-1 px-5 outline-none border-2 border-r-0 border-border-color-9 focus:border focus:border-secondary-color h-60px placeholder:text-heading-color block rounded-none"
                      >
                      <button
                        type="submit"
                        class="flex-shrink-0 text-sm lg:text-base h-60px w-14 flex items-center justify-center text-white bg-secondary-color hover:bg-primary-color"
                      >
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <!-- Drop Messege For Book -->
  
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Drop Messege For Book</span
                    >
                  </h4>
  
                  <form>
                    <div class="grid gap-30px mb-10">
                      <!-- name -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Your Name*"
                          class="text-paragraph-color px-5 py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:text-sm placeholder:text-paragraph-color"
                        >
                      </div>
                      <!-- email -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Your e-Mail*"
                          class="text-paragraph-color px-5 py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:text-sm placeholder:text-paragraph-color"
                        >
                      </div>
                      <!-- message -->
                      <div class="relative">
                        <textarea
                         
                          
                          placeholder="Write Message..."
                          class="min-h-[150px] text-paragraph-color px-5 py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:text-sm placeholder:text-paragraph-color"
                        ></textarea>
                      </div>
                    </div>
  
                    <!-- submit button -->
  
                    <div>
                      <h5
                        class="uppercase text-sm md:text-base text-white bg-secondary-color hover:bg-primary-color relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block z-0"
                      >
                        <button
                          type="submit"
                          class="relative z-1 px-5 md:px-25px lg:px-10 py-10px md:py-15px lg:py-17px group-hover:text-white leading-23px uppercase"
                        >
                          Send Messege
                        </button>
                      </h5>
                    </div>
                  </form>
                </div>
                <!-- Top Rated Product -->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Top Rated Product</span
                    >
                  </h4>
                  <ul>
                    <li class="pb-25px mb-25px border-b border-white-4">
                      <div class="flex gap-x-15px xl:gap-x-5">
                        <div class="w-70px xl:w-90px flex-shrink-0">
                          <a href="product-details.html"
                            ><img src="./assets/img/product/1.png" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <ul
                            class="text-10px text-ratings flex items-center mb-5px leading-1"
                          >
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                          </ul>
  
                          <h6 class="text-sm font-medium mb-1">
                            <a href="product-details.html" class="leading-1.3"
                              >Luxury House In Greenville</a
                            >
                          </h6>
                          <p class="text-sm font-bold text-secondary-color">
                            <span class="leading-1.8">$30,000.00 </span>
                            <del class="text-11px opacity-60 ml-1"
                              >$35,000.00</del
                            >
                          </p>
                        </div>
                      </div>
                    </li>
                    <li class="pb-25px mb-25px border-b border-white-4">
                      <div class="flex gap-x-15px xl:gap-x-5">
                        <div class="w-70px xl:w-90px flex-shrink-0">
                          <a href="product-details.html"
                            ><img src="./assets/img/product/2.png" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <ul
                            class="text-10px text-ratings flex items-center mb-5px leading-1"
                          >
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                          </ul>
  
                          <h6 class="text-sm font-medium mb-1">
                            <a href="product-details.html" class="leading-1.3"
                              >Apartment with Subunits</a
                            >
                          </h6>
                          <p class="text-sm font-bold text-secondary-color">
                            <span class="leading-1.8">$30,000.00 </span>
                            <del class="text-11px opacity-60 ml-1"
                              >$35,000.00</del
                            >
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="flex gap-x-15px xl:gap-x-5">
                        <div class="w-70px xl:w-90px flex-shrink-0">
                          <a href="product-details.html"
                            ><img src="./assets/img/product/3.png" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <ul
                            class="text-10px text-ratings flex items-center mb-5px leading-1"
                          >
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="far fa-star"></i></a>
                            </li>
                          </ul>
  
                          <h6 class="text-sm font-medium mb-1">
                            <a href="product-details.html" class="leading-1.3"
                              >3 Rooms Manhattan</a
                            >
                          </h6>
                          <p class="text-sm font-bold text-secondary-color">
                            <span class="leading-1.8">$30,000.00 </span>
                            <del class="text-11px opacity-60 ml-1"
                              >$35,000.00</del
                            >
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- Top Categories-->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Top Categories</span
                    >
                  </h4>
                  <ul>
                    <li>
                      <a
                        href="#"
                        class="text-sm font-bold flex justify-between items-center group mt-15px"
                      >
                        <span class="leading-1.8">Apartments</span>
                        <span class="leading-1.8 group-hover:text-paragraph-color"
                          >(26)
                        </span>
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-sm font-bold flex justify-between items-center group mt-15px"
                      >
                        <span class="leading-1.8">Picture Stodio</span>
                        <span class="leading-1.8 group-hover:text-paragraph-color"
                          >(30)
                        </span>
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-sm font-bold flex justify-between items-center group mt-15px"
                      >
                        <span class="leading-1.8">Office</span>
                        <span class="leading-1.8 group-hover:text-paragraph-color"
                          >(71)
                        </span>
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-sm font-bold flex justify-between items-center group mt-15px"
                      >
                        <span class="leading-1.8">Luxary Vilas</span>
                        <span class="leading-1.8 group-hover:text-paragraph-color"
                          >(56)
                        </span>
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-sm font-bold flex justify-between items-center group mt-15px"
                      >
                        <span class="leading-1.8">Duplex House</span>
                        <span class="leading-1.8 group-hover:text-paragraph-color"
                          >(60)
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Popular Properties-->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Popular Properties</span
                    >
                  </h4>
  
                  <div
                    class="news-slider-container swiper-container relative -mx-15px"
                  >
                    <!-- apartment cards  -->
                    <div class="swiper popular-properties-slider static">
                      <div class="swiper-wrapper">
                        <!-- card 1 -->
                        <div class="swiper-slide mb-50px cursor-default">
                          <div class="apart-card px-15px">
                            <div
                              class="group border border-border-color-13 shadow-box-shadow-4"
                            >
                              <!-- card thumbs -->
                              <div class="relative leading-1">
                                <a
                                  href="product-details.html"
                                  class="overflow-hidden"
                                >
                                  <img
                                    src="./assets/img/product-3/6.jpg"
                                    class="w-full group-hover:scale-110 transition-all duration-700"
                                    alt=""
                                  >
                                </a>
  
                                <div
                                  class="absolute top-10 lg:top-5 right-[30px]"
                                >
                                  <a
                                    href="team-details.html"
                                    class="w-50px h-50px"
                                    ><img
                                      src="./assets/img/blog/author.jpg"
                                      alt=""
                                      class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                  ></a>
                                </div>
                              </div>
                              <!-- card body -->
                              <div class="p-25px">
                                <h5
                                  class="text-lg text-secondary-color font-semibold mb-5px"
                                >
                                  <span class="leading-1.8">$34,900</span>
                                  <label class="text-sm font-normal"
                                    >/Month</label
                                  >
                                </h5>
                                <h4
                                  class="text-base font-semibold text-heading-color mb-15px"
                                >
                                  <a
                                    href="product-details.html"
                                    class="hover:text-secondary-color leading-1.3"
                                    >New Apartment Nice View</a
                                  >
                                </h4>
  
                                <div class="text-xs">
                                  <a
                                    href="locations.html"
                                    class="hover:text-secondary-color"
                                    ><i
                                      class="flaticon-pin text-secondary-color mr-0.5"
                                    ></i>
                                    Belmont Gardens, Chicago</a
                                  >
                                </div>
  
                                <ul class="flex flex-wrap gap-15px pt-4">
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      3 <span class="font-normal">Bed</span>
                                    </p>
                                  </li>
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      2 <span class="font-normal">Bath</span>
                                    </p>
                                  </li>
  
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      3450
                                      <span class="font-normal">Square Ft</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 2 -->
                        <div class="swiper-slide mb-50px cursor-default">
                          <div class="apart-card px-15px">
                            <div
                              class="group border border-border-color-13 shadow-box-shadow-4"
                            >
                              <!-- card thumbs -->
                              <div class="relative leading-1">
                                <a
                                  href="product-details.html"
                                  class="overflow-hidden"
                                >
                                  <img
                                    src="./assets/img/product-3/4.jpg"
                                    class="w-full group-hover:scale-110 transition-all duration-700"
                                    alt=""
                                  >
                                </a>
  
                                <div
                                  class="absolute top-10 lg:top-5 right-[30px]"
                                >
                                  <a
                                    href="team-details.html"
                                    class="w-50px h-50px"
                                    ><img
                                      src="./assets/img/blog/author.jpg"
                                      alt=""
                                      class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                  ></a>
                                </div>
                              </div>
                              <!-- card body -->
                              <div class="p-25px">
                                <h5
                                  class="text-lg text-secondary-color font-semibold mb-5px"
                                >
                                  <span class="leading-1.8">$34,900</span>
                                  <label class="text-sm font-normal"
                                    >/Month</label
                                  >
                                </h5>
                                <h4
                                  class="text-base font-semibold text-heading-color mb-15px"
                                >
                                  <a
                                    href="product-details.html"
                                    class="hover:text-secondary-color leading-1.3"
                                    >New Apartment Nice View</a
                                  >
                                </h4>
  
                                <div class="text-xs">
                                  <a
                                    href="locations.html"
                                    class="hover:text-secondary-color"
                                    ><i
                                      class="flaticon-pin text-secondary-color mr-0.5"
                                    ></i>
                                    Belmont Gardens, Chicago</a
                                  >
                                </div>
  
                                <ul class="flex flex-wrap gap-15px pt-4">
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      3 <span class="font-normal">Bed</span>
                                    </p>
                                  </li>
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      2 <span class="font-normal">Bath</span>
                                    </p>
                                  </li>
  
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      3450
                                      <span class="font-normal">Square Ft</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 3 -->
                        <div class="swiper-slide mb-50px cursor-default">
                          <div class="apart-card px-15px">
                            <div
                              class="group border border-border-color-13 shadow-box-shadow-4"
                            >
                              <!-- card thumbs -->
                              <div class="relative leading-1">
                                <a
                                  href="product-details.html"
                                  class="overflow-hidden"
                                >
                                  <img
                                    src="./assets/img/product-3/5.jpg"
                                    class="w-full group-hover:scale-110 transition-all duration-700"
                                    alt=""
                                  >
                                </a>
  
                                <div
                                  class="absolute top-10 lg:top-5 right-[30px]"
                                >
                                  <a
                                    href="team-details.html"
                                    class="w-50px h-50px"
                                    ><img
                                      src="./assets/img/blog/author.jpg"
                                      alt=""
                                      class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                  ></a>
                                </div>
                              </div>
                              <!-- card body -->
                              <div class="p-25px">
                                <h5
                                  class="text-lg text-secondary-color font-semibold mb-5px"
                                >
                                  <span class="leading-1.8">$34,900</span>
                                  <label class="text-sm font-normal"
                                    >/Month</label
                                  >
                                </h5>
                                <h4
                                  class="text-base font-semibold text-heading-color mb-15px"
                                >
                                  <a
                                    href="product-details.html"
                                    class="hover:text-secondary-color leading-1.3"
                                    >New Apartment Nice View</a
                                  >
                                </h4>
  
                                <div class="text-xs">
                                  <a
                                    href="locations.html"
                                    class="hover:text-secondary-color"
                                    ><i
                                      class="flaticon-pin text-secondary-color mr-0.5"
                                    ></i>
                                    Belmont Gardens, Chicago</a
                                  >
                                </div>
  
                                <ul class="flex flex-wrap gap-15px pt-4">
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      3 <span class="font-normal">Bed</span>
                                    </p>
                                  </li>
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      2 <span class="font-normal">Bath</span>
                                    </p>
                                  </li>
  
                                  <li>
                                    <p class="leading-1.8 font-bold text-xs">
                                      3450
                                      <span class="font-normal">Square Ft</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
  
                      <!-- pagination -->
                      <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block"
                      >
                        <span
                          class="swiper-pagination-bullet"
                          tabindex="0"
                          role="button"
                          aria-label="Go to slide 1"
                        ></span
                        ><span
                          class="swiper-pagination-bullet swiper-pagination-bullet-active"
                          tabindex="0"
                          role="button"
                          aria-label="Go to slide 2"
                          aria-current="true"
                        ></span
                        ><span
                          class="swiper-pagination-bullet"
                          tabindex="0"
                          role="button"
                          aria-label="Go to slide 3"
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>
  
                <!-- Leatest Blogs -->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Leatest Blogs</span
                    >
                  </h4>
                  <ul>
                    <li class="pb-5 mb-30px border-b border-border-color-1">
                      <div class="flex gap-x-5">
                        <div class="w-20 flex-shrink-0">
                          <a href="blog-details.html"
                            ><img src="./assets/img/team/5.jpg" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <h6 class="text-sm font-medium mb-5px">
                            <a href="blog-details.html" class="leading-1.3"
                              >Lorem ipsum dolor sit cing elit, sed do.</a
                            >
                          </h6>
                          <div
                            class="text-xs md:text-sm font-semibold text-secondary-color"
                          >
                            <a href="#" class="leading-1.8 md:leading-1.8"
                              ><i class="far fa-calendar-alt"></i> June 22,
                              2024</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="pb-5 mb-30px border-b border-border-color-1">
                      <div class="flex gap-x-5">
                        <div class="w-20 flex-shrink-0">
                          <a href="blog-details.html"
                            ><img src="./assets/img/team/6.jpg" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <h6 class="text-sm font-medium mb-5px">
                            <a href="blog-details.html" class="leading-1.3"
                              >Lorem ipsum dolor sit cing elit, sed do.</a
                            >
                          </h6>
                          <div
                            class="text-xs md:text-sm font-semibold text-secondary-color"
                          >
                            <a href="#" class="leading-1.8 md:leading-1.8"
                              ><i class="far fa-calendar-alt"></i> June 22,
                              2024</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="pb-5 mb-30px border-b border-border-color-1">
                      <div class="flex gap-x-5">
                        <div class="w-20 flex-shrink-0">
                          <a href="blog-details.html"
                            ><img src="./assets/img/team/7.jpg" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <h6 class="text-sm font-medium mb-5px">
                            <a href="blog-details.html" class="leading-1.3"
                              >Lorem ipsum dolor sit cing elit, sed do.</a
                            >
                          </h6>
                          <div
                            class="text-xs md:text-sm font-semibold text-secondary-color"
                          >
                            <a href="#" class="leading-1.8 md:leading-1.8"
                              ><i class="far fa-calendar-alt"></i> June 22,
                              2024</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="flex gap-x-5">
                        <div class="w-20 flex-shrink-0">
                          <a href="blog-details.html"
                            ><img src="./assets/img/team/8.jpg" alt=""
                          ></a>
                        </div>
  
                        <div>
                          <h6 class="text-sm font-medium mb-5px">
                            <a href="blog-details.html" class="leading-1.3"
                              >Lorem ipsum dolor sit cing elit, sed do.</a
                            >
                          </h6>
                          <div
                            class="text-xs md:text-sm font-semibold text-secondary-color"
                          >
                            <a href="#" class="leading-1.8 md:leading-1.8"
                              ><i class="far fa-calendar-alt"></i> June 22,
                              2024</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- Follow Us -->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px mb-10 border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-25px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Follow Us</span
                    >
                  </h4>
                  <ul class="flex gap-x-15px pt-4">
                    <li>
                      <a
                        href="https://www.facebook.com"
                        class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://x.com"
                        class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.linkedin.com"
                        class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                        ><i class="fab fa-linkedin"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.instagram.com"
                        class="text-sm lg:text-base w-10 h-10 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center"
                        ><i class="fab fa-instagram"></i
                      ></a>
                    </li>
                  </ul>
                </div>
                <!-- Popular Tags -->
                <div
                  class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px border-2 border-border-color-11"
                >
                  <h4 class="text-lg font-semibold text-heading-color mb-30px">
                    <span
                      class="leading-1.3 pl-10px border-l-2 border-secondary-color"
                      >Popular Tags</span
                    >
                  </h4>
                  <ul class="flex gap-10px flex-wrap items-center font-poppins">
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >POPULAR
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        DESGIN
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >UX
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        USABILITY
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        DEVELOP
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        ICON
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >CAR
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        SERVICE
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        REPAIRS
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                      >
                        AUTO PARTS
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >OIL
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >DEALER
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >OIL CHANGE
                      </a>
                    </li>
  
                    <li>
                      <a
                        href="#"
                        class="text-13px px-6 py-2 leading-1.8 bg-section-bg-1 hover:bg-secondary-color hover:text-white flex items-center justify-center font-bold"
                        >BODY COLOR
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
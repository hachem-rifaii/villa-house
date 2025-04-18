@extends('layouts.app')

@section('title', 'Villa House - Home')

@section('content')
    <!-- banner section -->
    <section>
        <!-- banner section -->
        <div class="hero hero-primary overflow-hidden relative z-10">
            <!-- Swiper -->
            <div class="hero-slider-container swiper-container relative">
                <div class="swiper primary-slider">
                    <div class="swiper-wrapper">
                        <!-- Hero  1 -->
                        <div class="swiper-slide relative z-0 py-100px 4xl:min-h-[780px] overflow-hidden flex items-center bg-section-bg-1">
                            <div class="container w-full">
                                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-30px">
                                    <!-- banner Left -->
                                    <div class="slide-animation">
                                        <p class="text-sm md:text-15px lg:text-base text-heading-color font-bold mb-5 animated">
                                            <i class="fas fa-home text-secondary-color"></i>
                                            Villa House
                                        </p>
                                        <h1 class="text-3xl md:text-40px lg:text-50px 4xl:text-65px leading-30px md:leading-10 lg:leading-50px 4xl:leading-65px font-bold mb-5 animated">
                                            <span class="leading-30px md:leading-10 lg:leading-50px 4xl:leading-65px">
                                                A REPUTATION BUILT ON TRUST & SUCCESS
                                            </span>
                                        </h1>
                                        <p class="text-sm lg:text-base mb-5 max-w-450px pl-15px xl:pl-30px border-l border-border-color-14 animated"></p>
                                        <div class="mt-5 lg:mt-10 mb-30px xl:mb-0 animated">
                                            <h5 class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block mr-15px">
                                                <span class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-primary-color z-1 group-hover:w-0 transition-all duration-300"></span>
                                                <a href="{{ route('about') }}" class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">about us</a>
                                            </h5>
                                        </div>
                                    </div>

                                    <!-- banner right -->
                                    <div class="4xl:absolute right-[60px] xl:right-[150px] bottom-[100px] 4xl:h-[70%] 4xl:w-[45%]">
                                        <img class="4xl:h-full 4xl:ml-auto" src="{{ asset('assets/img/slider/21.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden xl:block">
                        <div class="swiper-button-next">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- pinned select area -->
        <div class="container mt-30 4xl:-mt-65px relative z-20">
            <form action="" method="post">
            @csrf
          
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-30px lg:gap-4 xl:gap-30px py-10 px-25px md:p-10 shadow-box-shadow-1 border border-border-color-1 bg-white">
                <div>
                    <select class="selectize">
                        <option value="Choose Area" data-display="Select">Property type</option>
                        <option value="Chicago">villa</option>
                        <option value="London">house</option>
                    </select>
                </div>
                <div>
                    <select class="selectize">
                        <option data-display="Select">Bedrooms</option>
                        <option>2</option>
                        <option>1</option>
                    </select>
                </div>
                <div>
                    <select class="selectize">
                        <option data-display="Select">currency</option>
                        <option>gbp</option>
                        <option>eur</option>
                    </select>
                    <h3>Price Range</h3>
                    <input type="text" placeholder="Min - Max 150,000,000">
                </div>
                <div class="">
                    <select name="type" id="" class="selectize">
                        <option value="rent">Rent</option>
                        <option value="sell">Sell</option>
                    </select>
                </div>
                <div class="text-center ">
                    <h5 class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
                        <span class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
                        <a href="{{ route('shop') }}" class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">Find Now</a>
                    </h5>
                </div>
            </div>
        </form>
        </div>
    </section>

    <!-- Rest of your home page content -->
    @include('sections.about')
    @include('sections.counter')
    @include('sections.services')
    @include('sections.about-ceo')
    @include('sections.about-2')
    @include('sections.featured-properties')
    @include('sections.news')
    @include('sections.testimonials')
@endsection
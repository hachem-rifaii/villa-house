@extends('layouts.app')

@section('title', 'Villa House - ofPlan Properties')

@section('content')
    <!-- banner section -->
    <section>
        <div class="w-full bg-[url('../img/bg/14.jpg')] bg-no-repeat bg-cover bg-center relative z-0 after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-white after:bg-opacity-30 after:-z-1">
            <div class="container py-110px">
                <h1 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-4xl font-bold text-heading-color mb-15px">
                    <span class="leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3">Of Plan</span>
                </h1>
                <ul class="breadcrumb flex gap-30px items-center text-sm lg:text-base font-bold pt-4">
                    <li class="home relative leading-1.8 lg:leading-1.8">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home text-secondary-color"></i> Home
                        </a>
                    </li>
                    <li class="leading-1.8 lg:leading-1.8 text-heading-color">
                        Of Plan
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- property section -->
    <section>
        <div class="container modal-container tab property-tab py-30">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px">
                <!-- property body -->
                <div class="lg:col-start-1 lg:col-span-8">
                    <!-- filter top -->
                    <div class="mb-50px flex flex-col md:flex-row flex-wrap items-start md:items-center gap-y-4">
                        <ul class="flex flex-wrap items-center gap-y-3 tab-links">
                            <li class="text-3xl pr-25px active">
                                <button class="text-paragraph-color hover:text-secondary-color">
                                    <i class="fas fa-th-large"></i>
                                </button>
                            </li>
                            <li class="text-3xl pr-30px">
                                <button class="text-paragraph-color hover:text-secondary-color">
                                    <i class="fas fa-list"></i>
                                </button>
                            </li>
                        </ul>
                        <ul class="flex flex-col md:flex-row flex-wrap justify-center md:items-center gap-y-3">
                            <li class="pr-30px">
                                <form class="form-primary property-form">
                                    <select class="selectize">
                                        <option data-display="Select" value="Default Sorting">Default Sorting</option>
                                        <option value="Sort by popularity">Sort by popularity</option>
                                        <option value="Sort by new arrivals">Sort by new arrivals</option>
                                        <option value="Sort by price: low to high">Sort by price: low to high</option>
                                        <option value="Sort by price: high to low">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-contents">
                        <!-- content 1 (grid view) -->
                        <div>
                            <!-- search area -->
                            <form class="mb-30px">
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
                            
                            <!-- property cards grid -->
                            <div class="-mx-15px">
                                <div class="grid grid-cols-1 sm:grid-cols-2">
                                    <!-- Repeat this card structure for each property -->
                                    @for($i = 1; $i <= 6; $i++)
                                        <div class="apart-card mb-50px px-15px">
                                            <div class="group border border-border-color-13 shadow-box-shadow-4">
                                                <!-- card thumbs -->
                                                <div class="relative leading-1">
                                                    <a href="{{ route('product.details') }}" class="overflow-hidden">
                                                        <img
                                                            src="{{ asset('assets/img/product-3/' . $i . '.jpg') }}"
                                                            class="w-full group-hover:scale-110 transition-all duration-700"
                                                            alt="Property {{ $i }}"
                                                        >
                                                    </a>

                                                    <div class="absolute top-10 lg:top-5 right-[30px]">
                                                        <a href="{{ route('team.details') }}" class="w-50px h-50px">
                                                            <img
                                                                src="{{ asset('assets/img/blog/author.jpg') }}"
                                                                alt="Agent"
                                                                class="w-full h-full rounded-100% group-hover:scale-110 border-3px border-border-color-1 transition-all duration-300"
                                                            >
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <!-- card body -->
                                                <div class="px-5 pt-30px lg:px-30px">
                                                    <p class="text-secondary-color font-semibold mb-15px uppercase">
                                                        <span class="leading-25px">For Rent</span>
                                                    </p>
                                                    <h4 class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px">
                                                        <a href="{{ route('product.details') }}" class="hover:text-secondary-color leading-1.3">
                                                            New Apartment Nice View
                                                        </a>
                                                    </h4>

                                                    <div class="text-sm">
                                                        <a href="{{ route('locations') }}" class="hover:text-secondary-color">
                                                            <i class="flaticon-pin text-secondary-color mr-0.5"></i>
                                                            Belmont Gardens, Chicago
                                                        </a>
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
                                                    
                                                    <div class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300">
                                                        <ul class="flex gap-x-2">
                                                            <li>
                                                                <button data-modal-index="1" class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold">
                                                                    <i class="flaticon-expand leading-1"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button data-modal-index="2" class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold">
                                                                    <i class="flaticon-heart-1 leading-1"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('product.details') }}" class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold">
                                                                    <i class="flaticon-add leading-1"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <!-- card footer -->
                                                <div class="p-5 lg:px-30px border-t border-border-color-1">
                                                    <h5 class="text-lg text-secondary-color font-semibold mb-5px">
                                                        <span class="leading-1.8">$34,900</span>
                                                        <label class="text-sm font-normal">/Month</label>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        <!-- content 2 (list view) -->
                        <div class="hidden">
                            <!-- search area -->
                            <form class="mb-30px">
                                <div class="flex items-center">
                                    <input
                                        type="text"
                                        placeholder="Search your keyword..."
                                        class="flex-grow text-paragraph-color text-sm font-semibold bg-section-bg-1 px-5 outline-none border-2 border-r-0 border-border-color-9 focus:border focus:border-secondary-color h-60px block rounded-none"
                                    >
                                    <button
                                        type="submit"
                                        class="flex-shrink-0 text-sm lg:text-base h-60px w-14 flex items-center justify-center text-white bg-secondary-color hover:bg-primary-color"
                                    >
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            
                            <!-- property cards list -->
                            <div>
                                @for($i = 1; $i <= 6; $i++)
                                    <div class="mb-50px">
                                        <div class="group border border-border-color-13 shadow-box-shadow-4 p-30px md:pb-22px flex flex-wrap">
                                            <!-- card thumbs -->
                                            <div class="relative leading-1 basis-full md:basis-2/5">
                                                <div>
                                                    <a href="{{ route('product.details') }}" class="overflow-hidden leading-1">
                                                        <img
                                                            src="{{ asset('assets/img/product-3/' . $i . '.jpg') }}"
                                                            class="w-full group-hover:scale-110 transition-all duration-700"
                                                            alt="Property {{ $i }}"
                                                        >
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <!-- card body -->
                                            <div class="basis-full md:basis-3/5 pt-25px md:pt-0">
                                                <div class="pl-0 md:pl-30px">
                                                    <div class="flex justify-between items-center gap-x-15px">
                                                        <p class="text-secondary-color font-semibold mb-15px uppercase">
                                                            <span class="leading-25px">For Rent</span>
                                                        </p>
                                                        <h5 class="text-lg text-secondary-color font-semibold">
                                                            <span class="leading-1.8">$34,900</span>
                                                            <label class="text-sm font-normal">/Month</label>
                                                        </h5>
                                                    </div>
                                                    
                                                    <h4 class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px">
                                                        <a href="{{ route('product.details') }}" class="hover:text-secondary-color leading-1.3">
                                                            New Apartment Nice View
                                                        </a>
                                                    </h4>

                                                    <div class="text-sm">
                                                        <a href="{{ route('locations') }}" class="hover:text-secondary-color">
                                                            <i class="flaticon-pin text-secondary-color mr-0.5"></i>
                                                            Belmont Gardens, Chicago
                                                        </a>
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

                                                    <!-- card footer -->
                                                    <div class="flex justify-between items-center flex-wrap-reverse gap-y-15px">
                                                        <!-- author -->
                                                        <div class="flex items-center gap-15px">
                                                            <div>
                                                                <a href="{{ route('team.details') }}" class="w-50px h-50px">
                                                                    <img
                                                                        src="{{ asset('assets/img/blog/author.jpg') }}"
                                                                        alt="Agent"
                                                                        class="w-full h-full rounded-100% border-3px border-border-color-1 transition-all duration-300"
                                                                    >
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <h3 class="text-sm font-semibold mb-1">
                                                                    <a href="{{ route('team.details') }}" class="leading-1.3">William Seklo</a>
                                                                </h3>
                                                                <p class="text-[12px]">Estate Agents</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- quick action -->
                                                        <div class="flex gap-x-2 relative leading-1 transition-all duration-300">
                                                            <ul class="flex gap-x-2">
                                                                <li>
                                                                    <button data-modal-index="1" class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold">
                                                                        <i class="flaticon-expand leading-1"></i>
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button data-modal-index="2" class="modal-open w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold">
                                                                        <i class="flaticon-heart-1 leading-1"></i>
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('product.details') }}" class="w-9 h-9 flex items-center justify-center bg-section-bg-1 text-center hover:bg-secondary-color hover:text-white font-bold">
                                                                        <i class="flaticon-add leading-1"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    <!-- property pagination -->
                    <div class="flex justify-center mt-4">
                        <ul class="flex flex-wrap items-center gap-x-10px gap-y-4 justify-center">
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-white bg-secondary-color w-10 h-10 md:w-50px md:h-50px border-2 border-secondary-color transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    3
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    ...
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    10
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-50px md:h-50px border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-100% font-bold">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- sidebar -->
                <div class="lg:col-start-9 lg:col-span-4 pt-100px lg:pt-0">
                    <!-- sidebar heading -->
                    <div>
                        <h4 class="mb-10px text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
                            <span class="leading-1.3 md:leading-1.3 xl:leading-1.3">Advance Information</span>
                        </h4>
                        <p class="mb-30px text-[12.25px] lg:text-sm">
                            <span class="lg:leading-1 8">About 9,620 results (0.62 seconds)</span>
                        </p>
                    </div>
                    
                    <!-- sidebar filter -->
                    <div class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px border-2 border-border-color-11">
                        <!-- type filter -->
                        <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                            <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                <span class="leading-1.3">Property Type</span>
                            </h5>
                            <ul class="flex flex-col gap-y-15px">
                                @foreach([
                                    ['id' => 'house-type', 'label' => 'House', 'count' => '3,924', 'checked' => true],
                                    ['id' => 'sigle-family-type', 'label' => 'Single Family', 'count' => '3,610'],
                                    ['id' => 'apartment-type', 'label' => 'Apartment', 'count' => '2,912'],
                                    ['id' => 'office-villa-type', 'label' => 'Office Villa', 'count' => '2,687'],
                                    ['id' => 'luxary-home-type', 'label' => 'Luxary Home', 'count' => '1,853'],
                                    ['id' => 'studio-type', 'label' => 'Studio', 'count' => '893']
                                ] as $type)
                                    <li class="text-sm font-bold flex justify-between items-center">
                                        <label for="{{ $type['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="{{ $type['id'] }}"
                                                class="hidden"
                                                {{ isset($type['checked']) ? 'checked' : '' }}
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"></span>
                                            {{ $type['label'] }}
                                        </label>
                                        <span class="leading-1.8">{{ $type['count'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- amenities filter -->
                        <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                            <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                <span class="leading-1.3">Amenities</span>
                            </h5>
                            <ul class="flex flex-col gap-y-15px">
                                @foreach([
                                    ['id' => 'dishwasher-type', 'label' => 'Dishwasher', 'count' => '3,924', 'checked' => true],
                                    ['id' => 'floor-coverings-type', 'label' => 'Floor Coverings', 'count' => '3,610'],
                                    ['id' => 'internet-type', 'label' => 'Internet', 'count' => '2,912'],
                                    ['id' => 'build-wardrobes-type', 'label' => 'Build Wardrobes', 'count' => '2,687'],
                                    ['id' => 'supermarket-type', 'label' => 'Supermarket', 'count' => '1,853'],
                                    ['id' => 'kids-zone-type', 'label' => 'Kids Zone', 'count' => '893']
                                ] as $amenity)
                                    <li class="text-sm font-bold flex justify-between items-center">
                                        <label for="{{ $amenity['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="{{ $amenity['id'] }}"
                                                class="hidden"
                                                {{ isset($amenity['checked']) ? 'checked' : '' }}
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"></span>
                                            {{ $amenity['label'] }}
                                        </label>
                                        <span class="leading-1.8">{{ $amenity['count'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- price range filter -->
                        <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                            <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                <span class="leading-1.3">Price Renge</span>
                            </h5>
                            <ul class="flex flex-col gap-y-15px">
                                @foreach([
                                    ['id' => 'low-budget-type', 'label' => 'Low Budget', 'range' => '$5,000 - $10,000', 'checked' => true],
                                    ['id' => 'medium-type', 'label' => 'Medium', 'range' => '$10,000 - $30,000'],
                                    ['id' => 'high-budget-type', 'label' => 'High Budget', 'range' => '$30,000 Up']
                                ] as $priceRange)
                                    <li class="text-sm font-bold flex justify-between items-center">
                                        <label for="{{ $priceRange['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="{{ $priceRange['id'] }}"
                                                class="hidden"
                                                {{ isset($priceRange['checked']) ? 'checked' : '' }}
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"></span>
                                            {{ $priceRange['label'] }}
                                        </label>
                                        <span class="leading-1.8">{{ $priceRange['range'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- price slider filter -->
                        <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                            <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                <span class="leading-1.3">Filter By Price</span>
                            </h5>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit" value="Your range:">
                                    <input type="text" class="amount" name="price" placeholder="Add Your Price">
                                </div>
                                <div class="slider-range"></div>
                            </div>
                        </div>
                        
                        <!-- Bed/bath filter -->
                        <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                            <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                <span class="leading-1.3">Bed/bath</span>
                            </h5>
                            <ul class="flex flex-col gap-y-15px">
                                @foreach([
                                    ['id' => 'single-type', 'label' => 'Single', 'count' => '3,924', 'checked' => true],
                                    ['id' => 'double-type', 'label' => 'Double', 'count' => '3,610'],
                                    ['id' => 'up-to-3-type', 'label' => 'Up To 3', 'count' => '2,912'],
                                    ['id' => 'up-to-5-type', 'label' => 'Up To 5', 'count' => '2,687']
                                ] as $bedBath)
                                    <li class="text-sm font-bold flex justify-between items-center">
                                        <label for="{{ $bedBath['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="{{ $bedBath['id'] }}"
                                                class="hidden"
                                                {{ isset($bedBath['checked']) ? 'checked' : '' }}
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"></span>
                                            {{ $bedBath['label'] }}
                                        </label>
                                        <span class="leading-1.8">{{ $bedBath['count'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- category filter -->
                        <div>
                            <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                <span class="leading-1.3">Category</span>
                            </h5>
                            <ul class="flex flex-col gap-y-15px">
                                @foreach([
                                    ['id' => 'buying-type', 'label' => 'Buying', 'count' => '3,924', 'checked' => true],
                                    ['id' => 'renting-type', 'label' => 'Renting', 'count' => '3,610'],
                                    ['id' => 'selling-type', 'label' => 'Selling', 'count' => '2,912']
                                ] as $category)
                                    <li class="text-sm font-bold flex justify-between items-center">
                                        <label for="{{ $category['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="{{ $category['id'] }}"
                                                class="hidden"
                                                {{ isset($category['checked']) ? 'checked' : '' }}
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"></span>
                                            {{ $category['label'] }}
                                        </label>
                                        <span class="leading-1.8">{{ $category['count'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Initialize any page-specific JavaScript here -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tab functionality
            const tabLinks = document.querySelectorAll('.tab-links button');
            const tabContents = document.querySelectorAll('.tab-contents > div');
            
            tabLinks.forEach((link, index) => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    // Remove active class from all links and contents
                    tabLinks.forEach(l => l.parentElement.classList.remove('active'));
                    tabContents.forEach(c => c.classList.add('hidden'));
                    
                    // Add active class to clicked link and show corresponding content
                    link.parentElement.classList.add('active');
                    tabContents[index].classList.remove('hidden');
                });
            });
            
            // Initialize price range slider
            if (document.querySelector('.slider-range')) {
                $(".slider-range").slider({
                    range: true,
                    min: 0,
                    max: 50000,
                    values: [10000, 30000],
                    slide: function(event, ui) {
                        $(".amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $(".amount").val("$" + $(".slider-range").slider("values", 0) +
                    " - $" + $(".slider-range").slider("values", 1));
            }
        });
    </script>
@endsection
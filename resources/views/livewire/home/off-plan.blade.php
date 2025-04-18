

    <!-- banner section -->
    <div class="">
        <section>
            <div class="w-full bg-[url('../img/bg/14.jpg')]  bg-no-repeat bg-cover bg-center relative z-0 after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-white after:bg-opacity-30 after:-z-1">
                <div class="container py-110px">
                    <h1 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-4xl font-bold text-heading-color mb-15px">
                        <span class="leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3">Property</span>
                    </h1>
                    <ul class="breadcrumb flex gap-30px items-center text-sm lg:text-base font-bold pt-4">
                        <li class="home relative leading-1.8 lg:leading-1.8">
                            <a href="{{ route('home') }}">
                                <i class="fas fa-home text-secondary-color"></i> Home
                            </a>
                        </li>
                        <li class="leading-1.8 lg:leading-1.8 text-heading-color">
                            Sell
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
                                        <select class="selectize" wire:model.live="sortBy">
                                            <option value="">Default Sorting</option>            
                                            <option value="new">Sort by new arrivals</option>
                                            <option value="low_high">Sort by price: low to high</option>
                                            <option value="high_low">Sort by price: high to low</option>
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
                                            wire:model.live="search"
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
                                        @forelse ($properties as $property)
                                            
                                        <div class="apart-card mb-50px px-15px">
                                            <div class="group border border-border-color-13 shadow-box-shadow-4">
                                                <!-- card thumbs -->
                                                <div class="relative leading-1">
                                                    <a href="{{ route('product.details') }}" class="overflow-hidden">
                                                        <img
                                                            src="{{ asset('storage/' . $property->images[0]) }}"
                                                            class="w-full group-hover:scale-110 transition-all duration-700"
                                                          
                                                        >
                                                    </a>
                                    
                                                    <div class="absolute top-10 lg:top-5 right-[30px]">
                                                        <a href="{{ route('team.details') }}" class="w-50px h-50px">
                                                            <img
                                                                src="{{ asset('storage/' . $property->team->image) }}"
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
                                                           {{ $property->title }}
                                                        </a>
                                                    </h4>
                                    
                                                    <div class="text-sm">
                                                        <a href="{{ route('locations') }}" class="hover:text-secondary-color">
                                                            <i class="flaticon-pin text-secondary-color mr-0.5"></i>
                                                           {{ $property->address }}
                                                        </a>
                                                    </div>
                                    
                                                    <ul class="flex flex-wrap gap-15px pt-4 pb-5">
                                                        <li>
                                                            <p class="leading-1.8 font-bold text-sm">
                                                                {{ $property->bedrooms }} <span class="font-normal">Bed</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="leading-1.8 font-bold text-sm">
                                                                {{ $property->bathrooms }} <span class="font-normal">Bath</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="leading-1.8 font-bold text-sm">
                                                                {{ $property->area }} <span class="font-normal">Square Ft</span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    
                                                    <div class="card-quick-area flex gap-x-2 pb-30px leading-1 transition-all duration-300">
                                                        <ul class="flex gap-x-2">
                                                         
                                                            <li>
                                                                <button data-modal-index="2" class="modal-open w-9 h-9 flex items-center justify-center text-center hover:bg-secondary-color hover:text-white font-bold"
                                                                onclick="addToWishlist({{ $property }})"
               
                                                                id="heart-{{ $property->id }}"
                                                                >
                                                                    <i class="flaticon-heart-1 leading-1"></i>
                                                                </button>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <!-- card footer -->
                                                <div class="p-5 lg:px-30px border-t border-border-color-1">
                                                    <h5 class="text-lg text-secondary-color font-semibold mb-5px">
                                                        @foreach($property->prices as $price)
                                                        @if ($price->currency && $price->currency->code === 'USD')
                                                          {{ number_format($price->price, 2) }} {{ $price->currency->code }}
                                                        @endif
                                                       @endforeach
                                                    
                                                        
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        @empty
                                            <div class="w-full h-full flex justify-center items-center">
                                                <div class="text-center">
                                                    <h4 class="text-22px font-semibold leading-1.3 text-heading-color">
                                                        No Properties Found
                                                    </h4>
                                                </div>
                                            </div>
                                        @endforelse
                                           
                                    
                                    </div>
                                </div>
                            </div>
    
                         
                        </div>
                        
                        <!-- property pagination -->
             
                        {{-- <p>hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p> --}}
                        {{ $properties->links('pagination::bootstrap-5') }}
                   
                       
                       
                        {{-- <div class="flex justify-center mt-4">
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
                        </div> --}}
                    </div>
                    
                    <!-- sidebar -->
                    <div class="lg:col-start-9 lg:col-span-4 pt-100px lg:pt-0">
                        <!-- sidebar heading -->
                        <div>
                            <h4 class="mb-10px text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold">
                                <span class="leading-1.3 md:leading-1.3 xl:leading-1.3">Advance Information</span>
                            </h4>
                       
                        </div>
                        
                        <!-- sidebar filter -->
                        <div class="px-5 pt-35px pb-10 xl:pl-35px xl:pr-30px border-2 border-border-color-11">
                            <!-- type filter -->
                            <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                                <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                    <span class="leading-1.3">Category Type</span>
                                </h5>
                                <ul class="flex flex-col gap-y-15px">
                                    @foreach ($categories as $category)
                                    <li class="text-sm font-bold flex justify-between items-center" wire:key="category-{{ $category->id }}">
                                        <label for="category-{{ $category->id }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="category-{{ $category->id }}"
                                                value="{{ $category->id }}"
                                                wire:model.live="category"
                                                class="hidden"
                                                @checked(in_array($category->id, $this->category))
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1
                                                @if(in_array($category->id, $this->category)) bg-secondary-color after:opacity-100 @endif
                                            "></span>
                                            {{ $category->name }}
                                        </label>
                                        <span class="leading-1.8">{{ $category->properties_count }}</span>
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
                                    
                                       @foreach ($features as $featured) 
                                       <li class="text-sm font-bold flex justify-between items-center">
                                        <label for="{{ $featured['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                            <input
                                                type="checkbox"
                                                id="{{ $featured['id'] }}"
                                                value="{{ $featured['id'] }}"
                                                wire:model.live="featuresArr"
                                                class="hidden"
                                                {{ isset($amenity['checked']) ? 'checked' : '' }}
                                            >
                                            <span class="checkmark w-4 h-4 bg-white group-hover:bg-secondary-color border border-border-color-16 transition-all duration-300 relative z-0 after:absolute after:left-1 after:top-0 after:w-[5px] after:h-10px after:rotate-[45deg] after:border after:border-t-0 after:opacity-0 after:border-l-0 after:border-white mr-15px inline-block leading-1"></span>
                                            {{ $featured->name }}
                                        </label>
                                        <span class="leading-1.8">{{ $featured['properties_count'] }}</span>
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
                                        ['id' => 'low-budget-type', 'label' => 'Low Budget', 'range' => '$5,000 - $10,000', 'wire:model' => 'priceRanges.low'],
                                        ['id' => 'medium-type', 'label' => 'Medium', 'range' => '$10,000 - $30,000', 'wire:model' => 'priceRanges.medium'],
                                        ['id' => 'high-budget-type', 'label' => 'High Budget', 'range' => '$30,000 Up', 'wire:model' => 'priceRanges.high']
                                    ] as $priceRange)
                                        <li class="text-sm font-bold flex justify-between items-center">
                                            <label for="{{ $priceRange['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer">
                                                <input
                                                    type="checkbox"
                                                    id="{{ $priceRange['id'] }}"
                                                    class="hidden"
                                                    wire:model.live="{{ $priceRange['wire:model'] }}"
                                                    
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
                            {{-- <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                                <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                    <span class="leading-1.3">Filter By Price</span>
                                </h5>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        
                                        <input type="text" class="amount" wire:model.live="priceEntered" name="price" placeholder="Add Your Price">
                                    </div>
                                    <div class="slider-range"></div>
                                </div>
                            </div> --}}
                            <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                                <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                    <span class="leading-1.3">Filter by price</span>
                                </h5>
                                <div class="price_filter">
                                    <div class="price_slider_amount flex gap-4">
                                        <div>
                                            <label class="block mb-1 text-sm">from</label>
                                            <input
                                                type="number"
                                                wire:model.live="minPrice"
                                                placeholder="e.g. 5000"
                                                class="amount w-full border px-2 py-1 rounded"
                                            >
                                        </div>
                                        <div>
                                            <label class="block mb-1 text-sm">to</label>
                                            <input
                                                type="number"
                                                wire:model.live="maxPrice"
                                                placeholder="e.g. 20000"
                                                class="amount w-full border px-2 py-1 rounded"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- Bed/bath filter -->
                            <div class="pb-35px mb-35px border-b border-border-color-12 border-opacity-25">
                                <h5 class="mb-25px text-lg text-heading-color font-semibold">
                                    <span class="leading-1.3">Bed/bath</span>
                                </h5>
                                <ul class="flex flex-col gap-y-15px">
                                    @foreach([
                                        ['id' => 'single', 'label' => 'Single', 'count' => '3,924', 'value' => 'single'],
                                        ['id' => 'double-type', 'label' => 'Double', 'count' => '3,610', 'value' => 'double'],
                                        ['id' => 'up-to-3-type', 'label' => 'Up To 3', 'count' => '2,912', 'value' => 'upto3'],
                                        ['id' => 'up-to-5-type', 'label' => 'Up To 5', 'count' => '2,687', 'value' => 'upto5']
                                    ] as $bedBath)
                                        <li class="text-sm font-bold flex justify-between items-center">
                                            <label for="{{ $bedBath['id'] }}" class="checkbox-item leading-1.8 group flex items-center cursor-pointer w-full">
                                                <input
                                                    type="radio"
                                                    id="{{ $bedBath['id'] }}"
                                                    wire:model.lazy="bed_bath"
                                                    value="{{ $bedBath['value'] }}"
                                                    class="hidden"
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
                            {{-- <div>
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
       </div>
    
    
    
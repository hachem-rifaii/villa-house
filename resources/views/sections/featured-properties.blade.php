<section>
    <div class="container-3 pt-115px pb-[75px] modal-container">
      <!-- section heading -->
      <div class="text-center mb-50px">
        <p
          class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
        >
          <span class="leading-1.3">Find Your Partner
          </span>
        </p>
        <h2
          class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
        >
          <span class="leading-1.3">Our team is highly experienced and knowledgeable across all aspects of the real estate industry. We are ready to answer your questions in over 30 languages. </span>
        </h2>
      </div>
      <div class="featured-apartments swiper-container relative">
        <!-- apartment cards  -->
        <div class="swiper featured-apartments-slider static">
          <div class="swiper-wrapper">
           <!-- card 2 -->
            @forelse ($teams as $team )
            <div class="swiper-slide mb-65px px-15px">
              <div
                class="group border border-border-color-13 shadow-box-shadow-4"
              >
                <!-- card thumbs -->
                <div class="relative leading-1">
                  <a
                    href="team-details.html"
                    class="overflow-hidden"
                  >
                  <img 
                  src="{{ asset('storage/'.$team->image) }}" 
                  class="w-full group-hover:scale-110 transition-all duration-700" 
                  alt=""
              >
              
                  </a>
                  <div
                    class="absolute w-full left-0 bottom-0 px-15px pb-15px lg:px-30px bg-transparent bg-gradient-color-5"
                  >
                    <div
                      class="text-sm text-white flex justify-between items-center"
                    >
                     
                    
                    </div>
                  </div>
                  
                    
                  </div>
                </div>
                <!-- card body -->
                <div class="px-5 pt-4 lg:px-30px lg:pt-5">
               
                  <h4
                    class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px"
                  >
                    <a
                      href="team-details.html"
                      class="hover:text-secondary-color leading-1.3"
                      >{{ $team->name }}</a
                    >
                  </h4>
                
                </div>
               
                </div>
            @empty
              
            @endforelse
            </div>
          </div>
              </div>
            </div>
           
           
           
              </div>
            </div>
          </div>
<!-- featured appartments  section -->
<section>
<div class="container-3 pt-115px pb-[75px] modal-container">
<!-- section heading -->
<div class="text-center mb-50px">
  <p
    class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
  >
    <span class="leading-1.3">Luxury properties

    </span>
  </p>
  <h2
    class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
  >
  </h2>
</div>
<div class="featured-apartments swiper-container relative">
  <!-- apartment cards  -->
  <div class="swiper featured-apartments-slider static">
    <div class="swiper-wrapper">
     <!-- card 2 -->

     @forelse ($properties as $property )
     <div class="swiper-slide mb-65px px-15px">
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
              src="{{ asset('storage/'.$property->images[0]) }}"
              class="w-full group-hover:scale-110 transition-all duration-700"
              alt=""
            >
          </a>
          <div
            class="absolute w-full left-0 bottom-0 px-15px pb-15px lg:px-30px bg-transparent bg-gradient-color-5"
          >
            <div
              class="text-sm text-white flex justify-between items-center"
            >
              <a
                href="locations.html"
                class="hover:text-secondary-color"
                ><i class="flaticon-pin"></i>{{$property->address}}</a
              >
            
            </div>
          </div>
         
        </div>
        <!-- card body -->
        <div class="px-5 pt-4 lg:px-30px lg:pt-5">
          <h5
            class="text-lg text-secondary-color font-semibold mb-5px"
          >
           
             
              @foreach($property->prices as $price)
                 @if ($price->currency && $price->currency->code === 'USD')
                 <span class="leading-1.8">    {{ number_format($price->price, 2) }} {{ $price->currency->code }}  </span>
                    @endif
                 @endforeach

          
            {{-- <label class="text-sm font-normal">/Month</label> --}}
          </h5>
          <h4
            class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px"
          >
            <a
              href="product-details.html"
              class="hover:text-secondary-color leading-1.3"
              >{{ $property->title }}</a
            >
          </h4>
          <p class="text-sm mb-15px line-clamp-2 leading-1.8">
            {{ $property->description }}
        </p>

          <ul class="flex flex-wrap gap-15px py-4">
            <li
              class="text-sm pr-4 border-r border-primary-color border-opacity-20"
            >
              <p class="leading-1.8 font-bold">
                {{$property->bedrooms}}<i class="flaticon-bed ml-1"></i>
              </p>
              <p class="leading-1.8">Bedrooms</p>
            </li>
            <li
              class="text-sm pr-4 border-r border-primary-color border-opacity-20"
            >
              <p class="leading-1.8 font-bold">
                {{$property->bathrooms}}<i class="flaticon-clean ml-1"></i>
              </p>
              <p class="leading-1.8">Bathrooms</p>
            </li>

            <li class="text-sm">
              <p class="leading-1.8 font-bold">
                {{ $property->area }}<i
                  class="flaticon-square-shape-design-interface-tool-symbol ml-1"
                ></i>
              </p>
              <p class="leading-1.8">square Ft</p>
            </li>
          </ul>
        </div>
        <!-- cart footer -->
        <div
          class="p-5 lg:p-30px lg:pt-5 border-t border-border-color-1"
        >
          <div
            class="flex flex-wrap-reverse items-center justify-between gap-y-5"
          >
            <div class="flex gap-x-3">
              <a href="team-details.html" class="w-10 h-10"
                ><img
                  src="{{ asset('storage/'.$property->team->image) }}"
                  alt=""
                  class="w-full h-full rounded-100%"
              ></a>
              <div>
                <h4
                  class="text-sm font-semibold text-heading-color mb-0"
                >
                  <a
                    class="leading-1.3 hover:text-secondary-color"
                    href="team-details.html"
                    >{{ $property->team->name }}</a
                  >
                </h4>
                <span class="text-xs"> {{ $property->team->specialization }} </span>
              </div>
            </div>
            <ul class="flex gap-x-2">
         
              <li>
                <button
                  class="modal-open w-9 h-9 flex items-center justify-center  text-center hover:bg-secondary-color hover:text-white font-bold"
                  data-modal-index="2"
                  onclick="addToWishlist({{ $property }})"
               
                  id="heart-{{ $property->id }}"
                >
                  <i class="flaticon-heart-1 leading-1"></i>
                </button>
              </li>
         
            </ul>
          </div>
        </div>
      </div>
    </div>       
     @empty
       
     @endforelse
          
          
       
       
        </div>
      </div>
    </div>
        </div>
      </div>
     
     
     
        </div>
      </div>
    </div>
          <!-- pagination -->
          <div
            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px]"
          >
           
          </div>
          <!--  navigation -->
          <div class="hidden 3xl:block">
            <div class="swiper-button-next z-1">
              <i class="fas fa-arrow-right"></i>
            </div>
            <div class="swiper-button-prev z-1">
              <i class="fas fa-arrow-left"></i>
            </div>
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
              <img src="./assets/img/product/4.png" class="w-full" alt="" >
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
                    ><i class="fas fa-star-half-alt leading-1.8"></i
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
                  >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dignissimos repellendus repudiandae incidunt quidem
                  pariatur expedita, quo quis modi tempore non.</span
                >
              </p>

              <ul
                class="flex flex-wrap gap-5 pb-5 mb-5 border-b border-border-color-12 border-opacity-25"
              >
                <li class="text-sm">
                  <button
                    class="modal-open leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
                    data-modal-index="3"
                  >
                    <i class="far fa-heart px-0.5"></i> Add to Wishlist
                  </button>
                </li>

                <li class="text-sm">
                  <button
                    class="leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
                  >
                    <i class="fas fa-exchange-alt px-0.5"></i> Compare
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
  </section>
  <!--  appartments plan section -->
  
  
 

            <!-- pagination -->
            <div
              class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block lg:hidden"
            >
            
            </div>
            <!--  navigation -->
            <div class="hidden lg:block">
              <div class="swiper-button-next bg-white z-1">
                <i class="fas fa-arrow-right"></i>
              </div>
              <div class="swiper-button-prev bg-white z-1">
                <i class="fas fa-arrow-left"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
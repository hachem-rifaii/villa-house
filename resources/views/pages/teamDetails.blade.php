@extends('layouts.app')

@section('title', 'Team Details - VillaHouse')

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
                  >Agent Details</span
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
                  Agent Details
                </li>
              </ul>
            </div>
          </div>
        </section>
  
        <!-- team section -->
        <section>
          <div class="container py-30">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px">
              <!-- avatar -->
              <div class="lg:col-start-1 lg:col-span-4 mb-10">
                <div>
                  <div class="flex flex-col items-center text-center">
                    <div class="text-center mb-6px max-w-350px">
                      <img
                        src="./assets/img/team/4.jpg"
                        alt=""
                        class="inline-block w-full"
                      >
                    </div>
                    <div class="text-center px-15px py-25px">
                      <h6
                        class="text-xl md:text-22px lg:text-26px xl:text-3xl text-heading-color font-bold mb-15px"
                      >
                        <a
                          class="hover:text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3 xl:leading-1.3"
                          href="team-details.html"
                          >Rosalina D. William</a
                        >
                      </h6>
                      <h6
                        class="text-sm md:text-15px lg:text-base font-bold mb-3"
                      >
                        <span
                          class="text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3 uppercase"
                          >Property Seller</span
                        >
                      </h6>
                      <!-- socila -->
                      <ul
                        class="text-sm lg:text-base flex gap-15px justify-center items-center pt-4"
                      >
                        <li class="leading-1.8 lg:leading-1.8">
                          <a
                            class="w-50px h-50px flex items-center justify-center border-2 border-border-color-11 hover:bg-secondary-color hover:text-white hover:border-secondary-color"
                            href="https://www.facebook.com"
                            ><i class="fab fa-facebook-f"></i
                          ></a>
                        </li>
                        <li class="leading-1.8 lg:leading-1.8">
                          <a
                            class="w-50px h-50px flex items-center justify-center border-2 border-border-color-11 hover:bg-secondary-color hover:text-white hover:border-secondary-color"
                            href="https://x.com"
                            ><i class="fab fa-twitter"></i
                          ></a>
                        </li>
                        <li class="leading-1.8 lg:leading-1.8">
                          <a
                            class="w-50px h-50px flex items-center justify-center border-2 border-border-color-11 hover:bg-secondary-color hover:text-white hover:border-secondary-color"
                            href="https://www.linkedin.com"
                            ><i class="fab fa-linkedin"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- details -->
              <div class="lg:col-start-5 lg:col-span-8">
                <p class="text-sm lg:text-base mb-6">
                  <span class="leading-1.8 lg:leading-1.8"
                    >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur.</span
                  >
                </p>
                <!-- contact -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-30px">
                  <ul>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Positions:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8">
                        Senior Property Seller</span
                      >
                    </li>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Experience:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8"> 10+ Years</span>
                    </li>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Location:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8"> 13/A, NYC</span>
                    </li>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Practice Area:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8">
                        Property Seller</span
                      >
                    </li>
                  </ul>
                  <ul>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Email:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8">
                        example@example.com</span
                      >
                    </li>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Fax:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8">
                        +0123-456 789</span
                      >
                    </li>
                    <li class="text-sm lg:text-base mt-4">
                      <strong
                        class="leading-1.8 lg:leading-1.8 min-w-[120px] inline-block"
                        >Phone:</strong
                      >
                      <span class="leading-1.8 lg:leading-1.8">
                        +0123-456 789</span
                      >
                    </li>
                  </ul>
                </div>
                <hr class="my-50px border-t border-border-color-12 opacity-25" >
                <p class="text-sm lg:text-base mb-6">
                  <span class="leading-1.8 lg:leading-1.8"
                    >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum. Sed ut perspiciatis unde omnis
                    iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia consequu ntur magni
                    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                    quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora incidunt ut labore et dolore magnam aliquam quaerat
                    voluptatem.</span
                  >
                </p>
                <div
                  class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 pt-4 gap-y-30px"
                ></div>
                <!-- cards -->
                <div class="service-cards flex flex-wrap items-center mb-5">
                  <!-- card 1 -->
                  <div
                    class="service-card service-card-2 basis-full sm:basis-1/2 xl:basis-1/3 px-15px lg:px-0 mb-30px"
                  >
                    <div
                      class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300 text-center"
                    >
                      <div class="mb-15px text-6xl text-secondary-color">
                        <i class="icon-tire"></i>
                      </div>
                      <h6
                        class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px"
                      >
                        <a
                          class="hover:text-secondary-color leading-1.3"
                          href="service-details.html"
                          >Home Buying</a
                        >
                      </h6>
                      <p class="text-sm">
                        <span class="leading-1.8"
                          >Lorem ipsum dolor sit ame it, consectetur adipisicing
                          elit, sed do eiusmod te mp or</span
                        >
                      </p>
                      <div class="text-sm text-color-1 font-bold mt-25px">
                        <a
                          class="find-service hover:text-secondary-color flex items-center justify-center"
                          href="service-details.html"
                          >Read More
                          <i
                            class="flaticon-right-arrow inline-block leading-1"
                          ></i
                        ></a>
                      </div>
                      <span
                        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"
                      ></span>
                    </div>
                  </div>
  
                  <!-- card 2 -->
                  <div
                    class="service-card service-card-2 basis-full sm:basis-1/2 xl:basis-1/3 px-15px lg:px-0 mb-30px active"
                  >
                    <div
                      class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300 text-center"
                    >
                      <div class="mb-15px text-6xl text-secondary-color">
                        <i class="icon-mechanic"></i>
                      </div>
                      <h6
                        class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px"
                      >
                        <a
                          class="hover:text-secondary-color leading-1.3"
                          href="service-details.html"
                          >Home Selling</a
                        >
                      </h6>
                      <p class="text-sm">
                        <span class="leading-1.8"
                          >Lorem ipsum dolor sit ame it, consectetur adipisicing
                          elit, sed do eiusmod te mp or</span
                        >
                      </p>
                      <div class="text-sm text-color-1 font-bold mt-25px">
                        <a
                          class="find-service hover:text-secondary-color flex items-center justify-center"
                          href="service-details.html"
                          >Read More
                          <i
                            class="flaticon-right-arrow inline-block leading-1"
                          ></i
                        ></a>
                      </div>
                      <span
                        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"
                      ></span>
                    </div>
                  </div>
  
                  <!-- card 1 -->
                  <div
                    class="service-card service-card-2 basis-full sm:basis-1/2 xl:basis-1/3 px-15px lg:px-0 mb-30px"
                  >
                    <div
                      class="border border-border-color-8 relative py-10 pb-35px px-30px transition-all duration-300 text-center"
                    >
                      <div class="mb-15px text-6xl text-secondary-color">
                        <i class="icon-wheel-1"></i>
                      </div>
                      <h6
                        class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px"
                      >
                        <a
                          class="hover:text-secondary-color leading-1.3"
                          href="service-details.html"
                          >Escrow Services</a
                        >
                      </h6>
                      <p class="text-sm">
                        <span class="leading-1.8"
                          >Lorem ipsum dolor sit ame it, consectetur adipisicing
                          elit, sed do eiusmod te mp or</span
                        >
                      </p>
                      <div class="text-sm text-color-1 font-bold mt-25px">
                        <a
                          class="find-service hover:text-secondary-color flex items-center justify-center"
                          href="service-details.html"
                          >Read More
                          <i
                            class="flaticon-right-arrow inline-block leading-1"
                          ></i
                        ></a>
                      </div>
                      <span
                        class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"
                      ></span>
                    </div>
                  </div>
                </div>
                <p class="text-sm lg:text-base mb-6">
                  <span class="leading-1.8 lg:leading-1.8"
                    >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum. Sed ut perspiciatis unde omnis
                    iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia consequu ntur magni
                    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                    quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora incidunt ut labore et dolore magnam aliquam quaerat
                    voluptatem.</span
                  >
                </p>
                <!-- details form -->
                <div>
                  <form
                    class="form-primary bg-white shadow-box-shadow-2 px-25px pt-10 pb-50px md:p-50px md:pt-10 mt-50px"
                  >
                    <h4
                      class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color mb-30px"
                    >
                      Contact for any Inquiry
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                      <!-- name -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Enter your name"
                          class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
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
                          placeholder="Enter email address"
                          class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                        >
                        <span class="absolute top-1/2 -translate-y-1/2 right-4">
                          <i
                            class="fas fa-envelope text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
                      <!-- type select -->
                      <div class="relative">
                        <select
                          class="selectize boerder-2 border-border-color-9 text-[14px] leading-60px h-65px"
                        >
                          <option
                            value="Select Service Type"
                            data-display="Select"
                          >
                            Select Service Type
                          </option>
                          <option value="Property Management ">
                            Property Management
                          </option>
                          <option value="Mortgage Service ">
                            Mortgage Service
                          </option>
                          <option value="Consulting Service">
                            Consulting Service
                          </option>
                          <option value="Home Buying">Home Buying</option>
                          <option value="Home Selling">Home Selling</option>
                          <option value="Escrow Services">Escrow Services</option>
                        </select>
                      </div>
                      <!-- number -->
                      <div class="relative">
                        <input
                          type="text"
                          placeholder="Enter phone number"
                          class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                        >
                        <span class="absolute top-1/2 -translate-y-1/2 right-4">
                          <i
                            class="fas fa-phone text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
                      <!-- message -->
                      <div class="relative md:col-start-1 md:col-span-2 mb-30px">
                        <textarea
                         
                          
                          placeholder="Enter message"
                          class="min-h-[150px] text-paragraph-color pl-5 pr-50px py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-50"
                        ></textarea>
                        <span
                          class="absolute top-[30px] -translate-y-1/2 right-4"
                        >
                          <i
                            class="fas fa-pencil text-sm lg:text-base text-secondary-color font-bold"
                          ></i>
                        </span>
                      </div>
                    </div>
                    <!-- agree -->
                    <div class="text-sm flex items-center mb-25px">
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
                          get an free service
                        </button>
                      </h5>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
   
@endsection
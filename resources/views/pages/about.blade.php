@extends('layouts.app')

@section('title', 'Villa House - about Properties')

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
                  >About Us</span
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
                  About Us
                </li>
              </ul>
            </div>
          </div>
        </section>
  
        <!-- about section -->
        <section>
          <div class="container pt-30 pb-90px">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-30px">
              <!-- about left -->
              <div class="lg:mr-30px relative mb-10 lg:mb-0">
                <img
                  src="./assets/img/others/13.png"
                  alt=""
                  class="max-w-full"
                >
                <div
                  class="absolute left-[10px] bottom-[70px] w-150px md:w-300px"
                >
                  <div class="relative">
                    <img src="./assets/img/others/8.png" alt="" class="w-full" >
                    <div
                      class="absolute left-0 top-0 w-full h-full flex items-center justify-center"
                    >
                      <a
                        class="glightbox2 w-50px h-50px lg:w-20 lg:h-20 text-center lg:text-lg text-secondary-color shadow-box-shadow-2 rounded-full bg-white flex items-center justify-center animate-pulse1"
                        href="https://www.youtube.com/embed/tlThdr3O5Qo"
                        data-glightbox="type: video;"
                      >
                        <i class="icon-play"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- about right -->
              <div>
                <div class="mb-5">
                  <p
                    class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-1px px-5 rounded-full inline-block font-semibold"
                  >
                    <span class="leading-1.3">about us</span>
                  </p>
                  <h2
                    class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold mb-15px"
                  >
                    <span class="leading-1.3">
                      The Leading Real Estate Rental Marketplace
                    </span>
                  </h2>
                  <p class="text-sm lg:text-base max-w-500px">
                    <span class="leading-1.8 lg:leading-1.8"
                      >Over 39,000 people work for us in more than 70 countries
                      all over the This breadth of global coverage, combined with
                      specialist services</span
                    >
                  </p>
                </div>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-4 pt-4">
                  <li class="text-sm lg:text-base flex items-center">
                    <i
                      class="flaticon-home-2 text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"
                    ></i>
                    <span class="leading-1.8">Smart Home Design</span>
                  </li>
                  <li class="text-sm lg:text-base flex items-center">
                    <i
                      class="flaticon-mountain text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"
                    ></i>
                    <span class="leading-1.8">Beautiful Scene Around</span>
                  </li>
                  <li class="text-sm lg:text-base flex items-center">
                    <i
                      class="flaticon-heart text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"
                    ></i>
                    <span class="leading-1.8">Exceptional Lifestyle</span>
                  </li>
                  <li class="text-sm lg:text-base flex items-center">
                    <i
                      class="flaticon-secure text-xl text-secondary-color bg-color-6 w-45px h-45px flex items-center justify-center mr-25px rounded-100%"
                    ></i>
                    <span class="leading-1.8">Complete 24/7 Security</span>
                  </li>
                </ul>
  
                <div class="bg-secondary-color bg-opacity-5 mt-30px mb-10">
                  <p
                    class="text-sm lg:text-base p-5 border-l-4 border-secondary-color"
                  >
                    <span class="leading-1.8">
                      "Enimad minim veniam quis nostrud exercitation <br >
                      llamco laboris. Lorem ipsum dolor sit amet"
                    </span>
                  </p>
                </div>
                <div>
                  <h5
                    class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block"
                  >
                    <span
                      class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"
                    ></span>
                    <a
                      href="service.html"
                      class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px"
                      >OUR SERVICES</a
                    >
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- services section -->
        <section class="bg-section-bg-1">
          <div class="container pt-30 pb-90px">
            <!-- section heading -->
            <div class="text-center mb-50px">
              <p
                class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
              >
                <span class="leading-1.3">Our Services</span>
              </p>
              <h2
                class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
              >
                <span class="leading-1.3"> Our Main Focus </span>
              </h2>
            </div>
            <!-- services cards  -->
  
            <div
              class="service-cards flex flex-wrap justify-center items-center text-center -mx-15px"
            >
              <!-- card 1 -->
              <div
                class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
              >
                <div
                  class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300"
                >
                  <div class="text-center mb-5">
                    <img
                      src="./assets/img/icons/icon-img/21.png"
                      alt=""
                      class="inline-block"
                    >
                  </div>
                  <h6
                    class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold"
                  >
                    <a
                      class="hover:text-secondary-color leading-1.3 mb-1"
                      href="service-details.html"
                      >Buy a home</a
                    >
                  </h6>
                  <p class="text-sm mb-25px">
                    <span class="leading-1.8"
                      >over 1 million+ homes for sale available on the website, we
                      can match you with a house you will want to call home.</span
                    >
                  </p>
                  <div class="text-sm text-color-1 font-bold">
                    <a
                      class="find-service hover:text-secondary-color flex items-center justify-center"
                      href="service-details.html"
                      >Find A Home
                      <i class="flaticon-right-arrow inline-block leading-1"></i
                    ></a>
                  </div>
                  <span
                    class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"
                  ></span>
                </div>
              </div>
              <!-- card 2 -->
              <div
                class="service-card active basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
              >
                <div
                  class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300"
                >
                  <div class="text-center mb-5">
                    <img
                      src="./assets/img/icons/icon-img/22.png"
                      alt=""
                      class="inline-block"
                    >
                  </div>
                  <h6
                    class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold"
                  >
                    <a
                      class="hover:text-secondary-color leading-1.3 mb-1"
                      href="service-details.html"
                      >Rent a home</a
                    >
                  </h6>
                  <p class="text-sm mb-25px">
                    <span class="leading-1.8"
                      >over 1 million+ homes for sale available on the website, we
                      can match you with a house you will want to call home.</span
                    >
                  </p>
                  <div class="text-sm text-color-1 font-bold">
                    <a
                      class="find-service hover:text-secondary-color flex items-center justify-center"
                      href="service-details.html"
                      >Find A Home
                      <i class="flaticon-right-arrow inline-block leading-1"></i
                    ></a>
                  </div>
                  <span
                    class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"
                  ></span>
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
              >
                <div
                  class="border border-border-color-1 shadow-box-shadow-1 bg-white relative py-10 pb-35px px-30px transition-all duration-300"
                >
                  <div class="text-center mb-5">
                    <img
                      src="./assets/img/icons/icon-img/23.png"
                      alt=""
                      class="inline-block"
                    >
                  </div>
                  <h6
                    class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold"
                  >
                    <a
                      class="hover:text-secondary-color leading-1.3 mb-1"
                      href="service-details.html"
                      >Sell a home</a
                    >
                  </h6>
                  <p class="text-sm mb-25px">
                    <span class="leading-1.8"
                      >over 1 million+ homes for sale available on the website, we
                      can match you with a house you will want to call home.</span
                    >
                  </p>
                  <div class="text-sm text-color-1 font-bold">
                    <a
                      class="find-service hover:text-secondary-color flex items-center justify-center"
                      href="service-details.html"
                      >Find A Home
                      <i class="flaticon-right-arrow inline-block leading-1"></i
                    ></a>
                  </div>
                  <span
                    class="hover-line absolute bottom-0 left-0 w-0 h-1 bg-secondary-color transition-all duration-300 block"
                  ></span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- team section -->
        <section>
          <div class="container pt-115px pb-90px">
            <!-- section heading -->
            <div class="text-center mb-50px">
              <p
                class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
              >
                <span class="leading-1.3">Team</span>
              </p>
              <h2
                class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
              >
                <span class="leading-1.3"> Property Agents </span>
              </h2>
            </div>
            <!-- team cards  -->
  
            <div
              class="service-cards flex flex-wrap justify-center items-center text-center -mx-15px"
            >
              <!-- card 1 -->
              <div
                class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
              >
                <div
                  class="border border-white-6 hover:shadow-box-shadow-1 bg-white relative transition-all duration-300"
                >
                  <div class="text-center mb-5">
                    <img
                      src="./assets/img/team/4.jpg"
                      alt=""
                      class="inline-block w-full"
                    >
                  </div>
                  <div class="text-center px-15px py-25px">
                    <h6
                      class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px"
                    >
                      <a
                        class="hover:text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                        href="team-details.html"
                        >Rosalina D. William</a
                      >
                    </h6>
                    <h6
                      class="text-sm md:text-15px lg:text-base font-bold mb-15px"
                    >
                      <span
                        class="text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                        >Real Estate Broker</span
                      >
                    </h6>
                    <!-- socila -->
                    <ul
                      class="text-sm lg:text-base flex gap-15px justify-center items-center"
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
                    </ul>
                  </div>
                </div>
              </div>
              <!-- card 1 -->
              <div
                class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
              >
                <div
                  class="border border-white-6 hover:shadow-box-shadow-1 bg-white relative transition-all duration-300"
                >
                  <div class="text-center mb-5">
                    <img
                      src="./assets/img/team/2.jpg"
                      alt=""
                      class="inline-block w-full"
                    >
                  </div>
                  <div class="text-center px-15px py-25px">
                    <h6
                      class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px"
                    >
                      <a
                        class="hover:text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                        href="team-details.html"
                        >Kelian Anderson</a
                      >
                    </h6>
                    <h6
                      class="text-sm md:text-15px lg:text-base font-bold mb-15px"
                    >
                      <span
                        class="text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                        >Selling Agents</span
                      >
                    </h6>
                    <!-- socila -->
                    <ul
                      class="text-sm lg:text-base flex gap-15px justify-center items-center"
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
                    </ul>
                  </div>
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
              >
                <div
                  class="border border-white-6 hover:shadow-box-shadow-1 bg-white relative transition-all duration-300"
                >
                  <div class="text-center mb-5">
                    <img
                      src="./assets/img/team/5.jpg"
                      alt=""
                      class="inline-block w-full"
                    >
                  </div>
                  <div class="text-center px-15px py-25px">
                    <h6
                      class="text-17px md:text-lg lg:text-xl text-heading-color font-bold mb-15px"
                    >
                      <a
                        class="hover:text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                        href="team-details.html"
                        >Miranda H. Halim</a
                      >
                    </h6>
                    <h6
                      class="text-sm md:text-15px lg:text-base font-bold mb-15px"
                    >
                      <span
                        class="text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                        >Property Seller</span
                      >
                    </h6>
                    <!-- socila -->
                    <ul
                      class="text-sm lg:text-base flex gap-15px justify-center items-center"
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
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- testimonials section -->
        <section>
          <div class="bg-[url('../img/bg/20.jpg')] bg-top bg-no-repeat">
            <div class="container pt-115px pb-55px">
              <!-- section heading -->
              <div class="text-center mb-50px">
                <p
                  class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
                >
                  <span class="leading-1.3">Our Testimonial</span>
                </p>
                <h2
                  class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
                >
                  <span class="leading-1.3">Clients Feedback </span>
                </h2>
              </div>
  
              <div
                class="testimonials-slider-container swiper-container relative -mx-15px"
              >
                <!-- apartment cards  -->
                <div class="swiper testimonials-slider static">
                  <div class="swiper-wrapper">
                    <!-- card 1 -->
                    <div class="swiper-slide mb-65px lg:mb-50px px-15px">
                      <div
                        class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
                      >
                        <!-- card body -->
                        <div>
                          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
                            <span
                              class="text-3xl mr-0.5 translate-y-2 inline-block"
                              ><i
                                class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
                              ></i
                            ></span>
                            <span class="leading-1.8">
                              Precious ipsum dolor sit amet consectetur
                              adipisicing elit, sed dos mod tempor incididunt ut
                              labore et dolore magna aliqua. Ut enim ad min
                              veniam, quis nostrud Precious ips um dolor sit amet,
                              consecte</span
                            >
                          </p>
                        </div>
                        <!-- cart footer -->
                        <div>
                          <div>
                            <div
                              class="flex flex-wrap md:flex-nowrap gap-x-15px gap-y-10px items-center"
                            >
                              <div class="w-60px h-60px flex-shrink-0">
                                <img
                                  src="./assets/img/testimonial/1.jpg"
                                  alt=""
                                  class="w-full h-full rounded-100%"
                                >
                              </div>
                              <div>
                                <h4
                                  class="text-base lg:text-lg font-semibold text-heading-color mb-0"
                                >
                                  <span
                                    class="leading-1.3 hover:text-secondary-color"
                                    >Jacob William</span
                                  >
                                </h4>
  
                                <span class="text-sm uppercase">
                                  Selling Agents
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <span
                          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
                        ></span>
                      </div>
                    </div>
                    <!-- card 2 -->
                    <div class="swiper-slide mb-65px px-15px">
                      <div
                        class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
                      >
                        <!-- card body -->
                        <div>
                          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
                            <span
                              class="text-3xl mr-0.5 translate-y-2 inline-block"
                              ><i
                                class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
                              ></i
                            ></span>
                            <span class="leading-1.8">
                              Precious ipsum dolor sit amet consectetur
                              adipisicing elit, sed dos mod tempor incididunt ut
                              labore et dolore magna aliqua. Ut enim ad min
                              veniam, quis nostrud Precious ips um dolor sit amet,
                              consecte</span
                            >
                          </p>
                        </div>
                        <!-- cart footer -->
                        <div>
                          <div>
                            <div class="flex gap-x-15px gap-y-10px items-center">
                              <div class="w-60px h-60px flex-shrink-0">
                                <img
                                  src="./assets/img/testimonial/2.jpg"
                                  alt=""
                                  class="w-full h-full rounded-100%"
                                >
                              </div>
                              <div>
                                <h4
                                  class="text-base lg:text-lg font-semibold text-heading-color mb-0"
                                >
                                  <span
                                    class="leading-1.3 hover:text-secondary-color"
                                    >Kelian Anderson</span
                                  >
                                </h4>
  
                                <span class="text-sm uppercase">
                                  Selling Agents
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <span
                          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
                        ></span>
                      </div>
                    </div>
                    <!-- card 3 -->
                    <div class="swiper-slide mb-65px lg:mb-50px px-15px">
                      <div
                        class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
                      >
                        <!-- card body -->
                        <div>
                          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
                            <span
                              class="text-3xl mr-0.5 translate-y-2 inline-block"
                              ><i
                                class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
                              ></i
                            ></span>
                            <span class="leading-1.8">
                              Precious ipsum dolor sit amet consectetur
                              adipisicing elit, sed dos mod tempor incididunt ut
                              labore et dolore magna aliqua. Ut enim ad min
                              veniam, quis nostrud Precious ips um dolor sit amet,
                              consecte</span
                            >
                          </p>
                        </div>
                        <!-- cart footer -->
                        <div>
                          <div>
                            <div class="flex gap-x-15px gap-y-10px items-center">
                              <div class="w-60px h-60px flex-shrink-0">
                                <img
                                  src="./assets/img/testimonial/3.jpg"
                                  alt=""
                                  class="w-full h-full rounded-100%"
                                >
                              </div>
                              <div>
                                <h4
                                  class="text-base lg:text-lg font-semibold text-heading-color mb-0"
                                >
                                  <span
                                    class="leading-1.3 hover:text-secondary-color"
                                    >Adam Joseph</span
                                  >
                                </h4>
  
                                <span class="text-sm uppercase">
                                  Selling Agents
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <span
                          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
                        ></span>
                      </div>
                    </div>
                    <!-- card 4 -->
                    <div class="swiper-slide mb-65px lg:mb-50px px-15px">
                      <div
                        class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative"
                      >
                        <!-- card body -->
                        <div>
                          <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
                            <span
                              class="text-3xl mr-0.5 translate-y-2 inline-block"
                              ><i
                                class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"
                              ></i
                            ></span>
                            <span class="leading-1.8">
                              Precious ipsum dolor sit amet consectetur
                              adipisicing elit, sed dos mod tempor incididunt ut
                              labore et dolore magna aliqua. Ut enim ad min
                              veniam, quis nostrud Precious ips um dolor sit amet,
                              consecte</span
                            >
                          </p>
                        </div>
                        <!-- cart footer -->
                        <div>
                          <div>
                            <div class="flex gap-x-15px gap-y-10px items-center">
                              <div class="w-60px h-60px flex-shrink-0">
                                <img
                                  src="./assets/img/testimonial/4.jpg"
                                  alt=""
                                  class="w-full h-full rounded-100%"
                                >
                              </div>
                              <div>
                                <h4
                                  class="text-base lg:text-lg font-semibold text-heading-color mb-0"
                                >
                                  <span
                                    class="leading-1.3 hover:text-secondary-color"
                                    >James Carter</span
                                  >
                                </h4>
  
                                <span class="text-sm uppercase">
                                  Selling Agents
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <span
                          class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"
                        ></span>
                      </div>
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
          </div>
        </section>
  
        <!-- news  section -->
        <section>
          <div>
            <div class="container pb-70px">
              <!-- section heading -->
              <div class="text-center mb-50px">
                <p
                  class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
                >
                  <span class="leading-1.3">News & Blogs</span>
                </p>
                <h2
                  class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
                >
                  <span class="leading-1.3">Leatest News Feeds </span>
                </h2>
              </div>
  
              <div
                class="news-slider-container swiper-container relative -mx-15px"
              >
                <!-- apartment cards  -->
                <div class="swiper news-slider static">
                  <div class="swiper-wrapper">
                    <!-- card 1 -->
                    <div
                      class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
                    >
                      <div class="group">
                        <!-- card thumbs -->
                        <div class="relative leading-1">
                          <a href="blog-details.html" class="overflow-hidden">
                            <img
                              src="./assets/img/blog/1.jpg"
                              class="w-full group-hover:scale-110 transition-all duration-700"
                              alt=""
                            >
                          </a>
                        </div>
                        <!-- card body -->
                        <div class="p-30px shadow-box-shadow-4">
                          <ul class="mb-15px flex gap-x-25px items-center">
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="far fa-user text-secondary-color"></i>
                                by: Admin</a
                              >
                            </li>
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="fas fa-tags text-secondary-color"></i>
                                Room</a
                              >
                            </li>
                          </ul>
                          <h4
                            class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
                          >
                            <a
                              href="blog-details.html"
                              class="hover:text-secondary-color leading-1.3"
                              >10 Brilliant Ways To Decorate Your Home</a
                            >
                          </h4>
                          <div
                            class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
                          >
                            <ul class="flex justify-between items-center">
                              <li class="text-xs md:text-sm font-semibold">
                                <p class="leading-1.8 flex gap-5px items-center">
                                  <i
                                    class="far fa-calendar-alt text-secondary-color"
                                  ></i>
                                  June 24, 2024
                                </p>
                              </li>
                              <li class="text-xs md:text-sm font-semibold">
                                <a
                                  href="blog-details.html"
                                  class="leading-1.8 text-secondary-color uppercase"
                                >
                                  Read more</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card 2 -->
                    <div
                      class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
                    >
                      <div class="group">
                        <!-- card thumbs -->
                        <div class="relative leading-1">
                          <a href="blog-details.html" class="overflow-hidden">
                            <img
                              src="./assets/img/blog/2.jpg"
                              class="w-full group-hover:scale-110 transition-all duration-700"
                              alt=""
                            >
                          </a>
                        </div>
                        <!-- card body -->
                        <div class="p-30px shadow-box-shadow-4">
                          <ul class="mb-15px flex gap-x-25px items-center">
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="far fa-user text-secondary-color"></i>
                                by: Admin</a
                              >
                            </li>
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="fas fa-tags text-secondary-color"></i>
                                Interior</a
                              >
                            </li>
                          </ul>
                          <h4
                            class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
                          >
                            <a
                              href="blog-details.html"
                              class="hover:text-secondary-color leading-1.3"
                              >The Most Inspiring Interior Design Of 2024</a
                            >
                          </h4>
                          <div
                            class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
                          >
                            <ul class="flex justify-between items-center">
                              <li class="text-xs md:text-sm font-semibold">
                                <p class="leading-1.8 flex gap-5px items-center">
                                  <i
                                    class="far fa-calendar-alt text-secondary-color"
                                  ></i>
                                  June 21, 2024
                                </p>
                              </li>
                              <li class="text-xs md:text-sm font-semibold">
                                <a
                                  href="blog-details.html"
                                  class="leading-1.8 text-secondary-color uppercase"
                                >
                                  Read more</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card 3 -->
                    <div
                      class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
                    >
                      <div class="group">
                        <!-- card thumbs -->
                        <div class="relative leading-1">
                          <a href="blog-details.html" class="overflow-hidden">
                            <img
                              src="./assets/img/blog/3.jpg"
                              class="w-full group-hover:scale-110 transition-all duration-700"
                              alt=""
                            >
                          </a>
                        </div>
                        <!-- card body -->
                        <div class="p-30px shadow-box-shadow-4">
                          <ul class="mb-15px flex gap-x-25px items-center">
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="far fa-user text-secondary-color"></i>
                                by: Admin</a
                              >
                            </li>
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="fas fa-tags text-secondary-color"></i>
                                Estate</a
                              >
                            </li>
                          </ul>
                          <h4
                            class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
                          >
                            <a
                              href="blog-details.html"
                              class="hover:text-secondary-color leading-1.3"
                              >Recent Commercial Real Estate Transactions</a
                            >
                          </h4>
                          <div
                            class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
                          >
                            <ul class="flex justify-between items-center">
                              <li class="text-xs md:text-sm font-semibold">
                                <p class="leading-1.8 flex gap-5px items-center">
                                  <i
                                    class="far fa-calendar-alt text-secondary-color"
                                  ></i>
                                  June 22, 2024
                                </p>
                              </li>
                              <li class="text-xs md:text-sm font-semibold">
                                <a
                                  href="blog-details.html"
                                  class="leading-1.8 text-secondary-color uppercase"
                                >
                                  Read more</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card 4 -->
                    <div
                      class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
                    >
                      <div class="group">
                        <!-- card thumbs -->
                        <div class="relative leading-1">
                          <a href="blog-details.html" class="overflow-hidden">
                            <img
                              src="./assets/img/blog/4.jpg"
                              class="w-full group-hover:scale-110 transition-all duration-700"
                              alt=""
                            >
                          </a>
                        </div>
                        <!-- card body -->
                        <div class="p-30px shadow-box-shadow-4">
                          <ul class="mb-15px flex gap-x-25px items-center">
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="far fa-user text-secondary-color"></i>
                                by: Admin</a
                              >
                            </li>
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="fas fa-tags text-secondary-color"></i>
                                Room</a
                              >
                            </li>
                          </ul>
                          <h4
                            class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
                          >
                            <a
                              href="blog-details.html"
                              class="hover:text-secondary-color leading-1.3"
                              >Renovating a Living Room? Experts Share Their
                              Secrets</a
                            >
                          </h4>
                          <div
                            class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
                          >
                            <ul class="flex justify-between items-center">
                              <li class="text-xs md:text-sm font-semibold">
                                <p class="leading-1.8 flex gap-5px items-center">
                                  <i
                                    class="far fa-calendar-alt text-secondary-color"
                                  ></i>
                                  June 24, 2024
                                </p>
                              </li>
                              <li class="text-xs md:text-sm font-semibold">
                                <a
                                  href="blog-details.html"
                                  class="leading-1.8 text-secondary-color uppercase"
                                >
                                  Read more</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- card 5 -->
                    <div
                      class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
                    >
                      <div class="group">
                        <!-- card thumbs -->
                        <div class="relative leading-1">
                          <a href="blog-details.html" class="overflow-hidden">
                            <img
                              src="./assets/img/blog/5.jpg"
                              class="w-full group-hover:scale-110 transition-all duration-700"
                              alt=""
                            >
                          </a>
                        </div>
                        <!-- card body -->
                        <div class="p-30px shadow-box-shadow-4">
                          <ul class="mb-15px flex gap-x-25px items-center">
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="far fa-user text-secondary-color"></i>
                                by: Admin</a
                              >
                            </li>
                            <li class="text-xs md:text-sm font-semibold">
                              <a
                                href="#"
                                class="leading-1.8 hover:text-secondary-color flex gap-5px items-center"
                                ><i class="fas fa-tags text-secondary-color"></i>
                                Trends</a
                              >
                            </li>
                          </ul>
                          <h4
                            class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color"
                          >
                            <a
                              href="blog-details.html"
                              class="hover:text-secondary-color leading-1.3"
                              >7 home trends that will shape your house in 2024</a
                            >
                          </h4>
                          <div
                            class="pt-5 mt-5 lg:pt-5 border-t border-border-color-1"
                          >
                            <ul class="flex justify-between items-center">
                              <li class="text-xs md:text-sm font-semibold">
                                <p class="leading-1.8 flex gap-5px items-center">
                                  <i
                                    class="far fa-calendar-alt text-secondary-color"
                                  ></i>
                                  June 24, 2024
                                </p>
                              </li>
                              <li class="text-xs md:text-sm font-semibold">
                                <a
                                  href="blog-details.html"
                                  class="leading-1.8 text-secondary-color uppercase"
                                >
                                  Read more</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- pagination -->
                  <div
                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block xl:hidden"
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
                  <div class="hidden xl:block">
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
          </div>
        </section>
      </main>
@endsection
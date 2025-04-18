@extends('layouts.app')

@section('title', 'Villa House - sell Properties')

@section('content')
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
              >Contact Us</span
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
              Contact
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- icons section -->
    <section>
      <div class="container pt-30 pb-5">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-30px">
          <!-- card 1 -->
          <div
            class="px-30px py-50px border-2 border-border-color-11 text-center flex flex-col items-center"
          >
            <div class="mb-35px">
              <img src="./assets/img/icons/10.png" alt="" >
            </div>
            <div>
              <h2
                class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold mb-15px"
              >
                <span class="leading-1.3"> Email Address </span>
              </h2>
              <p class="text-sm lg:text-base">
                <span class="leading-1.8">
                  info@webmail.com <br >jobs@webexample.com
                </span>
              </p>
            </div>
          </div>
          <!-- card 2 -->
          <div
            class="px-30px py-50px border-2 border-border-color-11 text-center flex flex-col items-center"
          >
            <div class="mb-35px">
              <img src="./assets/img/icons/11.png" alt="" class="" >
            </div>
            <div>
              <h2
                class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold mb-15px"
              >
                <span class="leading-1.3"> Phone Number </span>
              </h2>
              <p class="text-sm lg:text-base">
                <span class="leading-1.8">
                  +0123-456789<br >+987-6543210
                </span>
              </p>
            </div>
          </div>
          <!-- card 3 -->
          <div
            class="px-30px py-50px border-2 border-border-color-11 text-center flex flex-col items-center"
          >
            <div class="mb-35px">
              <img src="./assets/img/icons/12.png" alt="" >
            </div>
            <div>
              <h2
                class="text-lg md:text-xl lg:text-22px xl:text-2xl text-heading-color font-bold mb-15px"
              >
                <span class="leading-1.3"> Office Address </span>
              </h2>
              <p class="text-sm lg:text-base">
                <span class="leading-1.8">
                  18/A, New Born Town Hall<br >New York, US
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section -->
    <section>
      <div class="container">
        <!-- details form -->
        <div class="relative -bottom-[100px] z-10">
          <form
            class="form-primary bg-white shadow-box-shadow-2 px-25px pt-10 pb-50px md:p-50px md:pt-10"
          >
            <h4
              class="text-22px font-semibold leading-1.3 pl-10px border-l-2 border-secondary-color text-heading-color mb-30px"
            >
              Get A Quote
            </h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
              <!-- name -->
              <div class="relative">
                <input
                  type="text"
                  placeholder="Enter your name"
                  class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color"
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
                  class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color"
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
                  <option value="Select Service Type" data-display="Select">
                    Select Service Type
                  </option>
                  <option value="Property Management ">
                    Property Management
                  </option>
                  <option value="Mortgage Service ">Mortgage Service</option>
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
                  class="text-paragraph-color pl-5 pr-50px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color"
                >
                <span class="absolute top-1/2 -translate-y-1/2 right-4">
                  <i
                    class="fas fa-phone text-sm lg:text-base text-secondary-color font-bold"
                  ></i>
                </span>
              </div>
              <!-- message -->
              <div class="relative md:col-start-1 md:col-span-2 mb-35px">
                <textarea
                 
                  
                  placeholder="Enter message"
                  class="min-h-[150px] text-paragraph-color pl-5 pr-50px py-15px outline-none border-2 border-border-color-9 focus:border focus:border-secondary-color h-65px block w-full rounded-none placeholder:opacity-60 placeholder:text-sm placeholder:text-paragraph-color"
                ></textarea>
                <span class="absolute top-[30px] -translate-y-1/2 right-4">
                  <i
                    class="fas fa-pencil text-sm lg:text-base text-secondary-color font-bold"
                  ></i>
                </span>
              </div>
            </div>
            <!-- agree -->
            <div class="text-sm flex items-center mb-30px">
              <input type="checkbox" id="agree" >
              <label for="agree" class="text-sm ml-1">
                Save my name, email, and website in this browser for the next
                time I comment.
              </label>
            </div>

            <!-- submit button -->

            <div class="pb-5">
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
    </section>
    <div class="pb-140px lg:pb-30">
      <div class="google-map h-[800px] relative z-1">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd"
       
         style="height:100%;width:100%;border:0px;"
         
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
    </div>
  </main>
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
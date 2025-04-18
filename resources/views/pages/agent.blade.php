@extends('layouts.app')

@section('title', 'Villa House - agent Properties')

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
                  >Our Agent</span
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
                  Agent
                </li>
              </ul>
            </div>
          </div>
        </section>
  
        <!-- team section -->
        <section>
          <div class="container pt-30 pb-90px">
            <div
              class="service-cards flex flex-wrap justify-center items-center text-center -mx-15px"
            >
              @forelse ( $agents as  $agent)
              <div
              class="service-card basis-full sm:basis-1/2 lg:basis-1/3 px-15px mb-30px"
            >
              <div
                class="border border-white-6 hover:shadow-box-shadow-1 bg-white relative transition-all duration-300"
              >
                <div class="text-center mb-5">
                  <img
                    src="{{ asset('storage/'.$agent->image) }}"
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
                      >{{ $agent->name }}</a
                    >
                  </h6>
                  <h6
                    class="text-[8px] md:text-md lg:text-md text-heading-color font-bold mb-15px"
                  >
                    <a
                      class="hover:text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                      href="team-details.html"
                      >{{ $agent->experience }} experience</a
                    >
                  </h6>
                  <h6
                    class="text-sm md:text-15px lg:text-base font-bold mb-15px"
                  >
                    <span
                      class="text-secondary-color leading-1.3 md:leading-1.3 lg:leading-1.3"
                      >{{$agent->specialization}}</span
                    >
                  </h6>
                  <!-- socila -->
                  <ul
                    class="text-sm lg:text-base flex gap-15px justify-center items-center"
                  >
                    <li class="leading-1.8 lg:leading-1.8">
                      <a href="mailto:{{ $agent->email }}"
                        ><i class="fa-regular fa-envelope"></i></a>
                    </li>
                    <li class="leading-1.8 lg:leading-1.8">
                      <a href="tel:{{ $agent->phone }}"><i class="fa-solid fa-phone"></i></a>
                    </li>
                 
                  </ul>
                </div>
              </div>
            </div>
              @empty
                
              @endforelse

           
            </div>
          </div>
        </section>
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
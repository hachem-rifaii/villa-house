<section>
    <div>
      <div class="container pb-70px">
        <!-- section heading -->
        <div class="text-center mb-50px">
          <p
            class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold"
          >
            <span class="leading-1.3">News</span>
          </p>
          <h2
            class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold"
          >
            <span class="leading-1.3">Our team constantly shares the latest news about life, the real estate market and important events. </span>
          </h2>
        </div>

        <div
          class="news-slider-container swiper-container relative -mx-15px"
        >
          <!-- apartment cards  -->
          <div class="swiper news-slider static">
            <div class="swiper-wrapper">
              <!-- card 1 -->
             @forelse ($new_properties as $prop)
             <div
             class="swiper-slide mb-65px xl:mb-50px px-15px cursor-default"
           >
             <div class="group">
               <!-- card thumbs -->
               <div class="relative leading-1">
                 <a
                   href="blog-details.html"
                   class="overflow-hidden"
                 >
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
                     >{{$prop->title}}</a
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
             @empty
               
             @endforelse
             
            </div>
          </div>
        </section>
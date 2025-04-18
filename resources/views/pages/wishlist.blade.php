@extends('layouts.app')

@section('title', 'Villa House - agent Properties')

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
              >Wishlist</span
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
              Wishlist
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- wishlist section -->
    <section>
      <div class="container pt-30 pb-140px md:pb-30">
        <table class="text-sm lg:text-base text-heading-color w-full">
          <tbody>
            <tr>
              <!-- action -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start transition-all duration-300 hover:text-secondary-color cursor-pointer"
              >
                x
              </td>
              <!-- img -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <a href="product-details.html">
                  <img
                    src="./assets/img/product/1.png"
                    alt=""
                    class="w-100px md:w-20 lg:w-100px"
                  >
                </a>
              </td>
              <!-- title -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px block md:table-cell border-b border-border-color-17 text-center md:text-start leading-1"
              >
                <h6
                  class="text-17px md:text-lg lg:text-xl font-bold text-heading-color mb-0"
                >
                  <a
                    href="product-details.html"
                    class="md:leading-1.3 lg:leading-1.3"
                  >
                    3 Rooms Manhattan
                  </a>
                </h6>
              </td>
              <!-- price -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                $85.00
              </td>
              <!-- status -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                In Stock
              </td>

              <!-- action -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <button
                  class="px-30px py-7px bg-primary-color text-white transition-all duration-300 hover:bg-secondary-color hover:text-white leading-1.8"
                >
                  Add to Cart
                </button>
              </td>
            </tr>
            <tr class="bg-section-bg-1 md:bg-transparent">
              <!-- action -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start transition-all duration-300 hover:text-secondary-color cursor-pointer"
              >
                x
              </td>
              <!-- img -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <a href="product-details.html">
                  <img
                    src="./assets/img/product/2.png"
                    alt=""
                    class="w-100px md:w-20 lg:w-100px"
                  >
                </a>
              </td>
              <!-- title -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px block md:table-cell border-b border-border-color-17 text-center md:text-start leading-1"
              >
                <h6
                  class="text-17px md:text-lg lg:text-xl font-bold text-heading-color mb-0"
                >
                  <a
                    href="product-details.html"
                    class="md:leading-1.3 lg:leading-1.3"
                  >
                    Shock Mount Insulator
                  </a>
                </h6>
              </td>
              <!-- price -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                $89.00
              </td>

              <!-- status -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                In Stock
              </td>

              <!-- action -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <button
                  class="px-30px py-7px bg-primary-color text-white transition-all duration-300 hover:bg-secondary-color hover:text-white leading-1.8"
                >
                  Add to Cart
                </button>
              </td>
            </tr>
            <tr>
              <!-- action -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start transition-all duration-300 hover:text-secondary-color cursor-pointer"
              >
                x
              </td>
              <!-- img -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <a href="product-details.html">
                  <img
                    src="./assets/img/product/3.png"
                    alt=""
                    class="w-100px md:w-20 lg:w-100px"
                  >
                </a>
              </td>
              <!-- title -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px block md:table-cell border-b border-border-color-17 text-center md:text-start leading-1"
              >
                <h6
                  class="text-17px md:text-lg lg:text-xl font-bold text-heading-color mb-0"
                >
                  <a
                    href="product-details.html"
                    class="md:leading-1.3 lg:leading-1.3"
                  >
                    Tail Light Lens
                  </a>
                </h6>
              </td>
              <!-- price -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                $149.00
              </td>

              <!-- status -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                In Stock
              </td>

              <!-- action -->
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1.8 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <button
                  class="px-30px py-7px bg-primary-color text-white transition-all duration-300 hover:bg-secondary-color hover:text-white leading-1.8"
                >
                  Add to Cart
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>
@endsection
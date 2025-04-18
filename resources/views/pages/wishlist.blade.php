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
          
          
          </tbody>
        </table>
      </div>
    </section>
  </main>
@endsection
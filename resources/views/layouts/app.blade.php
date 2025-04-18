<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'villahouse')</title>
    
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- @vite('resources/css/app.css') --}}
    @stack('styles') <!-- For page-specific styles -->
    @livewireStyles
</head>
<body>
    <!-- header area start -->
    @include('partials.header')

    <!-- main body start -->
    <main>
        @yield('content')
    </main>

    <!-- footer start -->
    @include('partials.footer')

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ asset('assets/js/stickyHeader.js') }}"></script>
    <script src="{{ asset('assets/js/accordion.js') }}"></script>
    <script src="{{ asset('assets/js/service.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select2.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/drawer.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/silder.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollUp.js') }}"></script>
    <script src="{{ asset('assets/js/smoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script src="{{ asset('assets/js/nice_checkbox.js') }}"></script>
    <script src="{{ asset('assets/js/count.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
      
          const tbody = document.querySelector('tbody');
      
          if (favorites.length === 0) {
            tbody.innerHTML = `<tr><td class="py-4 text-center" colspan="4">No favorite properties found.</td></tr>`;
            return;
          }
      
          favorites.forEach(property => {
            const row = document.createElement('tr');
            row.classList.add('border-b', 'border-gray-200');
      
            row.innerHTML = `
              <td
                class="px-15px py-5 md:px-10px lg:px-25px leading-1 block md:table-cell border-b border-border-color-17 text-center md:text-start"
              >
                <a href="product-details.html">
                  <img
                          src="/storage/${property.images[0]}"
                    alt=""
                    class="w-100px md:w-20 lg:w-100px"
                  >
                </a>
              </td>
              <td class="py-4 px-4 font-medium">${property.title}</td>
              <td class="py-4 px-4">${property.prices[0].price} $</td>
              <td class="py-4 px-4">${property.address}</td>
              <td class="py-4 px-4">
                <button onclick="removeFromWishlist(${property.id})" class="text-red-600 hover:underline">x</button>
              </td>
            `;
      
            tbody.appendChild(row);
          });
        });
      
        function removeFromWishlist(id) {
          let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
          favorites = favorites.filter(item => item.id !== id);
          localStorage.setItem('favorites', JSON.stringify(favorites));
          location.reload(); // Reload to update table
        }
      </script>
      <script>
        function addToWishlist(property) {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    
            const propertyId = property.id;
    
            const exists = favorites.some(item => item.id === propertyId);
    
            if (exists) {
               
                favorites = favorites.filter(item => item.id !== propertyId);
                document.getElementById(`heart-${propertyId}`)?.classList.remove('bg-favorite-red-add');
            } else {
               
                favorites.push(property);
                document.getElementById(`heart-${propertyId}`)?.classList.add('bg-favorite-red-add');
            }
    
            localStorage.setItem('favorites', JSON.stringify(favorites));
        }
    
        // Optional: highlight favorites on page load
        document.addEventListener('DOMContentLoaded', () => {
            const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    
            favorites.forEach(item => {
                const btn = document.getElementById('heart-' + item.id);
                if (btn) {
                    btn.classList.add('bg-favorite-red-add');
                }
            });
        });
    </script>
    @stack('scripts') <!-- For page-specific scripts -->
</body>
</html>
@extends('layouts.app')

@section('title', 'Villa House - ofPlan Properties')

@section('content')

@livewire('home.off-plan')

@endsection

@section('scripts')
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
    <script>
        document.addEventListener("livewire:load", () => {
    Livewire.hook('message.processed', (message, component) => {
        $('.selectize').selectize(); // re-init selectize
    });
});
    </script>
@endsection

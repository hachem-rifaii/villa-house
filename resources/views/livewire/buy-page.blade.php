<div class="p-4 max-w-md mx-auto">
    <h2 class="text-lg font-bold mb-4">Filter by Price</h2>

    <div class="relative">
        <!-- Range Track -->
        <div class="absolute w-full h-2 bg-gray-300 rounded-full top-1/2 transform -translate-y-1/2"></div>

        <!-- Input sliders -->
        <input
            type="range"
            min="{{ $min }}"
            max="{{ $max }}"
            wire:model.live="price_min"
            class="absolute w-full bg-transparent appearance-none pointer-events-none"
            style="z-index: 2;"
        />
        <input
            type="range"
            min="{{ $min }}"
            max="{{ $max }}"
            wire:model.live="price_max"
            class="absolute w-full bg-transparent appearance-none pointer-events-none"
            style="z-index: 1;"
        />
    </div>
    <div class="mt-6">
        <h3 class="text-md font-semibold mb-2">properties:</h3>
        @forelse($properties as $product)
            <div class="border-b py-2">
                {{ $product->title }} 
            </div>
        @empty
            <p class="text-gray-500">No propertiesproperties found in this range.</p>
        @endforelse
    </div>
</div>

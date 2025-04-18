@if ($paginator->hasPages())
    <div class="flex justify-center mt-4">
        <ul class="flex flex-wrap items-center gap-2 justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-12 md:h-12 border-2 border-border-color-11 rounded-full font-bold opacity-50 cursor-not-allowed">
                        <i class="fas fa-angle-left"></i>
                    </span>
                </li>
            @else
                <li>
                    <button wire:click="previousPage" wire:loading.attr="disabled" 
                            class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-12 md:h-12 border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-full font-bold">
                        <i class="fas fa-angle-left"></i>
                    </button>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <span class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-12 md:h-12 border-2 border-border-color-11 rounded-full font-bold">
                            {{ $element }}
                        </span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-white bg-secondary-color w-10 h-10 md:w-12 md:h-12 border-2 border-secondary-color rounded-full font-bold">
                                    {{ $page }}
                                </span>
                            </li>
                        @else
                            <li>
                                <button wire:click="gotoPage({{ $page }})" 
                                        class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-12 md:h-12 border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-full font-bold">
                                    {{ $page }}
                                </button>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <button wire:click="nextPage" wire:loading.attr="disabled" 
                            class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-12 md:h-12 border-2 border-border-color-11 transition-all duration-300 hover:bg-secondary-color hover:text-white hover:border-secondary-color rounded-full font-bold">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </li>
            @else
                <li>
                    <span class="flex items-center justify-center flex-shrink-0 text-sm lg:text-base text-paragraph-color bg-white w-10 h-10 md:w-12 md:h-12 border-2 border-border-color-11 rounded-full font-bold opacity-50 cursor-not-allowed">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </div>

    {{-- Mobile view --}}
    <div class="flex justify-center mt-4 sm:hidden">
        <div class="flex items-center gap-4">
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 text-sm text-gray-500 bg-white border rounded-full cursor-not-allowed">
                    @lang('pagination.previous')
                </span>
            @else
                <button wire:click="previousPage" wire:loading.attr="disabled" 
                        class="px-4 py-2 text-sm text-gray-700 bg-white border rounded-full hover:bg-gray-100">
                    @lang('pagination.previous')
                </button>
            @endif

            @if ($paginator->hasMorePages())
                <button wire:click="nextPage" wire:loading.attr="disabled" 
                        class="px-4 py-2 text-sm text-gray-700 bg-white border rounded-full hover:bg-gray-100">
                    @lang('pagination.next')
                </button>
            @else
                <span class="px-4 py-2 text-sm text-gray-500 bg-white border rounded-full cursor-not-allowed">
                    @lang('pagination.next')
                </span>
            @endif
        </div>
    </div>
@endif
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-black min-h-screen flex items-center justify-center">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8">
            <div class="max-w-3xl text-center mx-auto">
                <h1 class="block font-medium  text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-poppins text-roseOfSharon-700">
                    Welcome to Saka Wastra Ecommerce
                </h1>
            </div>

            <div class="max-w-3xl text-center mx-auto">
                <p class="text-lg text-roseOfSharon-500">
                    Explore our innovative and dynamic shopping platform.
                </p>
            </div>

            <div class="text-center">
                <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-roseOfSharon-600 to-roseOfSharon-800 shadow-lg shadow-transparent hover:shadow-roseOfSharon-500 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:shadow-roseOfSharon-600 py-3 px-6"
                    href="#products-section">
                    Get started
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </div>
        </div>
    </div>


    <div class="container px-auto px-4 py-4 bg-black relative left-1/2 -translate-x-1/2" id="products-section">
        @include('components.products_section', ['products' => $latestProducts])
    </div>

    <div class="container mx-auto px-4 my-4">
        <h2>Special Offers</h2>
        <!-- Special offers content goes here -->
    </div>
@endsection

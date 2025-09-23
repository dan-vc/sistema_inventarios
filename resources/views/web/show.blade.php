@extends('layouts.app')

@section('content')
  <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
        <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
          <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
            alt="" />
          <img class="w-full hidden dark:block"
            src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
        </div>

        <div class="mt-6 sm:mt-8 lg:mt-0">
          <span
            class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">{{ $product->marca }}</span>
          <h1 class="mt-2 text-xl font-semibold text-gray-900 sm:text-3xl dark:text-white">
            {{ $product->name }}
          </h1>

          <div class="flex gap-2 items-center mb-2">
            @if ($product->inventory->stock > 0)
              <span class="text-green-400">En Stock</span>
            @endif
            <span class="text-gray-600 dark:text-gray-400">{{ $product->inventory->stock }} restantes</span>
          </div>
          <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
            <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
              S/. {{ number_format($product->price, 2) }}
            </p>
          </div>



          <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

          <p class="mb-6 text-gray-500 dark:text-gray-400">
            {{ $product->description }}
          </p>
          <p class="mb-3 text-gray-500 dark:text-gray-400">
            Color: {{ $product->color }}
          </p>
          <p class="mb-3 text-gray-500 dark:text-gray-400">
            Peso: {{ $product->weight }}g
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection

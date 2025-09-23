@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-primary-600 to-primary-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-4xl md:text-6xl font-bold mb-6">
            La Mejor Tecnología
            <span class="block text-primary-200">a Tu Alcance</span>
          </h1>
          <p class="text-xl md:text-2xl mb-8 text-primary-100">
            Descubre los últimos productos tecnológicos con los mejores precios y envío gratuito a todo el país.
          </p>
        </div>
        <div class="flex justify-center">
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
            <div class="text-center">
              <div class="text-4xl font-bold mb-2">¡OFERTA!</div>
              <div class="text-6xl font-bold text-yellow-300 mb-2">30%</div>
              <div class="text-xl">de descuento</div>
              <div class="text-sm text-primary-200 mt-2">En productos seleccionados</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="bg-green-100 dark:bg-green-900 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Envío Gratuito</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm">En compras mayores a S/ 150</p>
        </div>

        <div class="text-center">
          <div class="bg-blue-100 dark:bg-blue-900 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Garantía Oficial</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm">Todos nuestros productos</p>
        </div>

        <div class="text-center">
          <div
            class="bg-purple-100 dark:bg-purple-900 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Pago Seguro</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm">Múltiples métodos de pago</p>
        </div>

        <div class="text-center">
          <div
            class="bg-orange-100 dark:bg-orange-900 w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
              </path>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Soporte 24/7</h3>
          <p class="text-gray-600 dark:text-gray-300 text-sm">Atención al cliente</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="productos" class="py-8 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
          Nuestros Productos
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300">
          Encuentra la tecnología que necesitas
        </p>
      </div>

      <!-- Search and Filter Section -->
      {{-- <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
        <div class="flex flex-col md:flex-row gap-4 items-center">
          <div class="flex-1">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" id="searchInput" placeholder="Buscar productos..."
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            </div>
          </div>
          <div class="flex gap-2">
            <select id="brandFilter"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
              <option value="">Todas las Marcas</option>
              <option value="Apple">Apple</option>
              <option value="Samsung">Samsung</option>
              <option value="Sony">Sony</option>
              <option value="LG">LG</option>
            </select>
            <select id="priceFilter"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
              <option value="">Todos los Precios</option>
              <option value="0-1000">S/ 0 - S/ 1,000</option>
              <option value="1000-3000">S/ 1,000 - S/ 3,000</option>
              <option value="3000-5000">S/ 3,000 - S/ 5,000</option>
              <option value="5000+">Más de S/ 5,000</option>
            </select>
          </div>
        </div>
      </div> --}}

      <!-- Products Grid -->
      <div id="productsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Products will be generated by JavaScript -->
        @foreach ($products as $product)
          <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
            <div class="h-56 w-full">
              <a href="#">
                <img class="mx-auto h-full dark:hidden"
                  src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg" alt="">
                <img class="mx-auto hidden h-full dark:block"
                  src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="">
              </a>
            </div>
            <div class="pt-6">
              <div class="mb-4 flex items-center justify-between gap-4">
                <span
                  class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">{{ $product->marca }}</span>

                <span class="mt-2 text-gray-600 dark:text-gray-400 text-sm">{{ $product->inventory->stock }} restantes</span>
              </div>

              <a href="#"
                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $product->name }}</a>

              <p class="mt-2 text-gray-600 dark:text-gray-400 line-clamp-2">{{ $product->description }}</p>

              <p class="mt-4 text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">
                S/. {{ number_format($product->price, 2) }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-2xl font-bold text-primary-400 mb-4">TechStore</h3>
          <p class="text-gray-300 mb-4">Tu tienda de tecnología de confianza. Los mejores productos con garantía oficial
            y envío a todo el país.</p>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Categorías</h4>
          <ul class="space-y-2 text-gray-300">
            <li><a href="#" class="hover:text-primary-400">Smartphones</a></li>
            <li><a href="#" class="hover:text-primary-400">Laptops</a></li>
            <li><a href="#" class="hover:text-primary-400">Accesorios</a></li>
            <li><a href="#" class="hover:text-primary-400">Smart TV</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Ayuda</h4>
          <ul class="space-y-2 text-gray-300">
            <li><a href="#" class="hover:text-primary-400">Centro de Ayuda</a></li>
            <li><a href="#" class="hover:text-primary-400">Envíos</a></li>
            <li><a href="#" class="hover:text-primary-400">Devoluciones</a></li>
            <li><a href="#" class="hover:text-primary-400">Garantías</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4">Contacto</h4>
          <ul class="space-y-2 text-gray-300">
            <li>📞 +51 999 123 456</li>
            <li>📧 info@techstore.pe</li>
            <li>📍 Lima, Perú</li>
            <li>⏰ Lun-Sab: 9AM-8PM</li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
        <p>&copy; 2025 TechStore. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
@endsection

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <style type="text/tailwindcss">
    @theme {
      --font-nunito: 'Nunito', sans-serif;

      --color-primary-50: #eff6ff;
      --color-primary-100: #dbeafe;
      --color-primary-200: #bfdbfe;
      --color-primary-300: #93c5fd;
      --color-primary-400: #60a5fa;
      --color-primary-500: #3b82f6;
      --color-primary-600: #2563eb;
      --color-primary-700: #1d4ed8;
      --color-primary-800: #1e40af;
      --color-primary-900: #1e3a8a;
      --color-primary-950: #172554;
    }
  </style>
</head>

<body class="font-nunito bg-gray-900">
  <header
    class="sticky w-full top-0 z-50 flex justify-between items-center py-[0.5rem] px-[4rem] border-b-1 border-gray-500 bg-white">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('image/logo.png') }}" alt="Descripción" class="w-[5rem] h-[5rem] hover:opacity-60">
    </a>
    <nav class="text-black flex gap-[0.5rem] items-center">
      @guest
        @if (Route::has('login'))
          <a class="block bg-black rounded-xl text-white p-[0.5rem_2rem] cursor-pointer"
            href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif

        @if (Route::has('register'))
          <a class="block bg-black rounded-xl text-white p-[0.5rem_2rem] cursor-pointer"
            href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
      @else
        <div class="relative">
          <button onclick="togglePanel(this)" class="bg-black rounded-xl text-white p-[0.5rem_2rem] cursor-pointer">
            {{ Auth::user()->name }}
          </button>
          <div style="display:none;"
            class="absolute top-[120%] right-0 w-[10rem] text-center bg-white rounded-md p-[1rem] shadow-[inset_-12px_-8px_40px_#46464620]">
            <a class="p-[0.4rem_0.4rem] block w-full bg-primary-500 mb-2 rounded-md text-white"
             href="{{ route('dashboard') }}">Dashboard</a>

            <a class="p-[0.4rem_0.4rem] block w-full bg-red-800 rounded-md text-white" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </div>
      @endguest
    </nav>
  </header>

  <main class="max-w-[120rem] m-[0_auto] min-h-[90dvh]">
    @yield('content')
  </main>
  <script>
    function togglePanel(btn) {
      const panel = btn.nextElementSibling;
      if (panel.style.display === 'block') {
        panel.style.display = 'none';
      } else {
        panel.style.display = 'block';
      }
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>

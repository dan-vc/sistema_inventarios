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
</head>

<body>
    <header class="flex justify-between items-center py-[0.5rem] px-[4rem] border-b-1 border-gray-500">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('image/logo.png') }}" alt="Descripción" class="w-[5rem] h-[5rem] hover:opacity-60">
        </a>
        <nav class="text-black flex gap-[0.5rem] items-center">
            @guest  
            @if (Route::has('login'))
                <a class="block bg-black rounded-xl text-white p-[0.5rem_2rem] cursor-pointer" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="block bg-black rounded-xl text-white p-[0.5rem_2rem] cursor-pointer" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <div class="relative">
                <button onclick="togglePanel(this)" class="bg-black rounded-xl text-white p-[0.5rem_2rem] cursor-pointer">
                    {{ Auth::user()->name }}
                </button>
                <div style="display:none;" class="absolute top-[120%] right-0 w-[10rem] text-center bg-white rounded-md p-[1rem] shadow-[inset_-12px_-8px_40px_#46464620]">
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

    <main class="py-4">
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
</body>
</html>
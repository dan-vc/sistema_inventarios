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

<body class="bg-gray-900">
    <div id="app">
        <!-- Botón Volver -->
        <div class="absolute top-4 left-4">
            <a href="{{ url('/') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 text-white text-sm font-medium rounded-lg shadow hover:bg-gray-700 transition duration-200">
                ⬅ Volver al inicio
            </a>
        </div>

        <main>
            <div class="min-h-screen flex items-center justify-center">
                <div class="w-full max-w-md bg-gray-800 rounded-2xl shadow-2xl p-8 border border-gray-700">
                    <h2 class="text-3xl font-bold text-center text-white mb-6">Iniciar Sesión</h2>

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300">Correo electrónico</label>
                            <input id="email" type="email"
                                class="mt-1 block w-full rounded-lg border border-gray-600 bg-gray-700 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2
                    @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-300">Contraseña</label>
                            <input id="password" type="password"
                                class="mt-1 block w-full rounded-lg border border-gray-600 bg-gray-700 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2
                    @error('password') border-red-500 @enderror"
                                name="password" required>
                            @error('password')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="rounded border-gray-600 bg-gray-700 text-indigo-500 shadow-sm focus:ring-indigo-500" {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2 text-sm text-gray-400">Recordarme</span>
                            </label>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-indigo-400 hover:text-indigo-300">
                                ¿Olvidaste tu contraseña?
                            </a>
                            @endif
                        </div>

                        <!-- Botón Login -->
                        <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg transition duration-200">
                            Ingresar
                        </button>

                        <p class="mt-4 text-center text-sm text-gray-400">
                            ¿No tienes una cuenta?
                            <a href="{{ route('register') }}" class="text-indigo-400 hover:text-indigo-300 font-medium">
                                Regístrate aquí
                            </a>
                        </p>
                    </form>

                    <!-- Divider -->
                    <div class="my-6 flex items-center">
                        <div class="flex-grow border-t border-gray-700"></div>
                        <span class="mx-2 text-gray-500 text-sm">o</span>
                        <div class="flex-grow border-t border-gray-700"></div>
                    </div>

                    <!-- Login con Google -->
                    <a href="{{ url('login/google') }}"
                        class="w-full flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-600 transition duration-200">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48">
                            <path fill="#EA4335" d="M24 9.5c3.94 0 7.03 1.63 8.64 3.01l5.9-5.73C34.91 3.69 29.93 1.5 24 1.5 14.62 1.5 6.63 7.94 3.9 16.47l6.89 5.35C12.2 15.29 17.62 9.5 24 9.5z" />
                            <path fill="#34A853" d="M46.5 24.5c0-1.53-.14-3-.41-4.41H24v8.32h12.62c-.54 2.77-2.19 5.11-4.64 6.69l7.27 5.64C43.66 36.6 46.5 31 46.5 24.5z" />
                            <path fill="#FBBC05" d="M10.79 29.71c-.49-1.44-.76-2.98-.76-4.71s.27-3.27.76-4.71l-6.89-5.35C2.63 17.69 1.5 20.72 1.5 24s1.13 6.31 2.4 9.06l6.89-5.35z" />
                            <path fill="#4285F4" d="M24 46.5c6.52 0 12.01-2.15 16.01-5.86l-7.27-5.64c-2.03 1.37-4.64 2.17-8.74 2.17-6.38 0-11.8-5.79-13.21-11.32l-6.89 5.35C6.63 40.06 14.62 46.5 24 46.5z" />
                        </svg>
                        Iniciar sesión con Google
                    </a>

                    <!-- Login con GitHub -->
                    <a href="{{ url('login/github') }}"
                        class="mt-3 w-full flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg shadow-sm text-sm font-medium text-white bg-gray-900 hover:bg-black transition duration-200">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.29 9.43 7.86 10.97.58.11.79-.25.79-.56v-2.01c-3.2.7-3.87-1.39-3.87-1.39-.53-1.34-1.3-1.7-1.3-1.7-1.06-.73.08-.72.08-.72 1.17.08 1.78 1.2 1.78 1.2 1.04 1.78 2.72 1.26 3.38.97.11-.76.41-1.26.75-1.55-2.55-.29-5.23-1.27-5.23-5.65 0-1.25.45-2.27 1.19-3.07-.12-.29-.52-1.47.11-3.06 0 0 .97-.31 3.19 1.17a11.1 11.1 0 012.91-.39c.99.01 1.99.13 2.91.39 2.22-1.48 3.19-1.17 3.19-1.17.63 1.59.23 2.77.11 3.06.74.8 1.19 1.82 1.19 3.07 0 4.39-2.69 5.36-5.25 5.65.42.37.8 1.1.8 2.22v3.29c0 .31.21.67.8.56A10.99 10.99 0 0023.5 12c0-6.35-5.15-11.5-11.5-11.5z" />
                        </svg>
                        Iniciar sesión con GitHub
                    </a>

                    <!-- Login con Facebook -->
                    <a href="{{ url('login/facebook') }}"
                        class="mt-3 w-full flex items-center justify-center px-4 py-2 border border-gray-600 rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition duration-200">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 
                                1.325v21.351C0 23.407.593 24 1.325 
                                24H12.82v-9.294H9.692V11.29h3.128V8.413c0-3.1 
                                1.894-4.788 4.659-4.788 1.325 0 2.464.099 
                                2.797.143v3.24l-1.919.001c-1.505 
                                0-1.797.715-1.797 1.763v2.313h3.587l-.467 
                                3.416h-3.12V24h6.116C23.407 24 24 
                                23.407 24 22.676V1.325C24 .593 23.407 
                                0 22.675 0z" />
                        </svg>
                        Iniciar sesión con Facebook
                    </a>

                </div>
            </div>
        </main>
    </div>
</body>

</html>
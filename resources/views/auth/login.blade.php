
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrator Login | Provincial Legislative Records System</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700,800" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Montserrat'] antialiased">

    <main class="min-h-screen w-full flex items-center justify-center bg-[#F1F6FC] px-4 py-8">

        {{-- Login Panel --}}
        <div class="w-full max-w-md bg-white border border-gray-200 shadow-sm">

            {{-- Branding --}}
            <div class="px-8 pt-8 pb-6 text-center">

                <img
                    src="https://commons.wikimedia.org/wiki/Special:FilePath/Ph_seal_la_union.png"
                    alt="Provincial Seal of La Union"
                    class="w-20 h-20 object-contain mx-auto mb-4"
                >

                <p class="text-xs font-bold uppercase tracking-widest text-[#B42332]">
                    Provincial Government of La Union
                </p>

                <h1 class="text-xl font-extrabold text-[#102B50] mt-3 leading-snug">
                    Provincial Legislative<br>
                    Records System
                </h1>

                <p class="text-xs text-gray-500 mt-2">
                    Ordinances and Resolutions Management
                </p>

            </div>

            <div class="h-1 bg-[#B42332]"></div>

            {{-- Login Form --}}
            <div class="px-8 py-7">

                <div class="mb-6">
                    <h2 class="text-lg font-extrabold text-[#102B50]">
                        Administrator Login
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Sign in to access the administrative portal.
                    </p>
                </div>

                <x-auth-session-status
                    class="mb-4"
                    :status="session('status')"
                />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-5">
                        <label for="email"
                               class="block text-sm font-bold text-gray-700 mb-2">
                            Email Address
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email address"
                            required
                            autofocus
                            autocomplete="username"
                            class="block w-full border border-gray-300 px-4 py-3 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                        >

                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>

                    {{-- Password --}}
                    <div class="mb-5">
                        <label for="password"
                               class="block text-sm font-bold text-gray-700 mb-2">
                            Password
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password"
                            class="block w-full border border-gray-300 px-4 py-3 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                        >

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>

                    {{-- Remember Me and Forgot Password --}}
                    
{{-- Remember Me and Contact Administrator --}}
<div class="flex items-center justify-between gap-3 mb-6">

    <label for="remember_me" class="inline-flex items-center">
        <input
            id="remember_me"
            type="checkbox"
            name="remember"
                                class="border-gray-300 text-[#102B50] focus:ring-[#2459A6]"
                            >

                            <span class="ml-2 text-xs text-gray-600">
                                Remember me
                            </span>
                        </label>

                        <a href="#"
                        onclick="alert('Please contact your system administrator for password assistance.'); return false;"
                        class="text-xs font-semibold text-[#2459A6] hover:underline">
                            Forgot Password?
                        </a>

                    </div>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full bg-[#102B50] hover:bg-[#2459A6] text-white font-bold text-sm py-3 transition duration-200"
                    >
                        SIGN IN
                    </button>

                </form>

            </div>

            {{-- Footer --}}
            <div class="px-8 py-5 border-t border-gray-200 text-center bg-[#FAFBFD]">

                <p class="text-xs text-gray-400 mt-1">
                    &copy; {{ date('Y') }} Provincial Government of La Union
                </p>

            </div>

        </div>

    </main>

</body>
</html>

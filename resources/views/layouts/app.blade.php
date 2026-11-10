
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @isset($title)
            {{ $title }} |
        @endisset
        {{ config('app.name', 'Provincial Legislative Records System') }}
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">

    <div class="min-h-screen flex flex-col">

        @include('layouts.navigation')

        @isset($header)
            <header class="bg-white border-b border-gray-300">
                <div class="page-container py-5">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="flex-1">
            {{ $slot }}
        </main>

<footer class="bg-white border-t border-gray-200">
    <div class="h-1 bg-[#B42332]"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3">

            <div class="text-center sm:text-left">
                <p class="text-sm font-bold text-[#102B50]">
                    Provincial Legislative Records System
                </p>

                <p class="text-xs text-gray-500 mt-1">
                    Provincial Government of La Union
                </p>
            </div>

            <div class="text-center sm:text-right">
                <p class="text-xs text-gray-500">
                    Official Ordinances and Resolutions Records
                </p>

                <p class="text-xs text-gray-400 mt-1">
                    &copy; {{ date('Y') }} All Rights Reserved.
                </p>
            </div>

        </div>
    </div>
</footer>


    </div>

</body>
</html>

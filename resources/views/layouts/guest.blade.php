
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Provincial Legislative Records System</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700,800" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Montserrat'] antialiased">

    <main class="min-h-screen w-full flex items-center justify-center bg-[#F1F6FC] px-4 py-8">

        <div class="w-full max-w-md bg-white border border-gray-200 shadow-sm">

            {{ $slot }}

        </div>

    </main>

</body>
</html>

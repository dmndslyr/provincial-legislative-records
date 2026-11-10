
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provincial Legislative Records</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F1F6FC] min-h-screen font-['Montserrat']">

    {{-- Header --}}
    <header class="bg-[#102B50] text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5 flex items-center justify-between">

            {{-- System Branding --}}

<a href="{{ route('home') }}"
   class="flex items-center gap-4 min-w-0 no-underline">

    <div class="w-12 h-12 shrink-0 bg-white/10 flex items-center justify-center">
        <img
            src="https://commons.wikimedia.org/wiki/Special:FilePath/Ph_seal_la_union.png"
            alt="Provincial Seal of La Union"
            class="w-10 h-10 object-contain"
        >
    </div>

    <div class="min-w-0">
        <h1 class="text-lg text-white md:text-xl font-extrabold tracking-tight leading-tight text-white">
            Provincial Legislative Records
        </h1>

        <p class="text-xs md:text-sm text-white mt-1">
            Provincial Government of La Union
        </p>
    </div>

</a>


            {{-- Administrator Login Icon --}}


<a
    href="{{ route('login') }}"
    aria-label="Admin Login"
    style="
        display: inline-flex;
        align-items: center;
        gap: 0;
        height: 40px;
        padding: 0 8px;
        color: #FFFFFF !important;
        text-decoration: none !important;
        transition: color 0.2s ease, gap 0.3s ease;
    "
    onmouseenter="
        this.style.color = '#B42332';
        this.style.gap = '8px';
        this.querySelector('.admin-login-text').style.width = '78px';
        this.querySelector('.admin-login-text').style.opacity = '1';
    "
    onmouseleave="
        this.style.color = '#FFFFFF';
        this.style.gap = '0';
        this.querySelector('.admin-login-text').style.width = '0';
        this.querySelector('.admin-login-text').style.opacity = '0';
    "
>
    <svg
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="1.8"
        stroke-linecap="round"
        stroke-linejoin="round"
        style="flex-shrink: 0;"
    >
        <rect x="3" y="11" width="18" height="11" rx="2"/>
        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
    </svg>

    <span
        class="admin-login-text"
        style="
            display: inline-block;
            width: 0;
            opacity: 0;
            overflow: hidden;
            white-space: nowrap;
            color: inherit;
            font-size: 12px;
            font-weight: 700;
            transition: width 0.3s ease, opacity 0.2s ease;
        "
    >Admin Login</span>
</a>



        </div>

        <div class="h-1 bg-[#B42332]"></div>
    </header>

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto px-6 py-8">


{{-- PAGE TITLE --}}
<div class="mb-7">
    <p class="text-xs font-extrabold uppercase tracking-widest text-[#B42332] mb-2">
        Public Information Portal
    </p>

    <h2 class="text-4xl md:text-4xl font-extrabold text-[#102B50]">
        Public Legislative Records of La Union
    </h2>

    <p class="text-sm text-gray-600 mt-3 leading-6">
        Find and view official Provincial Ordinances and Resolutions of La Union.
    </p>
</div>


        {{-- Search Panel --}}
        <section class="bg-white border border-gray-200 p-6 mb-8">

            <h2 class="text-lg font-extrabold text-[#102B50] mb-1">
                Search Legislative Records
            </h2>

            <p class="text-sm text-gray-500 mb-5">
                Find provincial ordinances and resolutions using their number, title, or date passed.
            </p>

            <form action="{{ route('public.search') }}" method="GET"
                  class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_220px_auto_auto] gap-3 items-end">

                <div>
                    <label for="search" class="block text-xs font-bold text-gray-600 mb-2">
                        Search Keyword
                    </label>

                    <input
                        type="text"
                        id="search"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Enter number or title..."
                        class="w-full border border-gray-300 px-4 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                    >
                </div>

                <div>
                    <label for="date_passed" class="block text-xs font-bold text-gray-600 mb-2">
                        Date Passed
                    </label>

                    <input
                        type="date"
                        id="date_passed"
                        name="date_passed"
                        value="{{ request('date_passed') }}"
                        class="w-full border border-gray-300 px-4 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                    >
                </div>

                <button type="submit"
                        class="bg-[#102B50] hover:bg-[#2459A6] text-white px-6 py-2.5 text-sm font-bold transition">
                    Search
                </button>

                <a href="{{ route('public.search') }}"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-2.5 text-sm font-bold text-center transition">
                    Reset
                </a>

            </form>
        </section>

        {{-- Ordinances --}}
        <section class="bg-white border border-gray-200 p-6 mb-8">

            <div class="flex items-center justify-between border-b border-gray-200 pb-4 mb-2">
                <div>
                    <h2 class="text-lg font-extrabold text-[#102B50]">
                        Provincial Ordinances
                    </h2>

                    <p class="text-xs text-gray-500 mt-1">
                        Official provincial legislative ordinances
                    </p>
                </div>

                <span class="text-xs font-bold text-[#2459A6] bg-[#F1F6FC] px-3 py-1.5">
                    {{ $ordinances->total() }} Records
                </span>
            </div>

            @forelse($ordinances as $ordinance)
                <div class="border-b border-gray-100 py-5 last:border-b-0">
                    <h3 class="text-base font-bold text-[#102B50]">
                        <a href="{{ route('public.ordinance.show', $ordinance) }}"
                           class="hover:text-[#2459A6] transition">
                            {{ $ordinance->title }}
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Ordinance No. {{ $ordinance->ordinance_number }}
                    </p>

                    <p class="text-xs text-gray-500 mt-1">
                        Date Passed:
                        {{ $ordinance->date_passed?->format('F d, Y') ?? '—' }}
                    </p>
                </div>
            @empty
                <p class="text-sm text-gray-500 py-6 text-center">
                    No ordinances found.
                </p>
            @endforelse

            <div class="mt-5">
                {{ $ordinances->links() }}
            </div>
        </section>

        {{-- Resolutions --}}
        <section class="bg-white border border-gray-200 p-6">

            <div class="flex items-center justify-between border-b border-gray-200 pb-4 mb-2">
                <div>
                    <h2 class="text-lg font-extrabold text-[#B42332]">
                        Provincial Resolutions
                    </h2>

                    <p class="text-xs text-gray-500 mt-1">
                        Official provincial legislative resolutions
                    </p>
                </div>

                <span class="text-xs font-bold text-[#B42332] bg-[#FFF1F2] px-3 py-1.5">
                    {{ $resolutions->total() }} Records
                </span>
            </div>

            @forelse($resolutions as $resolution)
                <div class="border-b border-gray-100 py-5 last:border-b-0">
                    <h3 class="text-base font-bold text-[#102B50]">
                        <a href="{{ route('public.resolution.show', $resolution) }}"
                           class="hover:text-[#2459A6] transition">
                            {{ $resolution->title }}
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Resolution No. {{ $resolution->resolution_number }}
                    </p>

                    <p class="text-xs text-gray-500 mt-1">
                        Date Passed:
                        {{ $resolution->date_passed?->format('F d, Y') ?? '—' }}
                    </p>
                </div>
            @empty
                <p class="text-sm text-gray-500 py-6 text-center">
                    No resolutions found.
                </p>
            @endforelse

            <div class="mt-5">
                {{ $resolutions->links() }}
            </div>
        </section>

    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t border-gray-200 mt-10">
        <div class="h-1 bg-[#B42332]"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-3">

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

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolution Details | Provincial Legislative Records</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F1F6FC] min-h-screen font-['Montserrat'] flex flex-col">

    {{-- Header --}}
    <header class="bg-[#102B50] text-white relative z-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-5 flex items-center justify-between">


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
        <h1 class="text-lg md:text-xl text-white  font-extrabold tracking-tight leading-tight text-white">
            Provincial Legislative Records
        </h1>

        <p class="text-xs md:text-sm text-white mt-1">
            Provincial Government of La Union
        </p>
    </div>

</a>


            {{-- Admin Login --}}
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
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="20"
                     height="20"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.8"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     style="flex-shrink: 0;">
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
    <main class="flex-1 max-w-5xl w-full mx-auto px-6 py-8">

        {{-- Back Navigation --}}
        <div class="mb-6">
            <a href="{{ route('public.search') }}"
               class="inline-flex items-center gap-2 text-sm font-bold text-[#102B50] hover:text-[#2459A6] transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="18"
                     height="18"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"/>
                </svg>

                Back to Search
            </a>
        </div>

        {{-- Resolution Information --}}
        <section class="bg-white border border-gray-200">

            {{-- Record Header --}}
            <div class="px-7 py-7 border-b border-gray-200">

                <p class="text-xs font-extrabold uppercase tracking-widest text-[#B42332] mb-3">
                    Provincial Resolution
                </p>

                <h2 class="text-xl md:text-2xl font-extrabold text-[#102B50] leading-snug">
                    {{ $resolution->title }}
                </h2>

                <p class="text-sm font-semibold text-gray-500 mt-3">
                    Resolution No. {{ $resolution->resolution_number }}
                </p>

            </div>

            {{-- Record Details --}}
            <div class="px-7 py-7">

                <h3 class="text-base font-extrabold text-[#B42332] mb-7">
                    Resolution Information
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-7">

                    {{-- Date Passed --}}
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wide text-gray-500 mb-2">
                            Date Passed
                        </p>

                        <p class="text-sm font-semibold text-gray-800">
                            {{ $resolution->date_passed?->format('F d, Y') ?? '—' }}
                        </p>
                    </div>

                    {{-- Author --}}
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wide text-gray-500 mb-2">
                            Author / Sponsor
                        </p>

                        <p class="text-sm font-semibold text-gray-800">
                            {{ $resolution->author ?: '—' }}
                        </p>
                    </div>

                </div>

                {{-- Description --}}
                <div class="mt-9">

                    <p class="text-xs font-bold uppercase tracking-wide text-gray-500 mb-3">
                        Description
                    </p>

                    <div class="w-full border border-gray-200 bg-[#F8FAFC] px-5 py-5">

                        <p class="text-sm text-gray-700 leading-7 whitespace-pre-line break-words">{{ $resolution->description ?: 'No description provided.' }}</p>

                    </div>

                </div>

                {{-- Bottom Navigation --}}
                <div class="flex justify-end mt-8 pt-6 border-t border-gray-200">

                    <a href="{{ route('public.search') }}"
                       class="inline-flex items-center gap-2 bg-[#B42332] hover:bg-[#921C29] text-white px-5 py-2.5 text-sm font-bold transition">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="16"
                             height="16"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"/>
                        </svg>

                        Back to Search
                    </a>

                </div>

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

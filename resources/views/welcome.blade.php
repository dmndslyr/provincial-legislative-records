
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#102B50">

    <title>Provincial Legislative Records System | La Union</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#F1F6FC] font-['Montserrat']">

    {{-- HEADER --}}
    <header class="bg-[#102B50] text-white relative z-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-4 flex items-center justify-between gap-4">

            {{-- CLICKABLE PROVINCIAL BRANDING --}}
            <a href="{{ route('home') }}"
               class="flex items-center gap-4 min-w-0 no-underline">

                <img
                    src="https://commons.wikimedia.org/wiki/Special:FilePath/Ph_seal_la_union.png"
                    alt="Provincial Seal of La Union"
                    class="w-12 h-12 object-contain shrink-0"
                >

                <div class="min-w-0">
                    <h1 class="text-base md:text-xl font-extrabold tracking-tight leading-tight text-white">
                        Provincial Legislative Records
                    </h1>

                    <p class="text-xs md:text-sm font-medium text-white mt-1">
                        Provincial Government of La Union
                    </p>
                </div>

            </a>

            {{-- ADMIN LOGIN --}}
            <a
                href="{{ route('login') }}"
                aria-label="Admin Login"
                title="Admin Login"
                style="
                    display:inline-flex;
                    align-items:center;
                    justify-content:center;
                    gap:0;
                    height:40px;
                    padding:0 8px;
                    color:#FFFFFF !important;
                    text-decoration:none !important;
                    flex-shrink:0;
                    transition:color .2s ease, gap .3s ease;
                "
                onmouseenter="
                    this.style.color='#B42332';
                    this.style.gap='8px';
                    this.querySelector('.admin-login-text').style.width='78px';
                    this.querySelector('.admin-login-text').style.opacity='1';
                "
                onmouseleave="
                    this.style.color='#FFFFFF';
                    this.style.gap='0';
                    this.querySelector('.admin-login-text').style.width='0';
                    this.querySelector('.admin-login-text').style.opacity='0';
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
                     style="flex-shrink:0;">
                    <rect x="3" y="11" width="18" height="11" rx="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>

                <span
                    class="admin-login-text"
                    style="
                        display:inline-block;
                        width:0;
                        opacity:0;
                        overflow:hidden;
                        white-space:nowrap;
                        color:inherit;
                        font-size:12px;
                        font-weight:700;
                        transition:width .3s ease, opacity .2s ease;
                    "
                >Admin Login</span>
            </a>

        </div>

        <div class="h-1 bg-[#B42332]"></div>

    </header>


    {{-- MAIN CONTENT --}}
    <main class="flex-1">

        {{-- WELCOME SECTION --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="max-w-4xl mx-auto text-center pt-16 pb-14 md:pt-20 md:pb-16">

                <div class="flex items-center justify-center gap-3 mb-6">

                    <span class="w-8 h-[2px] bg-[#B42332]"></span>

                    <p class="text-xs md:text-sm font-extrabold uppercase tracking-[0.18em] text-[#B42332]">
                        Public Information Portal
                    </p>

                    <span class="w-8 h-[2px] bg-[#B42332]"></span>

                </div>

                <h2 class="text-4xl sm:text-5xl lg:text-[54px] font-extrabold text-[#102B50] leading-[1.15] tracking-tight">
                    Provincial Legislative
                    <span class="block">Records System</span>
                </h2>

                <p class="max-w-2xl mx-auto text-sm md:text-base text-gray-600 leading-8 mt-6">
                    Access and explore official provincial ordinances and resolutions
                    through the Provincial Government of La Union's online
                    legislative records portal.
                </p>

                {{-- SEARCH BUTTON --}}
                <div class="mt-9">

                    <a href="{{ route('public.search') }}"
                       class="inline-flex items-center justify-center gap-3 min-h-[52px] px-9 py-4 bg-[#102B50] hover:bg-[#2459A6] text-white text-sm font-bold transition duration-200">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="19"
                             height="19"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>

                        Search Legislative Records

                    </a>

                    <p class="text-xs text-gray-500 mt-4">
                        Public access · No login required
                    </p>

                </div>

            </div>

        </section>


        {{-- LEGISLATIVE RECORD CATEGORIES --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-10 pb-16">

            <div class="flex items-center gap-4 mb-6">

                <div>
                    <p class="text-xs font-extrabold uppercase tracking-widest text-[#B42332] mb-1">
                        Explore the Records
                    </p>

                    <h3 class="text-xl md:text-2xl font-extrabold text-[#102B50]">
                        Legislative Documents
                    </h3>
                </div>

                <div class="h-px bg-gray-300 flex-1"></div>

            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- ORDINANCES --}}
                <article class="bg-white border border-gray-200 border-t-[3px] border-t-[#102B50] p-7 md:p-8">

                    <div class="flex items-center gap-4 mb-6">

                        <div class="w-12 h-12 shrink-0 flex items-center justify-center bg-[#F1F6FC]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 height="25"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="#102B50"
                                 stroke-width="1.8"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/>
                                <path d="M8 13h8M8 17h8"/>
                            </svg>

                        </div>

                        <div>
                            <p class="text-[11px] font-extrabold uppercase tracking-wider text-[#2459A6]">
                                Legislative Records
                            </p>

                            <h4 class="text-lg md:text-xl font-extrabold text-[#102B50] mt-1">
                                Provincial Ordinances
                            </h4>
                        </div>

                    </div>

                    <p class="text-sm text-gray-600 leading-7">
                        Browse and search enacted provincial ordinances
                        and access their official record details.
                    </p>

                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <a href="{{ route('public.search') }}"
                           class="inline-flex items-center gap-2 text-sm font-bold text-[#2459A6] hover:underline">

                            Explore Ordinances

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="16"
                                 height="16"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>

                        </a>

                    </div>

                </article>


                {{-- RESOLUTIONS --}}
                <article class="bg-white border border-gray-200 border-t-[3px] border-t-[#B42332] p-7 md:p-8">

                    <div class="flex items-center gap-4 mb-6">

                        <div class="w-12 h-12 shrink-0 flex items-center justify-center bg-[#FFF1F2]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="25"
                                 height="25"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="#B42332"
                                 stroke-width="1.8"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/>
                                <path d="M8 13h8M8 17h8"/>
                            </svg>

                        </div>

                        <div>
                            <p class="text-[11px] font-extrabold uppercase tracking-wider text-[#B42332]">
                                Legislative Records
                            </p>

                            <h4 class="text-lg md:text-xl font-extrabold text-[#102B50] mt-1">
                                Provincial Resolutions
                            </h4>
                        </div>

                    </div>

                    <p class="text-sm text-gray-600 leading-7">
                        Browse and search provincial resolutions
                        and access their official record details.
                    </p>

                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <a href="{{ route('public.search') }}"
                           class="inline-flex items-center gap-2 text-sm font-bold text-[#B42332] hover:underline">

                            Explore Resolutions

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="16"
                                 height="16"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>

                        </a>

                    </div>

                </article>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <footer class="bg-white border-t border-gray-200 mt-auto">

        <div class="h-1 bg-[#B42332]"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-5">

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

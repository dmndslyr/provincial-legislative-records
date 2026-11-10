
<x-app-layout>

    <div class="min-h-screen bg-gray-100">

        {{-- ADMINISTRATIVE HEADER --}}
        <section class="bg-white border-b border-gray-300">
            <div class="max-w-7xl mx-auto px-6 py-6">

                <div class="flex flex-col md:flex-row md:items-center gap-5">

                    {{-- Provincial Seal --}}
                    <div class="flex-shrink-0">
                        <img
                            src="https://commons.wikimedia.org/wiki/Special:FilePath/Ph_seal_la_union.png"
                            alt="Provincial Seal of La Union"
                            class="w-16 h-16 object-contain"
                        >
                    </div>

                    {{-- Government Identification --}}
                    <div class="flex-1">
                        <p class="text-xs font-bold uppercase tracking-widest text-gray-500">
                            Republic of the Philippines
                        </p>

                        <h1 class="text-2xl md:text-3xl font-black text-[#102B50] mt-1">
                            PROVINCIAL LEGISLATIVE
                            RECORDS SYSTEM
                        </h1>

                        <p class="text-sm font-semibold text-gray-600 mt-1">
                            Provincial Government of La Union
                        </p>

                        <div class="flex items-center gap-2 mt-3">
                            <span class="w-10 h-1 bg-[#2459A6]"></span>
                            <span class="w-5 h-1 bg-[#B42332]"></span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- MAIN DASHBOARD --}}
        <main class="max-w-7xl mx-auto px-6 py-8">

            {{-- WELCOME --}}
            <section class="mb-8">
                <p class="text-xs font-extrabold uppercase tracking-widest text-[#B42332]">
                    Administrative Dashboard
                </p>

                <h2 class="text-2xl font-black text-[#102B50] mt-2">
                    Welcome, Administrator!
                </h2>

                <p class="text-sm font-medium text-gray-600 mt-2 max-w-2xl">
                    Manage provincial ordinances and resolutions.
                    Maintain legislative records and provide access
                    to public legislative information.
                </p>
            </section>


            {{-- RECORD STATISTICS --}}
            <section class="mb-10">

                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-base font-extrabold text-[#102B50]">
                        Legislative Records Overview
                    </h3>

                    <span class="text-xs font-semibold text-gray-500">
                        Current Records
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    {{-- ORDINANCES --}}
                    <div class="bg-white border border-gray-300 border-l-4 border-l-[#2459A6] p-6">

                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wide text-gray-500">
                                    Total Ordinances
                                </p>

                                <p class="text-4xl font-black text-[#102B50] mt-3">
                                    {{ $ordinanceCount }}
                                </p>

                                <p class="text-xs font-semibold text-gray-500 mt-2">
                                    Registered provincial ordinances
                                </p>
                            </div>

                            <div class="text-[#2459A6]">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-10 h-10"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.5">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M9 12h6m-6 4h6M5 6h14M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>


                    {{-- RESOLUTIONS --}}
                    <div class="bg-white border border-gray-300 border-l-4 border-l-[#B42332] p-6">

                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wide text-gray-500">
                                    Total Resolutions
                                </p>

                                <p class="text-4xl font-black text-[#102B50] mt-3">
                                    {{ $resolutionCount }}
                                </p>

                                <p class="text-xs font-semibold text-gray-500 mt-2">
                                    Registered provincial resolutions
                                </p>
                            </div>

                            <div class="text-[#B42332]">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-10 h-10"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.5">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M9 12h6m-6 4h6M5 6h14M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


            {{-- RECORD MANAGEMENT --}}
            <section class="mb-10">

                <div class="mb-5 border-b border-gray-300 pb-3">
                    <h3 class="text-lg font-black text-[#102B50]">
                        Legislative Records Management
                    </h3>

                    <p class="text-sm font-medium text-gray-500 mt-1">
                        Select a record category to manage its information.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    {{-- ORDINANCE MANAGEMENT --}}
                    <div class="bg-white border border-gray-300">
                        <div class="p-6">

                            <div class="flex items-center gap-4 mb-5">
                                <div class="w-12 h-12 flex items-center justify-center bg-[#EAF1FA] text-[#2459A6]">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-7 h-7"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor"
                                         stroke-width="1.6">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M9 12h6m-6 4h6M5 6h14M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="text-base font-extrabold text-[#102B50]">
                                        Ordinance Management
                                    </h4>

                                    <p class="text-xs font-semibold text-gray-500 mt-1">
                                        Provincial Ordinances
                                    </p>
                                </div>
                            </div>

                            <p class="text-sm font-medium text-gray-600 leading-6 mb-6">
                                Create, view, update, delete, and search
                                provincial ordinance records.
                            </p>

                            <a href="{{ route('admin.ordinances.index') }}"
                            class="dashboard-action-link dashboard-action-blue w-full py-3 px-5 text-sm">

                                Manage Ordinances
                                <span aria-hidden="true">&rarr;</span>

                            </a>

                        </div>
                    </div>


                    {{-- RESOLUTION MANAGEMENT --}}
                    <div class="bg-white border border-gray-300">
                        <div class="p-6">

                            <div class="flex items-center gap-4 mb-5">
                                <div class="w-12 h-12 flex items-center justify-center bg-[#FCEAEC] text-[#B42332]">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-7 h-7"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor"
                                         stroke-width="1.6">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M9 12h6m-6 4h6M5 6h14M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="text-base font-extrabold text-[#102B50]">
                                        Resolution Management
                                    </h4>

                                    <p class="text-xs font-semibold text-gray-500 mt-1">
                                        Provincial Resolutions
                                    </p>
                                </div>
                            </div>

                            <p class="text-sm font-medium text-gray-600 leading-6 mb-6">
                                Create, view, update, delete, and search
                                provincial resolution records.
                            </p>

                            <a href="{{ route('admin.resolutions.index') }}"
                            class="dashboard-action-link dashboard-action-red w-full py-3 px-5 text-sm">

                                Manage Resolutions
                                <span aria-hidden="true">&rarr;</span>

                            </a>

                        </div>
                    </div>

                </div>
            </section>


            {{-- PUBLIC SEARCH PORTAL --}}
            <section class="bg-white border border-gray-300">
                <div class="p-6">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                        <div class="flex items-start gap-4">

                            <div class="w-11 h-11 flex-shrink-0 flex items-center justify-center bg-[#EAF1FA] text-[#2459A6]">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="w-6 h-6"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="1.6">

                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M12 4.5c-4.5 0-8.2 3.1-9.5 7.5 1.3 4.4 5 7.5 9.5 7.5s8.2-3.1 9.5-7.5C20.2 7.6 16.5 4.5 12 4.5z"/>

                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </div>

                            <div>
                                <h3 class="text-base font-extrabold text-[#102B50]">
                                    Public Search Portal
                                </h3>

                                <p class="text-sm font-medium text-gray-600 mt-2 max-w-2xl">
                                    Access the public-facing portal where visitors
                                    can search and read provincial ordinances
                                    and resolutions.
                                </p>
                            </div>
                        </div>

                            <a href="{{ route('public.search') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="dashboard-action-link dashboard-action-blue px-6 py-3 text-sm whitespace-nowrap">

                                Open Public Portal
                                <span aria-hidden="true">&nearr;</span>

                            </a>

                    </div>
                </div>
            </section>


        </main>

    </div>

</x-app-layout>

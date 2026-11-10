
<nav x-data="{ open: false, userMenu: false }"
     class="relative bg-[#102B50] border-b-4 border-[#B42332] z-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex items-center justify-between min-h-[72px]">

            {{-- SYSTEM BRANDING --}}
            <a href="{{ route('dashboard') }}"
               class="flex items-center gap-3 shrink-0 no-underline">

                <img
                    src="https://commons.wikimedia.org/wiki/Special:FilePath/Ph_seal_la_union.png"
                    alt="Provincial Seal of La Union"
                    class="w-10 h-10 object-contain"
                >

                <div class="leading-tight">
                    <p class="text-sm font-extrabold text-white">
                        Provincial Legislative Records System
                    </p>

                    <p class="text-[10px] font-semibold text-gray-300 mt-1">
                        Provincial Government of La Union
                    </p>
                </div>

            </a>


            {{-- DESKTOP NAVIGATION --}}
            <div class="hidden md:flex items-center gap-5">

                <a href="{{ route('dashboard') }}"
                   class="py-2 text-sm font-bold no-underline transition-colors
                   {{ request()->routeIs('dashboard')
                        ? 'text-white border-b-2 border-[#B42332]'
                        : 'text-gray-300 hover:text-white' }}">
                    Dashboard
                </a>

                <a href="{{ route('admin.ordinances.index') }}"
                   class="py-2 text-sm font-bold no-underline transition-colors
                   {{ request()->routeIs('admin.ordinances.*')
                        ? 'text-white border-b-2 border-[#B42332]'
                        : 'text-gray-300 hover:text-white' }}">
                    Ordinances
                </a>

                <a href="{{ route('admin.resolutions.index') }}"
                   class="py-2 text-sm font-bold no-underline transition-colors
                   {{ request()->routeIs('admin.resolutions.*')
                        ? 'text-white border-b-2 border-[#B42332]'
                        : 'text-gray-300 hover:text-white' }}">
                    Resolutions
                </a>


                {{-- USER DROPDOWN --}}
                <div class="relative ml-3 pl-5 border-l border-[#456080]">

                    <button
                        type="button"
                        @click="userMenu = !userMenu"
                        @click.outside="userMenu = false"
                        :aria-expanded="userMenu"
                        class="flex items-center gap-2 py-2 text-white hover:text-gray-200 transition-colors"
                    >

                        <span class="text-sm font-bold">
                            {{ Auth::user()->name }}
                        </span>

                        <svg
                            class="w-4 h-4 transition-transform"
                            :class="{ 'rotate-180': userMenu }"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>

                    </button>


                    {{-- DROPDOWN --}}
                    <div
                        x-cloak
                        x-show="userMenu"
                        x-transition.origin.top.right
                        class="absolute right-0 top-full mt-2 w-56 bg-white border border-gray-200 shadow-lg"
                    >

                        <div class="px-4 py-3 border-b border-gray-200">

                            <p class="text-sm font-bold text-[#102B50]">
                                {{ Auth::user()->name }}
                            </p>

                            <p class="text-xs text-gray-500 mt-1 break-all">
                                {{ Auth::user()->email }}
                            </p>

                        </div>

                        <a href="{{ route('profile.edit') }}"
                           class="block px-4 py-3 text-sm font-semibold text-gray-700 hover:bg-[#EAF1FA] hover:text-[#102B50] no-underline">
                            My Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button
                                type="submit"
                                class="w-full text-left px-4 py-3 text-sm font-bold text-[#B42332] hover:bg-[#FCEAEC] transition-colors"
                            >
                                Log Out
                            </button>
                        </form>

                    </div>

                </div>

            </div>


            {{-- MOBILE MENU BUTTON --}}
            <button
                type="button"
                @click="open = !open"
                class="md:hidden p-2 text-white hover:bg-[#1B3D69]"
                aria-label="Toggle navigation"
            >

                <svg x-show="!open"
                     xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

                <svg x-cloak
                     x-show="open"
                     xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>

            </button>

        </div>

    </div>


    {{-- MOBILE NAVIGATION --}}
    <div x-cloak
         x-show="open"
         x-transition
         class="md:hidden bg-[#0A1D38] border-t border-[#456080]">

        <div class="px-6 py-3 space-y-1">

            <a href="{{ route('dashboard') }}"
               class="block px-3 py-3 text-sm font-bold no-underline
               {{ request()->routeIs('dashboard')
                    ? 'text-white bg-[#2459A6]'
                    : 'text-gray-300 hover:text-white hover:bg-[#1B3D69]' }}">
                Dashboard
            </a>

            <a href="{{ route('admin.ordinances.index') }}"
               class="block px-3 py-3 text-sm font-bold no-underline
               {{ request()->routeIs('admin.ordinances.*')
                    ? 'text-white bg-[#2459A6]'
                    : 'text-gray-300 hover:text-white hover:bg-[#1B3D69]' }}">
                Ordinances
            </a>

            <a href="{{ route('admin.resolutions.index') }}"
               class="block px-3 py-3 text-sm font-bold no-underline
               {{ request()->routeIs('admin.resolutions.*')
                    ? 'text-white bg-[#2459A6]'
                    : 'text-gray-300 hover:text-white hover:bg-[#1B3D69]' }}">
                Resolutions
            </a>

        </div>

        <div class="px-6 py-4 border-t border-[#456080]">

            <p class="text-sm font-bold text-white">
                {{ Auth::user()->name }}
            </p>

            <p class="text-xs text-gray-300 mt-1">
                {{ Auth::user()->email }}
            </p>

            <div class="flex items-center gap-5 mt-3">

                <a href="{{ route('profile.edit') }}"
                   class="text-sm font-semibold text-gray-300 hover:text-white no-underline">
                    My Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                            class="text-sm font-bold text-white hover:text-gray-300">
                        Log Out
                    </button>
                </form>

            </div>

        </div>

    </div>

</nav>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>

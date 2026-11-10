
<x-app-layout>
    <x-slot name="header">
        <div class="w-full text-left">
            <h2 class="text-xl font-extrabold text-[#102B50]">
                Ordinance Details
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                View the complete information of this provincial ordinance.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">

            <div class="bg-white border border-gray-200">

                {{-- Record Header --}}
                <div class="px-7 py-6 border-b border-gray-200">
                    <p class="text-xs font-extrabold uppercase tracking-wider text-[#2459A6] mb-3">
                        Provincial Ordinance
                    </p>

                    <h3 class="text-2xl font-extrabold text-[#102B50] leading-tight">
                        {{ $ordinance->title }}
                    </h3>

                    <p class="text-sm text-gray-500 mt-3">
                        Ordinance No. {{ $ordinance->ordinance_number }}
                    </p>
                </div>

                {{-- Record Information --}}
                <div class="px-7 py-7">

                    <h4 class="text-base font-extrabold text-[#102B50] mb-7">
                        Ordinance Information
                    </h4>

                    {{-- Date and Author --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-7">

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-wide text-gray-500 mb-3">
                                Date Passed
                            </p>

                            <p class="text-base font-semibold text-gray-800">
                                {{ $ordinance->date_passed?->format('F d, Y') ?? '—' }}
                            </p>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-wide text-gray-500 mb-3">
                                Author / Sponsor
                            </p>

                            <p class="text-base font-semibold text-gray-800">
                                {{ $ordinance->author }}
                            </p>
                        </div>

                    </div>

                    {{-- Description --}}
                    <div class="mt-10">

                        <p class="text-xs font-bold uppercase tracking-wide text-gray-500 mb-3">
                            Description
                        </p>

                        <div class="w-full min-h-[120px] border border-gray-200 bg-gray-50 px-5 py-5">
                            <p class="text-sm text-gray-700 leading-7 whitespace-pre-line break-words">{{ $ordinance->description ?: 'No description provided.' }}</p>
                        </div>

                    </div>

                    {{-- Actions --}}
                    <div class="flex justify-end items-center gap-3 mt-8 pt-6 border-t border-gray-200">

                        <a href="{{ route('admin.ordinances.index') }}"
                           class="inline-flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 text-sm font-bold transition">
                            Back to List
                        </a>

                        <a href="{{ route('admin.ordinances.edit', $ordinance) }}"
                           class="inline-flex items-center justify-center bg-[#102B50] hover:bg-[#2459A6] text-white px-5 py-2.5 text-sm font-bold transition">
                            Edit Ordinance
                        </a>

                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>

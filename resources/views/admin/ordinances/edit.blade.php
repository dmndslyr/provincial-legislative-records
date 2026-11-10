
<x-app-layout>
    <x-slot name="header">
        <div class="w-full text-left">
            <h2 class="text-xl font-extrabold text-[#102B50]">
                Edit Ordinance
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Update the details of the provincial ordinance.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">

            <div class="bg-white border border-gray-200">

                {{-- Form Header --}}
                <div class="px-6 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-extrabold text-[#102B50]">
                        Ordinance Information
                    </h3>
                    <p class="text-sm text-gray-500 mt-1">
                        Modify the information below and save your changes.
                    </p>
                </div>

                <div class="p-6">

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="mb-6 border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            <p class="font-bold mb-2">
                                Please correct the following errors:
                            </p>

                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.ordinances.update', $ordinance) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="space-y-5">

                            {{-- Ordinance Number --}}
                            <div>
                                <label for="ordinance_number"
                                       class="block text-sm font-bold text-gray-700 mb-2">
                                    Ordinance Number <span class="text-[#B42332]">*</span>
                                </label>

                                <input type="text"
                                       id="ordinance_number"
                                       name="ordinance_number"
                                       value="{{ old('ordinance_number', $ordinance->ordinance_number) }}"
                                       placeholder="Enter ordinance number"
                                       class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                                       required>
                            </div>

                            {{-- Title --}}
                            <div>
                                <label for="title"
                                       class="block text-sm font-bold text-gray-700 mb-2">
                                    Title <span class="text-[#B42332]">*</span>
                                </label>

                                <input type="text"
                                       id="title"
                                       name="title"
                                       value="{{ old('title', $ordinance->title) }}"
                                       placeholder="Enter ordinance title"
                                       class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                                       required>
                            </div>

                            {{-- Date Passed and Author --}}
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                <div>
                                    <label for="date_passed"
                                           class="block text-sm font-bold text-gray-700 mb-2">
                                        Date Passed <span class="text-[#B42332]">*</span>
                                    </label>

                                    <input type="date"
                                           id="date_passed"
                                           name="date_passed"
                                           value="{{ old('date_passed', $ordinance->date_passed?->format('Y-m-d')) }}"
                                           class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                                           required>
                                </div>

                                <div>
                                    <label for="author"
                                           class="block text-sm font-bold text-gray-700 mb-2">
                                        Author / Sponsor <span class="text-[#B42332]">*</span>
                                    </label>

                                    <input type="text"
                                           id="author"
                                           name="author"
                                           value="{{ old('author', $ordinance->author) }}"
                                           placeholder="Enter author or sponsor"
                                           class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]"
                                           required>
                                </div>

                            </div>

                            {{-- Description --}}
                            <div>
                                <label for="description"
                                       class="block text-sm font-bold text-gray-700 mb-2">
                                    Description
                                </label>

                                <textarea id="description"
                                          name="description"
                                          rows="5"
                                          placeholder="Enter ordinance description (optional)"
                                          class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]">{{ old('description', $ordinance->description) }}</textarea>
                            </div>

                        </div>

                        {{-- Form Actions --}}
                        <div class="flex items-center justify-end gap-3 mt-8 pt-5 border-t border-gray-200">

                            <a href="{{ route('admin.ordinances.index') }}"
                               class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 text-sm font-bold transition">
                                Cancel
                            </a>

                            <button type="submit"
                                    class="bg-[#102B50] hover:bg-[#2459A6] text-white px-5 py-2.5 text-sm font-bold transition">
                                Update Ordinance
                            </button>

                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <div class="w-full text-left">
            <h2 class="text-xl font-extrabold text-[#B42332]">
                Edit Resolution
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Update the details of the provincial resolution.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="bg-white border border-gray-200">

                <div class="px-6 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-extrabold text-[#B42332]">
                        Resolution Information
                    </h3>
                    <p class="text-sm text-gray-500 mt-1">
                        Modify the information below and save your changes.
                    </p>
                </div>

                <div class="p-6">

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

                    <form action="{{ route('admin.resolutions.update', $resolution) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="space-y-5">

                            <div>
                                <label for="resolution_number"
                                       class="block text-sm font-bold text-gray-700 mb-2">
                                    Resolution Number <span class="text-[#B42332]">*</span>
                                </label>

                                <input type="text"
                                       id="resolution_number"
                                       name="resolution_number"
                                       value="{{ old('resolution_number', $resolution->resolution_number) }}"
                                       placeholder="Enter resolution number"
                                       class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#B42332] focus:ring-[#B42332]"
                                       required>
                            </div>

                            <div>
                                <label for="title"
                                       class="block text-sm font-bold text-gray-700 mb-2">
                                    Title <span class="text-[#B42332]">*</span>
                                </label>

                                <input type="text"
                                       id="title"
                                       name="title"
                                       value="{{ old('title', $resolution->title) }}"
                                       placeholder="Enter resolution title"
                                       class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#B42332] focus:ring-[#B42332]"
                                       required>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                <div>
                                    <label for="date_passed"
                                           class="block text-sm font-bold text-gray-700 mb-2">
                                        Date Passed <span class="text-[#B42332]">*</span>
                                    </label>

                                    <input type="date"
                                           id="date_passed"
                                           name="date_passed"
                                           value="{{ old('date_passed', $resolution->date_passed?->format('Y-m-d')) }}"
                                           class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#B42332] focus:ring-[#B42332]"
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
                                           value="{{ old('author', $resolution->author) }}"
                                           placeholder="Enter author or sponsor"
                                           class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#B42332] focus:ring-[#B42332]"
                                           required>
                                </div>

                            </div>

                            <div>
                                <label for="description"
                                       class="block text-sm font-bold text-gray-700 mb-2">
                                    Description
                                </label>

                                <textarea id="description"
                                          name="description"
                                          rows="5"
                                          placeholder="Enter resolution description (optional)"
                                          class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#B42332] focus:ring-[#B42332]">{{ old('description', $resolution->description) }}</textarea>
                            </div>

                        </div>

                        <div class="flex items-center justify-end gap-3 mt-8 pt-5 border-t border-gray-200">

                            <a href="{{ route('admin.resolutions.index') }}"
                               class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 text-sm font-bold transition">
                                Cancel
                            </a>

                            <button type="submit"
                                    class="bg-[#B42332] hover:bg-[#921C29] text-white px-5 py-2.5 text-sm font-bold transition">
                                Update Resolution
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

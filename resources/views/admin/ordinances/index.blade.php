
<x-app-layout>
    <x-slot name="header">
        <div style="width: 100%; text-align: left;">
            <h2 class="text-xl font-extrabold text-[#102B50]">
                Ordinance Management
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Manage provincial ordinance records.
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="bg-white border border-gray-200 p-6">

                @if(session('success'))
                    <div class="mb-5 border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Section Heading --}}
                <div class="flex items-center justify-between gap-4 mb-6"
                     style="text-align: left;">

                    <div style="text-align: left;">
                        <h3 class="text-lg font-extrabold text-[#102B50]"
                            style="text-align: left;">
                            Provincial Ordinances
                        </h3>

                        <p class="text-sm text-gray-500 mt-1"
                           style="text-align: left;">
                            View, search, and manage all recorded ordinances.
                        </p>
                    </div>

                    <a href="{{ route('admin.ordinances.create') }}"
                       class="dashboard-action-link dashboard-action-blue px-5 py-2.5 text-sm whitespace-nowrap shrink-0">
                        + Add Ordinance
                    </a>
                </div>

                {{-- Search and Filters --}}
                <form method="GET"
                      action="{{ route('admin.ordinances.index') }}"
                      class="mb-6">

                    <div class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_auto] gap-4 items-end">

                        <div class="min-w-0">
                            <label for="search"
                                   class="block text-sm font-bold text-gray-700 mb-2">
                                Search Records
                            </label>

                            <input type="text"
                                   id="search"
                                   name="search"
                                   value="{{ request('search') }}"
                                   placeholder="Enter ordinance number or title..."
                                   class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]">
                        </div>

                        <div class="min-w-0">
                            <label for="date_passed"
                                   class="block text-sm font-bold text-gray-700 mb-2">
                                Date Passed
                            </label>

                            <input type="date"
                                   id="date_passed"
                                   name="date_passed"
                                   value="{{ request('date_passed') }}"
                                   class="block w-full border border-gray-300 px-3 py-2.5 text-sm focus:border-[#2459A6] focus:ring-[#2459A6]">
                        </div>

                        <div class="flex items-center gap-2">
                            <button type="submit"
                                    class="bg-[#102B50] hover:bg-[#2459A6] text-white px-5 py-2.5 text-sm font-bold transition">
                                Search
                            </button>

                            <a href="{{ route('admin.ordinances.index') }}"
                               class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-2.5 text-sm font-bold transition">
                                Reset
                            </a>
                        </div>

                    </div>
                </form>

                {{-- Records Table --}}
                <div class="border border-gray-200">

                    <div class="flex items-center justify-between px-5 py-4 border-b border-gray-200">
                        <h4 class="text-sm font-extrabold text-[#102B50]">
                            Ordinance Records
                        </h4>

                        <span class="text-xs text-gray-500 whitespace-nowrap">
                            {{ $ordinances->total() }} record(s) found
                        </span>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="bg-[#F1F6FC] text-[#102B50]">
                                <tr>
                                    <th class="px-5 py-4 font-extrabold whitespace-nowrap">
                                        Ordinance No.
                                    </th>
                                    <th class="px-5 py-4 font-extrabold min-w-[250px]">
                                        Title
                                    </th>
                                    <th class="px-5 py-4 font-extrabold whitespace-nowrap">
                                        Date Passed
                                    </th>
                                    <th class="px-5 py-4 font-extrabold min-w-[150px]">
                                        Author
                                    </th>
                                    <th class="px-5 py-4 font-extrabold text-center whitespace-nowrap">
                                        Actions
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @forelse($ordinances as $ordinance)
                                    <tr class="hover:bg-[#F8FAFD] transition-colors">

                                        <td class="px-5 py-4 font-bold text-[#102B50] whitespace-nowrap">
                                            {{ $ordinance->ordinance_number }}
                                        </td>

                                        <td class="px-5 py-4 text-gray-700">
                                            {{ $ordinance->title }}
                                        </td>

                                        <td class="px-5 py-4 text-gray-600 whitespace-nowrap">
                                            {{ $ordinance->date_passed?->format('M d, Y') ?? '—' }}
                                        </td>

                                        <td class="px-5 py-4 text-gray-600">
                                            {{ $ordinance->author }}
                                        </td>

                                        <td class="px-5 py-4">
                                            <div class="flex items-center justify-center gap-4 whitespace-nowrap">

                                                <a href="{{ route('admin.ordinances.show', $ordinance) }}"
                                                   class="font-semibold text-[#2459A6] hover:underline">
                                                    View
                                                </a>

                                                <a href="{{ route('admin.ordinances.edit', $ordinance) }}"
                                                   class="font-semibold text-[#102B50] hover:underline">
                                                    Edit
                                                </a>

                                                <form action="{{ route('admin.ordinances.destroy', $ordinance) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Are you sure you want to delete this ordinance?')">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="font-semibold text-[#B42332] hover:underline">
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-5 py-12 text-center text-gray-500">
                                            No ordinance records found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($ordinances->hasPages())
                        <div class="px-5 py-4 border-t border-gray-200">
                            {{ $ordinances->withQueryString()->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

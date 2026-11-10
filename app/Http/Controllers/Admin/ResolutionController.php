<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resolution;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResolutionController extends Controller
{
    public function index(Request $request)
    {
        $query = Resolution::query();

        // Search by resolution number or title
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('resolution_number', 'like', "%{$search}%")
                  ->orWhere('title', 'like', "%{$search}%");
            });
        }

        // Filter by date passed
        if ($request->filled('date_passed')) {
            $query->whereDate('date_passed', $request->date_passed);
        }

        $resolutions = $query
            ->latest('date_passed')
            ->paginate(10)
            ->withQueryString();

        return view('admin.resolutions.index', compact('resolutions'));
    }

    public function create()
    {
        return view('admin.resolutions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'resolution_number' => [
                'required',
                'string',
                'max:100',
                'unique:resolutions,resolution_number',
            ],
            'title' => ['required', 'string', 'max:255'],
            'date_passed' => ['required', 'date'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        Resolution::create($validated);

        return redirect()
            ->route('admin.resolutions.index')
            ->with('success', 'Resolution successfully added.');
    }

    public function show(Resolution $resolution)
    {
        return view('admin.resolutions.show', compact('resolution'));
    }

    public function edit(Resolution $resolution)
    {
        return view('admin.resolutions.edit', compact('resolution'));
    }

    public function update(Request $request, Resolution $resolution)
    {
        $validated = $request->validate([
            'resolution_number' => [
                'required',
                'string',
                'max:100',
                Rule::unique('resolutions', 'resolution_number')
                    ->ignore($resolution->id),
            ],
            'title' => ['required', 'string', 'max:255'],
            'date_passed' => ['required', 'date'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        $resolution->update($validated);

        return redirect()
            ->route('admin.resolutions.index')
            ->with('success', 'Resolution successfully updated.');
    }

    public function destroy(Resolution $resolution)
    {
        $resolution->delete();

        return redirect()
            ->route('admin.resolutions.index')
            ->with('success', 'Resolution successfully deleted.');
    }
}

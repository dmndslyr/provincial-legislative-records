<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ordinance;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrdinanceController extends Controller
{
    public function index(Request $request)
    {
        $query = Ordinance::query();

        // Search by ordinance number or title
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('ordinance_number', 'like', "%{$search}%")
                  ->orWhere('title', 'like', "%{$search}%");
            });
        }

        // Filter by date passed
        if ($request->filled('date_passed')) {
            $query->whereDate('date_passed', $request->date_passed);
        }

        $ordinances = $query
            ->latest('date_passed')
            ->paginate(10)
            ->withQueryString();

        return view('admin.ordinances.index', compact('ordinances'));
    }

    public function create()
    {
        return view('admin.ordinances.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ordinance_number' => [
                'required',
                'string',
                'max:100',
                'unique:ordinances,ordinance_number',
            ],
            'title' => ['required', 'string', 'max:255'],
            'date_passed' => ['required', 'date'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        Ordinance::create($validated);

        return redirect()
            ->route('admin.ordinances.index')
            ->with('success', 'Ordinance successfully added.');
    }

    public function show(Ordinance $ordinance)
    {
        return view('admin.ordinances.show', compact('ordinance'));
    }

    public function edit(Ordinance $ordinance)
    {
        return view('admin.ordinances.edit', compact('ordinance'));
    }

    public function update(Request $request, Ordinance $ordinance)
    {
        $validated = $request->validate([
            'ordinance_number' => [
                'required',
                'string',
                'max:100',
                Rule::unique('ordinances', 'ordinance_number')
                    ->ignore($ordinance->id),
            ],
            'title' => ['required', 'string', 'max:255'],
            'date_passed' => ['required', 'date'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        $ordinance->update($validated);

        return redirect()
            ->route('admin.ordinances.index')
            ->with('success', 'Ordinance successfully updated.');
    }

    public function destroy(Ordinance $ordinance)
    {
        $ordinance->delete();

        return redirect()
            ->route('admin.ordinances.index')
            ->with('success', 'Ordinance successfully deleted.');
    }
}

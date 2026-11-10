<?php

namespace App\Http\Controllers;

use App\Models\Ordinance;
use App\Models\Resolution;
use Illuminate\Http\Request;

class PublicSearchController extends Controller
{
    public function index(Request $request)
    {
        $ordinances = Ordinance::query();
        $resolutions = Resolution::query();

        if ($request->filled('search')) {
            $search = $request->search;

            $ordinances->where(function ($query) use ($search) {
                $query->where('ordinance_number', 'like', "%{$search}%")
                      ->orWhere('title', 'like', "%{$search}%");
            });

            $resolutions->where(function ($query) use ($search) {
                $query->where('resolution_number', 'like', "%{$search}%")
                      ->orWhere('title', 'like', "%{$search}%");
            });
        }

        if ($request->filled('date_passed')) {
            $ordinances->whereDate('date_passed', $request->date_passed);
            $resolutions->whereDate('date_passed', $request->date_passed);
        }

        $ordinances = $ordinances
            ->latest('date_passed')
            ->paginate(5, ['*'], 'ordinances_page')
            ->withQueryString();

        $resolutions = $resolutions
            ->latest('date_passed')
            ->paginate(5, ['*'], 'resolutions_page')
            ->withQueryString();

        return view('public.search', compact(
            'ordinances',
            'resolutions'
        ));
    }

    public function showOrdinance(Ordinance $ordinance)
    {
        return view('public.ordinance-details', compact('ordinance'));
    }

    public function showResolution(Resolution $resolution)
    {
        return view('public.resolution-details', compact('resolution'));
    }
}

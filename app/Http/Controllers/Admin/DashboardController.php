<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ordinance;
use App\Models\Resolution;

class DashboardController extends Controller
{
    public function index()
    {
        $ordinanceCount = Ordinance::count();
        $resolutionCount = Resolution::count();

        return view('admin.dashboard', compact(
            'ordinanceCount',
            'resolutionCount'
        ));
    }
}
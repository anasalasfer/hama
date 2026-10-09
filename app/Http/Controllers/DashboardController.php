<?php

namespace App\Http\Controllers;

use App\Models\DonationSetting;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * Display the authenticated user's dashboard with donation summary and charts.
     */
    public function index(): View
    {
        return view('dashboard', ['setting' => DonationSetting::current()]);
    }
}

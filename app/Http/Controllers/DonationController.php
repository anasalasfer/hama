<?php

namespace App\Http\Controllers;

use App\Models\DonationSetting;
use Illuminate\Contracts\View\View;

class DonationController extends Controller
{
    /**
     * Display the public donation page.
     */
    public function index(): View
    {
        return view('donations', ['setting' => DonationSetting::current()]);
    }
}

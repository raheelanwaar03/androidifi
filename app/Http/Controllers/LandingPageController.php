<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminPlans;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.welcome');
    }

    public function plans()
    {
        $plans = AdminPlans::get();
        return view('landingpage.plans', compact('plans'));
    }

    public function contact()
    {
        return view('landingpage.contact');
    }

    public function about()
    {
        return view('landingpage.about');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    public function index()
    {
        return view('content.plan.choose-plan');
    }

    public function choose()
    {
        return view('content.plan.choose-plan');
    }

    public function custom()
    {
        
        return view('content.plan.plan-destination');
    }

    public function recommendation()
    {
        return view('content.plan.recommended-plan');
    }
}

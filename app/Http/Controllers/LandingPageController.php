<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Show index page
     *  @return view
     */
    public function index()
    {
        return view('welcome');
    }
}

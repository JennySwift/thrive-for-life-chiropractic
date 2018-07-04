<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * AuthPagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function survey()
    {
        return view('pages/survey');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JavaScript;
use Auth;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * home page
     * @return \Illuminate\View\View
     */
    public function home()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/home');
    }
}

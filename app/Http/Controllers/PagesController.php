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
     * @return \Illuminate\View\View
     */
    public function home()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/home');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function services()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/about');
    }

    /**
     * contact page
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/contact');
    }

}

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

    /**
     * fees page
     * @return \Illuminate\View\View
     */
    public function fees()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/fees');
    }

    /**
     * meet-pete page
     * @return \Illuminate\View\View
     */
    public function meetPete()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/meet-pete');
    }

    /**
     * services page
     * @return \Illuminate\View\View
     */
    public function services()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services');
    }
}

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
    public function ak()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/applied-kinesiology');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function chiropractic()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/chiropractic');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function government()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/government');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function hra()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/hra');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function lifestyle()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/lifestyle');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function rnr()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/rnr');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/about/about-page');
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

        return view('pages/contact/contact-page');
    }

}

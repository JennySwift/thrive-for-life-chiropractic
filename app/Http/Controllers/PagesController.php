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
     * applied kinesiology page
     * @return \Illuminate\View\View
     */
    public function appliedKinesiology()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/applied-kinesiology');
    }

    /**
     * chiropractic page
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
     * government supported services page
     * @return \Illuminate\View\View
     */
    public function governmentSupportedServices()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/government-supported-services');
    }

    /**
     * health promoting lifestyle advice page
     * @return \Illuminate\View\View
     */
    public function healthPromotingLifestyleAdvice()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/health-promoting-lifestyle-advice');
    }

    /**
     * health risk assessment page
     * @return \Illuminate\View\View
     */
    public function healthRiskAssessment()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/health-risk-assessment');
    }

    /**
     * retained neonatal reflexes page
     * @return \Illuminate\View\View
     */
    public function retainedNeonatalReflexes()
    {
        JavaScript::put([
            'me' => Auth::user()
        ]);

        return view('pages/services/retained-neonatal-reflexes');
    }
}

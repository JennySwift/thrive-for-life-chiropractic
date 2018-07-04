<?php

namespace App\Http\Controllers\API;

use App\Http\Transformers\SurveyTransformer;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveysController extends Controller
{
    /**
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $surveys = Survey::get();

        return $this->respondIndex($surveys, new SurveyTransformer);
    }
}

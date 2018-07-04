<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\SurveyStoreRequest;
use App\Http\Transformers\SurveyTransformer;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveysController extends Controller
{
    /**
     * @var array
     */
    private $fields = ['name'];

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $surveys = Survey::get();

        return $this->respondIndex($surveys, new SurveyTransformer);
    }

    /**
     * @param SurveyStoreRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function store(SurveyStoreRequest $request)
    {
        $survey = new Survey($request->only($this->fields));
        $survey->save();
        
        return $this->respondStore($survey, new SurveyTransformer);
    }
}

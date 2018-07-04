<?php

namespace App\Http\Transformers;

use App\Models\Survey;
use League\Fractal\TransformerAbstract;

/**
 * Class SurveyTransformer
 */
class SurveyTransformer extends TransformerAbstract
{
    /**
     * @param Survey $survey
     * @return array
     */
    public function transform(Survey $survey)
    {
        $array = [
            'id' => $survey->id,
            'name' => $survey->name,
        ];

        return $array;
    }

}
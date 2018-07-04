<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Response;

/**
 * Class SurveysTest
 */
class SurveysTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @var string
     */
    private $url = '/api/surveys';

    /**
     * @test
     */
    public function it_gets_the_surveys()
    {
        $this->logInUser();
        $response = $this->call('GET', $this->url);
        $content = $this->getContent($response);
    //  dd($content);

        $this->checkSurveyKeysExist($content[0]);

        $this->assertResponseOk($response);
    }
}
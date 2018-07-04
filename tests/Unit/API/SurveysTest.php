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

    /**
     * @test
     */
    public function it_can_create_a_survey()
    {
        $this->logInUser();

        $survey = [
            'name' => 'koala'
        ];

        $response = $this->call('POST', $this->url, $survey);
        $content = $this->getContent($response);
        // dd($content);

        $this->checkSurveyKeysExist($content);

        $this->assertEquals('koala', $content['name']);

        $this->assertResponseCreated($response);
    }
}
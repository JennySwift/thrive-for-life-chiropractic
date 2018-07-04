<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Http\Response;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     *
     * @return mixed
     */
    public function logInUser($id = 1)
    {
        $user = User::find($id);
        $this->be($user);
        $this->user = $user;
        $this->actingAs($user, 'api');
    }

    /**
     * Make an API call
     * @param $method
     * @param $uri
     * @param array $parameters
     * @param array $cookies
     * @param array $files
     * @param array $server
     * @param null $content
     * @return \Illuminate\Http\Response
     */
    public function apiCall($method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $headers = $this->transformHeadersToServerVars([
            'Accept' => 'application/json'
        ]);
        $server = array_merge($server, $headers);

        return parent::call($method, $uri, $parameters, $cookies, $files, $server, $content);
    }

    /**
     *
     * @param $response
     * @return mixed
     */
    protected function getContent($response)
    {
        return json_decode($response->getContent(), true);
    }

    /**
     *
     * @param $items
     */
    public function checkSurveyKeysExist($items)
    {
        $this->assertArrayHasKey('name', $items);
    }

    /**
     *
     * @param $response
     */
    protected function assertResponseOk($response)
    {
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
    }
}

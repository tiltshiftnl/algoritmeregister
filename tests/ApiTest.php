<?php

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{

    protected $_api;

    public function setUp(): void
    {
        $this->_api = (new Tiltshift\AlgoritmeRegister\Api())->get();
    }

    public function testApiGetIndex()
    {
        $env = Slim\Http\Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/'
        ]);
        $request = Slim\Http\Request::createFromEnvironment($env);
        $this->_api->getContainer()['request'] = $request;
        $response = $this->_api->run(true);
        $this->assertSame(200, $response->getStatusCode());
        $data = json_decode((string)$response->getBody());
        $this->assertSame("array", gettype($data->index));
    }

    public function testApiGetUseCases()
    {
        $env = Slim\Http\Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/usecases'
        ]);
        $request = Slim\Http\Request::createFromEnvironment($env);
        $this->_api->getContainer()['request'] = $request;
        $response = $this->_api->run(true);
        $this->assertSame(200, $response->getStatusCode());
        $data = json_decode((string)$response->getBody());
        $this->assertSame("array", gettype($data->useCases));
    }

}
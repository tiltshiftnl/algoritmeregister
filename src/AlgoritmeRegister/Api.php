<?php

namespace Tiltshift\AlgoritmeRegister;

class Api
{

    private $_app;

    public function __construct()
    {
        $this->_app = new \Slim\App();

        $this->_app->get('/', function ($request, $response, $args) {
            return $response->withStatus(200)->write('Hello World!');
        });
        
        $this->_app->get('/tests', function ($request, $response, $args) {
            return $response->withStatus(200)->write('test');
        });
    }

    public function run()
    {
        $this->_app->run();
    }

}
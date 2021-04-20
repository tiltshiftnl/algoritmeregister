<?php

namespace Tiltshift\AlgoritmeRegister;

class Api
{

    private $_slimApp;

    public function __construct()
    {
        $this->_slimApp = new \Slim\App();

        $this->_slimApp->get('/', function ($request, $response, $args) {
            $algoritmeRegister = new AlgoritmeRegister();
            return $response->withJson($algoritmeRegister->getIndex());
        });

        $this->_slimApp->get('/usecases', function ($request, $response, $args) {
            $algoritmeRegister = new AlgoritmeRegister();
            return $response->withJson($algoritmeRegister->getUseCases());
        });
    }

    public function get(): object
    {
        return $this->_slimApp;
    }

}
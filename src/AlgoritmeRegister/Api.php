<?php

namespace Tiltshift\AlgoritmeRegister;

class Api
{

    private $_slimApp;

    public function __construct()
    {
        $this->_slimApp = new \Slim\App();

        // CORS

        $this->_slimApp->options('/{routes:.+}', function ($request, $response, $args) {
            return $response;
        });
        
        $this->_slimApp->add(function ($req, $res, $next) {
            $response = $next($req, $res);
            return $response
                    ->withHeader('Content-type', 'application/hal+json,application/json')
                    //->withHeader('Access-Control-Allow-Origin', '*')
                    ->withHeader('Access-Control-Allow-Origin', $req->getHeader('Origin')) // FIXME ?
                    ->withHeader('Access-Control-Allow-Credentials', 'true') // FIXME ?
                    ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
        });

        // ROUTES

        $this->_slimApp->get('/', function ($request, $response, $args) {
            $data = [
                "title" => "AlgoritmeRegister",
                "about" => "",
                "_links" => [
                    "useCases" => [
                        "href" => "/usecases"
                    ]
                ]
            ];
            return $response->withJson($data);
        });

        $this->_slimApp->get('/usecases', function ($request, $response, $args) {
            $algoritmeRegister = new AlgoritmeRegister();
            $data = [
                "title" => "AlgoritmeRegister Use Cases",
                "about" => "",
                "_links" => [
                    "home" => [
                        "href" => "/"
                    ]
                ],
                "_embedded" => [
                    "useCases" => $algoritmeRegister->getUseCases()
                ]
            ];
            return $response->withJson($data);
        });

        // Catch-all route to serve a 404 Not Found page if none of the routes match
        // NOTE: make sure this route is defined last
        $this->_slimApp->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
            $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
            return $handler($req, $res);
        });
    }

    public function get(): object
    {
        return $this->_slimApp;
    }

}
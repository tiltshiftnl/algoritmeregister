<?php

namespace Tiltshift\AlgoritmeRegister;

class AlgoritmeRegister
{

    public function getIndex(): array
    {
        return [
            "index" => [
                "useCases" => "/usecases"
            ]
        ];
    }

    public function getUseCases(): array
    {
        return [
            "useCases" => []
        ];
    }

}
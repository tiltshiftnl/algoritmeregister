<?php

namespace Tiltshift\AlgoritmeRegister;

class UseCase
{

    private $_title;

    public function setTitle(string $aTitle): void
    {
        $this->_title = $aTitle;
    }

    public function getTitle(): string
    {
        return $this->_title;
    }

}
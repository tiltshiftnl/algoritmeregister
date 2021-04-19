<?php

namespace Tiltshift\AlgoritmeRegister;

class UseCase
{

    private $_title;
    private $_description;

    public function setTitle(string $aTitle): void
    {
        $this->_title = $aTitle;
    }

    public function getTitle(): string
    {
        return $this->_title;
    }

    public function setDescription(string $aDescription): void
    {
        $this->_description = $aDescription;
    }

    public function getDescription(): string
    {
        return $this->_description;
    }

}
<?php

use PHPUnit\Framework\TestCase;

class AlgoritmeRegisterTest extends TestCase
{

    public function testGetUseCases(): void
    {
        $algoritmeRegister = new Tiltshift\AlgoritmeRegister\AlgoritmeRegister();
        $this->assertEquals("array", gettype($algoritmeRegister->getUseCases()));
    }

}
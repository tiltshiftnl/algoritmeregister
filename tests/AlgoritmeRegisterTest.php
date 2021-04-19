<?php

use PHPUnit\Framework\TestCase;

class AlgoritmeRegisterTest extends TestCase
{

    public function testAlgoritmeRegisterClassExists(): void
    {
        $algoritmeRegister = new Tiltshift\AlgoritmeRegister\AlgoritmeRegister();
        $this->assertEquals("object", gettype($algoritmeRegister));
    }

}
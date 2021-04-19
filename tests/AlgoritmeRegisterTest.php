<?php

use PHPUnit\Framework\TestCase;

class AlgoritmeRegisterTests extends TestCase
{

    public function testAlgoritmeRegisterExists(): void
    {
        $algoritmeRegister = new Tiltshift\AlgoritmeRegister\AlgoritmeRegister();
        $this->assertEquals("object", gettype($algoritmeRegister));
    }

}
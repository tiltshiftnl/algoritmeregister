<?php

use PHPUnit\Framework\TestCase;

class AlgoritmeRegisterTests extends TestCase
{

    public function testAlgoritmeRegisterClassExists(): void
    {
        $algoritmeRegister = new Tiltshift\AlgoritmeRegister\AlgoritmeRegister();
        $this->assertEquals("object", gettype($algoritmeRegister));
    }

    public function testUseCaseClassExists(): void
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $this->assertEquals("object", gettype($useCase));
    }

    public function testUseCaseTitle(): void
    {
        $theTitle = "An Algorithm Use Case";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setTitle($theTitle);
        $this->assertEquals($theTitle, $useCase->getTitle());
    }

}
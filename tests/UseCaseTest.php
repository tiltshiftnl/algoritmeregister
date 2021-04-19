<?php

use PHPUnit\Framework\TestCase;

class UseCaseTest extends TestCase
{

    public function testUseCaseClassExists(): void
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $this->assertEquals("object", gettype($useCase));
    }

    public function testUseCaseHasTitle(): void
    {
        $theTitle = "An Algorithm Use Case";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setTitle($theTitle);
        $this->assertEquals($useCase->getTitle(), $theTitle);
    }

    public function testUseCaseHasDescription(): void
    {
        $theDescription = "A short description of this use case.";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setDescription($theDescription);
        $this->assertEquals($useCase->getDescription(), $theDescription);
    }

    public function testUseCaseHasType(): void
    {
        $theType = "A type for this use case.";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setType($theType);
        $this->assertEquals($useCase->getType(), $theType);
    }

}
<?php

use PHPUnit\Framework\TestCase;

class UseCaseTest extends TestCase
{

    public function testUseCaseClassExists()
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $this->assertEquals("object", gettype($useCase));
    }

    public function testUseCaseHasTitle()
    {
        $theTitle = "An Algorithm Use Case";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setTitle($theTitle);
        $this->assertEquals($useCase->getTitle(), $theTitle);
    }

    public function testUseCaseHasDescription()
    {
        $theDescription = "A short description of this use case.";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setDescription($theDescription);
        $this->assertEquals($useCase->getDescription(), $theDescription);
    }

    public function testUseCaseHasType()
    {
        $theType = "A type for this use case.";
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->setType($theType);
        $this->assertEquals($useCase->getType(), $theType);
    }

    public function testUseCaseStoreAndRetrieve()
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $theTitle = "An Algorithm Use Case";
        $theDescription = "A short description of this use case.";
        $theType = "A type for this use case.";
        $useCase->setTitle($theTitle);
        $useCase->setDescription($theDescription);
        $useCase->setType($theType);
        $useCase->store();
        $theId = $useCase->getId();

        $retrievedUseCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $retrievedUseCase->retrieve($useCase->getId());
        $this->assertEquals($theTitle, $retrievedUseCase->getTitle());
        $this->assertEquals($theDescription, $retrievedUseCase->getDescription());
        $this->assertEquals($theType, $retrievedUseCase->getType());
        $this->assertEquals($theId, $retrievedUseCase->getId());

        $useCase->remove();
    }

    public function testUseCaseStoreTwice()
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();

        $useCase->store();
        $theId = $useCase->getId();
        $useCase->store();
        $this->assertEquals($theId, $useCase->getId());

        $useCase->remove();
    }

    public function testUseCaseIdPattern()
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $useCase->store();  
        $this->assertEquals(40, strlen($useCase->getId()));
        $this->assertTrue(ctype_xdigit($useCase->getId()));
        $useCase->remove();
    }

    public function testUseCaseRetrieveIllegalIdThrowsException()
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $this->expectException(\Exception::class);
        $useCase->retrieve("");
        $useCase->retrieve("TOOSHORT");
        $useCase->retrieve("TOOLONGTOOLONGTOOLONGTOOLONGTOOLONGTOOLONG");
    }

    public function testUseCaseRetrieveNonExistingIdThrowsException()
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $this->expectException(\Exception::class);
        $useCase->retrieve("0123456789ABCDEF0123456789ABCDEF01234567");
    }

}
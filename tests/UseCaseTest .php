<?php

use PHPUnit\Framework\TestCase;

class AlgoritmeRegisterTests extends TestCase
{

    public function testUseCaseClassExists(): void
    {
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        $this->assertEquals("object", gettype($useCase));
    }

    public function testGetSetUseCaseFields(): void
    {
        $fields = [
            "Title" => "An Algorithm Use Case",
            "Description" => "A short description of this use case."
        ];
        $useCase = new Tiltshift\AlgoritmeRegister\UseCase();
        foreach ($fields as $key => $value) {
            $useCase->{"set{$key}"}($value);
            $this->assertEquals($value, $useCase->{"get{$key}"}());
        }
        
    }

}
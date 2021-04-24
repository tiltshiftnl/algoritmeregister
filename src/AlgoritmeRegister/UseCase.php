<?php

namespace Tiltshift\AlgoritmeRegister;

class UseCase
{

    private $id = "";
    private $title = "";
    private $description = "";
    private $type = "";

    private function generateId(): string
    {
        $id = "";
        $alphabet = "ABCDEF0123456789";
        while (strlen($id) < 40) {
            $id .= $alphabet[mt_rand(0, strlen($alphabet))];
        }
        return $id;
    }

    private function validateId($anId): bool
    {
        $pattern = '/^[A-F0-9]{40}$/';
        return (bool) preg_match($pattern, $anId);
    }

    private function getStorageFilepath(): string
    {
        $sha1 = sha1($this->id);
        return "./data/{$sha1}.json";
    }

    public function store(): void
    {
        if (empty($this->id)) {
            $this->id = $this->generateId();
        }
        $data = get_object_vars($this);
        file_put_contents($this->getStorageFilepath(), json_encode($data));
    }

    public function retrieve($theId): void
    {
        $pattern = '/^[A-F0-9]{40}$/';
        if (!preg_match($pattern, $theId)) {
            throw new \Exception("Illegal ID");
        }
        $this->id = $theId;
        $filepath = $this->getStorageFilepath();
        if (!file_exists($filepath)) {
            throw new \Exception("Non-existing ID");
        }
        $data = json_decode(file_get_contents($filepath));
        $this->title = $data->title;
        $this->description = $data->description;
        $this->type = $data->type;
    }

    public function remove(): void
    {
        unlink($this->getStorageFilepath());
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setTitle(string $aTitle): void
    {
        $this->title = $aTitle;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $aDescription): void
    {
        $this->description = $aDescription;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setType(string $aType): void
    {
        $this->type = $aType;
    }

    public function getType(): string
    {
        return $this->type;
    }

}
<?php

namespace App\Model;

class Commentary
{
private $id;
private $pseudo;
private $message;
private $reported;
private $idchapter;
private $date;

    public function __construct($values = null)
    {
        if ($values != null) {
            $this->hydrate($values);
        }

    }

    public function hydrate(array $values)
    {
        foreach ($values as $key => $value) {
            $elements = explode('_', $key);
            $newKey = '';
            foreach ($elements as $el) {
                $newKey .= ucfirst($el);
            }

            $method = 'set' . ucfirst($newKey);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getReported(): bool
    {
        return $this->reported;
    }

    public function getIdchapter(): int
    {
        return $this->idchapter;
    }

    public function getDate(): string
    {
        return $this->date;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setIdchapter($idchapter): void
    {
        $this->idchapter = $idchapter;
    }

    public function setDate($date): void
    {
        $this->date = $date;
    }

    public function setPseudo(string $pseudo): void
    {
            $this->pseudo = $pseudo;
    }

    public function setMessage(string $message): void
    {
            $this->message = $message;
    }

    public function setReported(bool $reported)
    {
            $this->reported = $reported;
    }
}

<?php

namespace App\Model;

class Commentary
{
private $id;
private $pseudo;
private $message;
private $reported;
private $idchapter;

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

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setIdchapter($idchapter): void
    {
        $this->idchapter = $idchapter;
    }

    public function setPseudo($pseudo): void
    {
        if (!is_string($pseudo) && (strlen($pseudo) >= 50)) // S'il le pseudo est trop grand.
        {
            trigger_error('Le pseudo doit être une chaine de caractères et ne peut pas dépasser les 50 caractères', E_USER_WARNING);
            return;
        }
        else {
            $this->pseudo = $pseudo;
        }
    }

    public function setMessage($message): void
    {
        if (!is_string($message) && (strlen($message) >= 500)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Le pseudo doit être une chaine de caractères et ne peut pas dépasser les 500 caractères', E_USER_WARNING);
            return;
        }
        else {
            $this->message = $message;
        }
    }

    public function setReported($reported): void
    {
        if (!is_bool($reported)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Doit être un boolean', E_USER_WARNING);
            return;
        }
        else {
            $this->reported = $reported;
        }
    }
}

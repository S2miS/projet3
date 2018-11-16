<?php

namespace App\Model;

class Commentary
{
private $id;
private $pseudo;
private $message;
private $reported;
private $idchapter;

    public function __construct($id, $pseudo, $message, $reported, $idchapter)
    {
        $this->setId($id);
        $this->setPseudo($pseudo);
        $this->setMessage($message);
        $this->setReported($reported);
        $this->setIdchapter($idchapter);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getReported()
    {
        return $this->reported;
    }

    public function getIdchapter()
    {
        return $this->idchapter;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdchapter($idchapter) {
        $this->idchapter = $idchapter;
    }

    public function setPseudo($pseudo)
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

    public function setMessage($message)
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

    public function setReported($reported)
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

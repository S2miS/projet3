<?php

namespace App\Model;

class Chapter
{
    private $idchapter;
    private $number;
    private $title;
    private $text;
    private $date;


    public function __construct($number, $title, $text, $date, $idchapter)
    {
        $this->setIdchapter($idchapter);
        $this->setNumber($number);
        $this->setTitle($title);
        $this->setText($text);
        $this->setDate($date);

    }

    public function getIdChapter()
    {
        return $this->idchapter;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setIdchapter($idchapter) {
        $this->idchapter = $idchapter;
    }

    public function setNumber($number)
    {
        if (!is_int($number)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Le numéro d\'un chapitre doit être un nombre entier', E_USER_WARNING);
            return;
        }
        else {
            $this->number = $_number;
        }
    }

    public function setTitle($title)
    {
        if (!is_string($title) && (strlen($title) >= 255)) // Si le titre est trop grand.
        {
            trigger_error('Le titre ne doit pas être trop grand et doit être une chaîne de caractères (255 caractères max)', E_USER_WARNING);
            return;
        }
        else {
            $this->_title = $title;
        }
    }

    public function setText($text)
    {
        if (!is_string($text)) // Si c'est une chaine de caraactères.
        {
            trigger_error('Le titre doit être une chaine de caractères', E_USER_WARNING);
            return;
        }
        else {
            $this->text = $text;
        }
    }

    public function setDate($date)
    {
        if (!is_a($date, 'DateTime')) // Si c'est un datetime.
        {
            trigger_error('La date doit être au format AAAA-MM-JJ HH:MM:SS', E_USER_WARNING);
            return;
        }
        else {
            $this->date = $date;
        }
    }

}



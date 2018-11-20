<?php

namespace App\Model;

class Chapter
{
    private $id;
    private $number;
    private $title;
    private $text;
    private $creation_date;

    public function __construct($values = null)
    {
        if ($values != null)
        {
            $this->hydrate($values);
        }

    }
    public function hydrate(array $values)
    {
        foreach ($values as $key=>$value)
        {
            $elements = explode('_',$key);
            $newKey='';
            foreach($elements as $el)
            {
                $newKey .= ucfirst($el);
            }

            $method = 'set' .ucfirst($newKey);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
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

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNumber($number)
    {
        if (!is_int($number)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Le numéro d\'un chapitre doit être un nombre entier', E_USER_WARNING);
            return;
        }
        else {
            $this->number = $number;
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

    public function setDate($creation_date)
    {
        if (!is_a($creation_date, 'DateTime')) // Si c'est un datetime.
        {
            trigger_error('La date doit être au format AAAA-MM-JJ HH:MM:SS', E_USER_WARNING);
            return;
        }
        else {
            $this->creation_date = $creation_date;
        }
    }

}



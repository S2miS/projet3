<?php

namespace App\Model;
$GLOBALS (include('../../src/Controller/Backend/bdConnect.php')) ;
class Chapter
{
    private $_idchapter;
    private $_number;
    private $_title;
    private $_text;
    private $_date;


    public function __construct($_number, $_title, $_text, $_date, $_idchapter)
    {
        $this->setIdchapter($_idchapter);
        $this->setNumber($_number);
        $this->setTitle($_title);
        $this->setText($_text);
        $this->setDate($_date);

    }

    public function getIdChapter()
    {
        return $this->_idchapter;
    }

    public function getNumber()
    {
        return $this->_number;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function getText()
    {
        return $this->_text;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function setIdchapter($_idchapter) {
        $this->_idchapter = $_idchapter;
    }

    public function setNumber($_number)
    {
        if (!is_int($_number)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Le numéro d\'un chapitre doit être un nombre entier', E_USER_WARNING);
            return;
        }
        else {
            $this->_number = $_number;
        }
    }

    public function setTitle($_title)
    {
        if (!is_string($_title) && (strlen($_title) >= 255)) // Si le titre est trop grand.
        {
            trigger_error('Le titre ne doit pas être trop grand et doit être une chaîne de caractères (255 caractères max)', E_USER_WARNING);
            return;
        }
        else {
            $this->_title = $_title;
        }
    }

    public function setText($_text)
    {
        if (!is_string($_text)) // Si c'est une chaine de caraactères.
        {
            trigger_error('Le titre doit être une chaine de caractères', E_USER_WARNING);
            return;
        }
        else {
            $this->_text = $_text;
        }
    }

    public function setDate($_date)
    {
        if (!is_a($_date, 'DateTime')) // Si c'est un datetime.
        {
            trigger_error('La date doit être au format AAAA-MM-JJ HH:MM:SS', E_USER_WARNING);
            return;
        }
        else {
            $this->_date = $_date;
        }
    }

    public function addChapter($_number, $_title, $_text, $_date)
    {
        $request = $bdd->query('INSERT INTO  chapter (titre, date, numero, contenu) VALUES ($_title, $_date, $_numero, $_contenu)');
    }

    public function editChapter($_number, $_title, $_text, $_date)
    {
        $request = $bdd->query('UPDATE chapter SET titre = $_titre, date = $_date, numero = $_number, contenu = $_contenu WHERE idchapter ='. $this->getIdChapter().'');
    }

    public function deleteChapter()
    {
        $request = $bdd->query('DELETE FROM chapter WHERE idchapter ='. $this->getIdChapter().'');
    }

}



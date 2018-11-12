<?php

namespace App\Model;
$GLOBALS (include('../../src/Controller/Backend/bdConnect.php')) ;
class Commentary
{
private $_id;
private $_pseudo;
private $_message;
private $_reported;
private $_idchapter;

    public function __construct($_id, $_pseudo, $_message, $_reported, $_idchapter)
    {
        $this->setId($_id);
        $this->setPseudo($_pseudo);
        $this->setMessage($_message);
        $this->setReported($_reported);
        $this->setIdchapter($_idchapter);
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function getReported()
    {
        return $this->_reported;
    }

    public function getIdchapter()
    {
        return $this->_idchapter;
    }

    public function setId($_id) {
        $this->_id = $_id;
    }

    public function setIdchapter($_idchapter) {
        $this->_idchapter = $_idchapter;
    }

    public function setPseudo($_pseudo)
    {
        if (!is_string($_pseudo) && (strlen($_pseudo) >= 255)) // S'il le pseudo est trop grand.
        {
            trigger_error('Le pseudo doit être une chaine de caractères et ne peut pas dépasser les 50 caractères', E_USER_WARNING);
            return;
        }
        else {
            $this->_pseudo = $_pseudo;
        }
    }

    public function setMessage($_message)
    {
        if (!is_string($_message) && (strlen($_message) >= 500)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Le pseudo doit être une chaine de caractères et ne peut pas dépasser les 500 caractères', E_USER_WARNING);
            return;
        }
        else {
            $this->_message = $_message;
        }
    }

    public function setReported($_reported)
    {
        if (!is_bool($_reported)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Doit être un boolean', E_USER_WARNING);
            return;
        }
        else {
            $this->_reported = $_reported;
        }
    }

    public function addComm($_pseudo, $_message)
    {
        $request = $bdd->query('INSERT INTO  comments (pseudo, message) VALUES ($_pseudo, $_message)');
    }

    public function reportComm()
    {
        $request = $bdd->query('UPDATE chapter SET reported = 1  WHERE id ='. $this->getId().'');
    }

    public function unreportComm()
    {
        $request = $bdd->query('UPDATE chapter SET reported = 0  WHERE id ='. $this->getId().'');
    }

    public function deleteComm()
    {
        $request = $bdd->query('DELETE FROM comments WHERE id ='. $this->getId().'');
    }
}

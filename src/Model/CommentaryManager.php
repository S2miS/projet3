<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 13/11/2018
 * Time: 17:36
 */

namespace App\Model;


class CommentaryManager
{
    public function addComm($_pseudo, $_message)
    {
        $request = $this->query('INSERT INTO  comments (pseudo, message) VALUES ($_pseudo, $_message)');
    }

    public function reportComm()
    {
        $request = $this->query('UPDATE chapter SET reported = 1  WHERE id ='. $this->getId().'');
    }

    public function unreportComm()
    {
        $request = $this->query('UPDATE chapter SET reported = 0  WHERE id ='. $this->getId().'');
    }

    public function deleteComm()
    {
        $request = $this->query('DELETE FROM comments WHERE id ='. $this->getId().'');
    }
}
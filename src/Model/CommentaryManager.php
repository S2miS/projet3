<?php

namespace App\Model;

use \PDO;

class CommentaryManager extends dbManager
{
    protected $db;

    public function __construct()
    {
        $this->db=self::dbConnect();
    }

    public function viewComm(int $id)
    {
        $request = $this->db->prepare('SELECT co.pseudo, co.date, co.message, co.id_chapter FROM comments as co INNER JOIN chapter ON ? = chapter.id = co.id_chapter');
        $request ->execute([$id]);
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        $comment = new Commentary($data);
        return $comment;
    }
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
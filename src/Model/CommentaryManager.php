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

    public function addComm($_pseudo, $_message)
    {
        $request = $this->query('INSERT INTO  comments (pseudo, message) VALUES ($_pseudo, $_message)');
    }
    /* Passer en requete preparé */
    public function reportComm(Commentary $comments)
    {
        $request = $this->db->prepare('UPDATE comments SET reported = 1  WHERE id = :id');
        $report = $request->execute(['id'=>$comments->getId()]);
        return $report;
    }
    /* Passer en requete preparé */
    public function unreportComm(Commentary $comments)
    {
        $request = $this->prepare('UPDATE comments SET reported = 0  WHERE id = ?');
        $request->execute([$comments->getId()]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    /* Passer en requete preparé */
    public function moderateComm(Commentary $comments)
    {
        $request = $this->prepare('UPDATE comments WHERE id = ?');
        $request->execute([$comments->getId()]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}
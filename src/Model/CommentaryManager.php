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
    
    public function getReportedComm(Commentary $comments)
    {
            $req = $this->db->query('SELECT id, pseudo, message, reported, moderate, id_chapter, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS dateCreate FROM comments WHERE reported = 1 AND moderate = 0');
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            $comments = [];
            foreach ($result as $data){
                    $commentary = new Commentary();
                    $commentary->setId($data['id']);
                    $commentary->setPseudo($data['pseudo']);
                    $commentary->setMessage($data['message']);
                    $commentary->setDate($data['dateCreate']);
                    $commentary->setReported($data['reported']);
                    $commentary->setModerate($data['moderate']);
                    $commentary->setIdchapter($data['id_chapter']);
                    $comments[] = $commentary;
            }
            return $comments;
    }

    public function addComm($_pseudo, $_message)
    {
        $request = $this->query('INSERT INTO  comments (pseudo, message) VALUES ($_pseudo, $_message)');
    }
    
    public function reportComm(Commentary $comments)
    {
        $request = $this->db->prepare('UPDATE comments SET reported = 1  WHERE id = :id');
        $report = $request->execute(['id'=>$comments->getId()]);
        return $report;
    }
    
    public function unreportComm(Commentary $comments)
    {
        $request = $this->db->prepare('UPDATE comments SET reported = 0  WHERE id = :id');
        $report = $request->execute(['id'=>$comments->getId()]);
        return $report;
    }
    
    public function moderateComm(Commentary $comments)
    {
        $request = $this->db->prepare('UPDATE comments SET moderate = 1  WHERE id = :id');
        $moderate = $request->execute(['id'=>$comments->getId()]);
        return $moderate;
    }
}

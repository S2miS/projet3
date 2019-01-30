<?php


namespace App\Model;

use \PDO;
class ChapterManager extends dbManager
{
    protected $db;

    public function __construct()
    {
        $this->db=self::dbConnect();
    }
  /**Frontend**/

    public function getAllChapters()
    {
        $request = $this->db->query('SELECT id, title, number, text, DATE_FORMAT(creation_date,\'%d/%m/%y\') AS creationDate FROM chapter ORDER BY creation_date DESC');
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        $chapters = [];
        foreach($results as $data)
        {
            $objArticle = new Chapter($data);
            $chapters[] = $objArticle;
        }
        return $chapters;
    }

    public function getOneChapterWithComments(Chapter $chapter)
    {
            $req = $this->db->prepare('SELECT ch.id, co.id AS com_id, co.pseudo, co.message AS com_content, DATE_FORMAT(co.date, \'%d/%m/%Y à %Hh%i\') AS dateCreate, ch.title, ch.number, ch.text, DATE_FORMAT(ch.creation_date, \'%d/%m/%Y\') AS creationDate FROM chapter ch LEFT JOIN comments co ON              co.id_chapter = ch.id WHERE ch.id= ?');
            $req->execute([$chapter->getId()]);
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            $comments = [];
            foreach ($result as $data){
                $chapter->setTitle($data['title']);
                $chapter->setNumber($data['number']);
                $chapter->setText($data['text']);
                $chapter->setCreationDate($data['creationDate']);
                if ($data['com_id']){
                    $commentary = new Commentary();
                    $commentary->setId($data['com_id']);
                    $commentary->setPseudo($data['pseudo']);
                    $commentary->setMessage($data['com_content']);
                    $commentary->setDate($data['dateCreate']);
                    $comments[] = $commentary;
                }
            }
            $chapter->setComments($comments);
            return $chapter;
    }

 /**Backend**/

    public function addChapter(Chapter $chapter)
    {
        $request = $this->db->prepare('INSERT INTO  chapter (title, creation_date, number, text) VALUES (:title, :creation_date, :number, :text)');
        $add = $request->execute([
           'title'=>$chapter->getTitle(),
           'creation_date'=>$chapter->getCreationDate(),
           'number'=>$chapter->getNumber(),
           'text'=>$chapter->getText()
        ]);
    }

    public function editChapter(Chapter $chapter)
    {
        $request = $this->db->prepare('UPDATE chapter SET title =:title, number =:number, text =:text WHERE id=:id');
        $edit = $request->execute([
            'id'=>$chapter->getId(),
            'title'=>$chapter->getTitle(),
            'number'=>$chapter->getNumber(),
            'text'=>$chapter->getText()
        ]);
        return $edit;
    }

    public function deleteChapter(int $id)
    {
        $request = $this->db->prepare('DELETE FROM chapter WHERE id=?');
        $delete = $request->execute([$id]);
        return $delete;
    }

}
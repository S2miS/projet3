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
        $request = $this->db->query('SELECT id, title, number ,DATE_FORMAT(creation_date,\'%d/%m/%y\') AS creation_date_fr, text FROM chapter ORDER BY creation_date_fr DESC');
        $results = $request->fetchAll(PDO::FETCH_ASSOC);

        $chapters = [];
        foreach($results as $data)
        {
            $objArticle = new Chapter($data);
            $chapters[] = $objArticle;
        }
        return $chapters;
    }

 /**Backend**/

    public function addChapter(Chapter $chapter)
    {
        $request = $this->db->prepare('INSERT INTO  chapter (title, creation_date, number, text) VALUES (:title, :creation_date, :number, :text)');
        $add = $request ->execute([
           'title'
           'creation_date'
           'number'
           'text'
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
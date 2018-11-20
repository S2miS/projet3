<?php


namespace App\Model;


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
      $request = $this->db->query('SELECT id, title, DATE_FORMAT(creation_date,\'%d/%m/%y\') AS creation_date_fr FROM chapter ORDER BY creation_date_fr DESC');
      $request->execute();
      $data = $request->fetchAll();
      return $data;
  }

 /**Backend**/

    public function addChapter($_number, $_title, $_text, $_date)
    {
        $request = $this->db->query('INSERT INTO  chapter (title, creation_date, number, text) VALUES ($_title, $_date, $_numero, $_text)');
    }

    /**public function editChapter($_number, $_title, $_text, $_date)
    {
        $request = $this->db->query('UPDATE chapter SET title = $_titre, creation_date = $_date, number = $_number, text = $_text WHERE idchapter ='. $this->getIdChapter().');
    }

    public function deleteChapter()
    {
        $request = $this->db->query('DELETE FROM chapter WHERE idchapter ='. $this->getIdChapter().');
    }
**/
}

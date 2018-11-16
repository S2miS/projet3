<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 13/11/2018
 * Time: 17:36
 */

namespace App\Model;


class ChapterManager extends dbManager
{
    protected $db;

    public function __construct()
    {
        $this->db=self::dbConnect();
    }

    public function addChapter($_number, $_title, $_text, $_date)
    {
        $request = $this->db->query('INSERT INTO  chapter (title, date, number, text) VALUES ($_title, $_date, $_numero, $_text)');
    }

    public function editChapter($_number, $_title, $_text, $_date)
    {
        $request = $this->db->query('UPDATE chapter SET title = $_titre, date = $_date, number = $_number, text = $_text WHERE idchapter ='. $this->getIdChapter().'');
    }

    public function deleteChapter()
    {
        $request = $this->db->query('DELETE FROM chapter WHERE idchapter ='. $this->getIdChapter().'');
    }
}
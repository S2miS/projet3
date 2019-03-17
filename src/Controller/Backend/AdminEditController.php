<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:04
 */

namespace App\Controller\Backend;


use App\Model\Chapter;
use App\Model\ChapterManager;

class AdminEditController
{
    public function viewChapter()
    {
        require('src/View/admin/chapters/edit.php');
    }

    public function edit(int $id, string $title, int $number, string $text)
    {
        $data = new Chapter();
        $data->setId($id);
        $data->setTitle($title);
        $data->setNumber($number);
        $data->setText($text);
        $chapterManager = new ChapterManager();
        $chapter = $chapterManager->editChapter($data);
        header('Location: admin-chapitres');
    }

    public function editForm(int $id)
    {
        $edit = new ChapterManager();
        $result = $edit->getOneChapter($id);
        require('src/View/admin/chapters/edit.php');
    }
}
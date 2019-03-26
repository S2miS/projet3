<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:03
 */

namespace App\Controller\Backend;

use App\Model\ChapterManager;
use App\Model\Chapter;


class AdminCreateController
{
    public function create()
    {
        require('src/View/admin/chapters/create.php');
    }

    public function addChapter(Chapter $chapter)
    {
        $addChapter = new ChapterManager();
        $uniqueNumber=$addChapter->uniqueNumber($chapter->getNumber());
        if($uniqueNumber==true){
            $error='numéro déjà présent';
            $save=$chapter;
            require('src/View/admin/chapters/create.php');
        }
        else {
            $result = $addChapter->addChapter($chapter);
            header('Location: creer-chapitre');
        }

    }
}
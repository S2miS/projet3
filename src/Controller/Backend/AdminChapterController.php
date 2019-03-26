<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:04
 */

namespace App\Controller\Backend;

use App\Model\ChapterManager;

class AdminChapterController
{
    public function homeAdmin()
    {
        $adminChapter = new ChapterManager();
        $result = $adminChapter->getAllChapters();
        require('src/View/admin/chapters/home.php');
    }



}
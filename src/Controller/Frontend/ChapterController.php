<?php

namespace App\Controller\Frontend;

use App\Model\ChapterManager;
use App\Model\CommentaryManager;

class ChapterController
{
    public function oneChapter(int $id)
    {
        $OneChapters = new ChapterManager();
        $result = $OneChapters->getOneChapter($id);
        $OneComments = new CommentaryManager();
        $commresult = $OneComments->viewComm($id);
        require('src/View/book/chapter.php');
    }
}
<?php

namespace App\Controller\Frontend;

use App\Model\ChapterManager;
use App\Model\Commentary;
use App\Model\CommentaryManager;
use App\Model\Chapter;

class ChapterController
{
    public function oneChapter(Chapter $chapter)
    {
        $OneChapter = new ChapterManager();
        $result = $OneChapter->getOneChapterWithComments($chapter);
        require('src/View/book/chapter.php');
    }

    public function reportComment(Commentary $commentary, $chapter_id)
    {
        var_dump($commentary);
        die;
        $reportComment = new CommentaryManager();
        $result = $reportComment->reportComm($commentary);
        header('Location: chapitre&id='. $chapter_id);
    }
}
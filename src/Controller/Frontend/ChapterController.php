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
        $reportComment = new CommentaryManager();
        $result = $reportComment->reportComm($commentary);
        $_SESSION['flash']= 'Le commentaire a bien été signalé';
        header('Location: chapitre&id='. $chapter_id);
    }

    public function addComment(Commentary $commentary)
    {
        $addComment = new CommentaryManager();
        $result = $addComment->addComm($commentary);
        $_SESSION['flash']= 'Votre commentaire a bien été ajouté';
        header('Location: chapitre&id=' . $commentary->getIdchapter());
    }
}
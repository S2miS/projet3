<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:04
 */

namespace App\Controller\Backend;

use App\Model\ChapterManager;
use App\Model\Commentary;
use App\Model\CommentaryManager;
use App\Model\Chapter;


class AdminCommentsController
{
    public function comments()
    {
        require('src/View/admin/comments/comments.php');
    }

    public function adminComments(Chapter $chapter)
    {
        $adminComments = new ChapterManager();
        $result = $adminComments->getOneChapterWithComments($chapter);
        require('src/View/admin/comments/comments.php');
    }
}

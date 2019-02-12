<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:04
 */

namespace App\Controller\Backend;

use App\Model\Commentary;
use App\Model\CommentaryManager;



class AdminCommentsController
{
    public function comments()
    {
        require('src/View/admin/comments/comments.php');
    }

    public function adminReportedComments(Commentary $comments)
    {
        $adminComments = new CommentaryManager();
        $result = $adminComments->getReportedComm($comments);
        require('src/View/admin/comments/comments.php');
    }

    public function adminUnreportedComments (Commentary $comments)
    {
        $adminUnreportedComments = new CommentaryManager();
        $result = $adminUnreportedComments->unreportComm($comments);
        header('Location: admin-commentaires');
    }

    public function adminModerateComments (Commentary $comments)
    {
        $adminModerateComments = new CommentaryManager();
        $result = $adminModerateComments->moderateComm($comments);
        header('Location: admin-commentaires');
    }
}

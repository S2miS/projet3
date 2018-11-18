<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:04
 */

namespace App\Controller\Frontend;


class CommentsController
{
    public function comments()
    {
        require('src/View/admin/comments/comments.php');
    }
}

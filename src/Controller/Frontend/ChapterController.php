<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 18:51
 */

namespace App\Controller\Frontend;


class ChapterController
{
    public function chapter()
    {
        require('src/View/book/chapter.php');
    }
}
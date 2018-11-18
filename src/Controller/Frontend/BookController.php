<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 18:48
 */

namespace App\Controller\Frontend;


class BookController
{
    public function book()
    {
        require('src/View/book/allChapters.php');
    }
}
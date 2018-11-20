<?php

namespace App\Controller\Frontend;

use App\Model\ChapterManager;
class BookController
{
    public function book()
    {
        $allChapters = new ChapterManager();
        $results = $allChapters->getAllChapters();
        require('src/View/book/allChapters.php');
    }
}
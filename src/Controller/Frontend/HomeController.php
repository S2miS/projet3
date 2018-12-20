<?php

namespace App\Controller\Frontend;

use App\Model\ChapterManager;
class HomeController
{
  public function home()
  {
      $allChapters = new ChapterManager();
      $results = $allChapters->getAllChapters();
      require('src/View/home/home.php');
  }
}
<?php

namespace App\Controller\Frontend;

use App\Model\ChapterManager;
class HomeController
{
  public function home()
  {
      $allChapters = new ChapterManager();
      $results = $allChapters->getAllChapters();
      var_dump($results);
      require('src/View/home/home.php');
  }
}
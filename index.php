<?php
//echo phpinfo() ;
require 'vendor/autoload.php';

use App\Controller\Frontend\HomeController;
use App\Controller\Frontend\BookController;
use App\Controller\Frontend\ChapterController;
use App\Controller\Frontend\AboutController;
use App\Controller\Frontend\ContactController;
use App\Controller\Frontend\LegalController;
use App\Controller\Frontend\AdminhomeController;
use App\Controller\Frontend\CreateController;
use App\Controller\Frontend\EditController;
use App\Controller\Frontend\AdminchapterController;
use App\Controller\Frontend\CommentsController;

$url='';
if(isset($_GET['url'])){
    $url=$_GET['url'];
}

//Page visiteur

if($url==="accueil"){
    $homepage = new HomeController();
    $homepage->home();
}

elseif($url==="roman"){
    $book = new BookController();
    $book->book();
}

elseif($url==="chapitre"){
    $chapter = new ChapterController();
    $chapter->chapter();
}

elseif($url==="a-propos"){
    $about = new AboutController();
    $about->about();
}

elseif($url==="contact"){
    $contact = new ContactController();
    $contact->contact();
}

elseif($url==="mentions-legales"){
    $legal = new LegalController();
    $legal->legal();
}

//Page admin

elseif($url==="accueil-administrateur"){
    $admin = new AdminhomeController();
    $admin->admin();
}

elseif($url==="creer-chapitre"){
    $create = new CreateController();
    $create->create();
}

elseif($url==="modifier-chapitre"){
    $edit = new EditController();
    $edit->edit();
}

elseif($url==="accueil-chapitre"){
    $homeadmin = new AdminchapterController();
    $homeadmin->edit();
}

elseif($url==="commentaires"){
    $comments = new CommentsController();
    $hcomments->comments();
}
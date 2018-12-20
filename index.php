<?php
//echo phpinfo() ;
session_start();
require 'vendor/autoload.php';

use App\Controller\Frontend\HomeController;
use App\Controller\Frontend\BookController;
use App\Controller\Frontend\ChapterController;
use App\Controller\Frontend\AboutController;
use App\Controller\Frontend\ContactController;
use App\Controller\Frontend\LegalController;
use App\Controller\Backend\AdminHomeController;
use App\Controller\Backend\AdminCreateController;
use App\Controller\Backend\AdminEditController;
use App\Controller\Backend\AdminchapterController;
use App\Controller\Backend\AdminCommentsController;
use App\Controller\Backend\AdminConnectionController;

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
    $admin = new AdminHomeController();
    $admin->admin();
}

elseif($url==="creer-chapitre"){
    $create = new AdminCreateController();
    $create->create();
}

elseif($url==="modifier-chapitre"){
    $edit = new AdminEditController();
    $edit->edit();
}

elseif($url==="accueil-chapitre"){
    $homeadmin = new AdminChapterController();
    $homeadmin->homeAdmin();
}

elseif($url==="commentaires"){
    $comments = new AdminCommentsController();
    $comments->comments();
}

elseif($url==="page-connection-admin"){
    $connectionadmin = new AdminConnectionController();
    $connectionadmin->connectionadmin();
}

elseif($url==="admin-auth") {
    $adminauth = new AdminConnectionController();
    if (isset($_POST{'pseudo'}) AND isset($_POST{'mdp'})){
        if (!empty($_POST{'pseudo'}) AND !empty($_POST{'mdp'})){
            $adminauth->authentification($_POST{'pseudo'}, $_POST{'mdp'});
        }
    }

}
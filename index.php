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
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $chapter->oneChapter($_GET['id']);
    }
    else{echo 'ID inexistant';}
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
    if(isset($_SESSION['pseudo'])) {
        $admin = new AdminHomeController();
        $admin->admin();
    }
    else{echo 'accès refusé';}
}

elseif($url==="creer-chapitre"){
    if(isset($_SESSION['pseudo'])) {
    $create = new AdminCreateController();
    $create->create();
    }
    else{echo 'accès refusé';}
}

elseif($url==="modifier-chapitre"){
    if(isset($_SESSION['pseudo'])) {
    $edit = new AdminEditController();
    $edit->edit();
    }
    else{echo 'accès refusé';}
}

elseif($url==="admin-chapitres"){
    if(isset($_SESSION['pseudo'])) {
    $homeadmin = new AdminChapterController();
    $homeadmin->homeAdmin();
    }
    else{echo 'accès refusé';}
}

elseif($url==="admin-commentaires") {
    if (isset($_SESSION['pseudo'])) {
        $comments = new AdminCommentsController();
        $comments->comments();
    } else {
        echo 'accès refusé';
    }
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

elseif($url ==="logout") {
    $adminauth = new AdminConnectionController();
    $adminauth->logout();
}
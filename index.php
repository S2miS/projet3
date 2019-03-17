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
use App\Controller\Backend\AdminDeleteController ;
use App\Controller\Backend\AdminchapterController;
use App\Controller\Backend\AdminCommentsController;
use App\Controller\Backend\AdminConnectionController;
use App\Model\Chapter;
use App\Model\Commentary;

$url='';
if(isset($_GET['url'])){
    $url=$_GET['url'];
}

// ------------------------------------------------------------------ Page visiteur

if($url==="accueil"){
    $homepage = new HomeController();
    $homepage->home();
}

elseif($url==="roman"){
    $book = new BookController();
    $book->book();
}

elseif($url==="chapitre"){
    $chap = new Chapter(['id' => $_GET['id']]);
    $chapter = new ChapterController();
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $chapter->oneChapter($chap);
    }
    else{echo 'ID inexistant';}
}

elseif($url==="chapitre-creer-commentaire") {
    $comment = new Commentary(['pseudo'=>$_POST['user_name'], 'message'=>$_POST['user_message'], 'id_chapter'=>$_GET['chapterid']]);
    $addComments = new ChapterController();
    $addComments->addComment($comment);
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

elseif($url ==="report") {
    $comment = new Commentary(['id' => $_GET['comm_id']]);
    if(isset($_GET['comm_id']) && !empty($_GET['comm_id']) && isset($_GET['id']) && !empty($_GET['id'])) {
        $report = new ChapterController();
        $report->reportComment($comment, $_GET['id']);
    }
}
// ------------------------------------------------------------------ Page admin

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
    //var_dump(intval($_GET['id'])) ; die ;
    $edit->edit(intval($_GET['id']), $_POST['title'], intval($_POST['number']), $_POST['textarea']);
    }
    else{echo 'accès refusé';}
}

elseif($url==="supprimer-chapitre"){
    if(isset($_SESSION['pseudo'])) {
        $delete = new AdminDeleteController();
        $delete->delete($_GET['id']);
    }
    else{echo 'accès refusé';}
}

elseif($url==="edit-chapitre"){
    if(isset($_SESSION['pseudo'])) {
        $create = new AdminEditController();
        $create->editForm($_GET['id']);
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
        $comment = new Commentary();
        $adminComments = new AdminCommentsController();
        $adminComments->adminReportedComments($comment);
    } else {
        echo 'accès refusé';
    }
}

elseif($url==="admin-commentaires-moderation") {
    if (isset($_SESSION['pseudo'])) {
        $comment = new Commentary();
        $adminComments = new AdminCommentsController();
        $adminComments->adminModerateComments($comment);
    } else {
        echo 'accès refusé';
    }
}

elseif($url==="admin-commentaires-enlever-signalement") {
    if (isset($_SESSION['pseudo'])) {
        $comment = new Commentary(['id'=>$_GET['id']]);
        $adminComments = new AdminCommentsController();
        $adminComments->adminUnreportedComments($comment);
    } else {
        echo 'accès refusé';
    }
}

elseif($url==="admin-creer-chapitre"){

    $numero = intval($_POST['number']) ;
    if(isset($_SESSION['pseudo'])) {
        $chapter = new Chapter(['title'=>$_POST['title'], 'number'=>$numero, 'text'=>$_POST['textarea']]);
        $addChapter = new AdminCreateController();
        //var_dump($chapter) ;
        $addChapter->addChapter($chapter);
    }
    else{echo 'accès refusé';}
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


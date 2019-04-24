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
use App\Controller\Frontend\ErrorController;
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


switch($url) {
    case "accueil" :
        $homepage = new HomeController();
        $homepage->home();
        break ;

    case "roman" :
        $book = new BookController();
        $book->book();
        break ;

    case "chapitre" :
        if (isset($_GET['id']) && !empty($_GET['id']) && preg_match("/\d+/", $_GET['id'])){
            $chap = new Chapter(['id' => $_GET['id']]);
            $chapter = new ChapterController();
            $chapter->oneChapter($chap);
        }
        else{
            $error = new ErrorController();
            $error->error404();
        }
        break ;

    case "chapitre-creer-commentaire" :
        if (!isset($_POST['user_name']) OR empty($_POST['user_name'])) {
            $errors[] = 'Pseudo';
        }
        if (!isset($_POST['user_message']) OR empty($_POST['user_message'])) {
            $errors[] = 'Message';
        }
        if (empty($errors)) {
            $comment = new Commentary(['pseudo' => $_POST['user_name'], 'message' => $_POST['user_message'], 'id_chapter' => $_GET['chapterid']]);
            $addComments = new ChapterController();
            $addComments->addComment($comment);
            exit();
        }
        else {
            echo '<p>Veuillez remplir les champs suivants : <ul>';
            foreach ($errors as $error) {
                echo "<li>$error</li>\n";
            }
            echo '</ul></p>';
        }
        break ;

    case "a-propos" :
        $about = new AboutController();
        $about->about();
        break ;

    case "contact" :
        /*if (!isset($_POST['name']) OR empty($_POST['name'])) {
            $errors[] = 'Pseudo';
        }
        if (!isset($_POST['email']) OR empty($_POST['email']) AND !preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$', $_POST['email'])) {
            $errors[] = 'Adresse mail';
        }
        if (!isset($_POST['telephone']) OR empty($_POST['telephone']) AND !ctype_digit($_POST['telephone'])) {
            $errors[] = 'Téléphone';
        }
        if (!isset($_POST['message']) OR empty($_POST['message'])) {
            $errors[] = 'Message';
        }
        if (empty($errors)) {*/
            $contact = new ContactController();
            $contact->contact();
            exit();/*
        }
        else {
            echo '<p>Veuillez remplir ou corriger les champs suivants : <ul>';
            foreach ($errors as $error) {
                echo "<li>$error</li>\n";
            }
            echo '</ul></p>';
        }*/
        break ;

    case "send-mail" :
        $contact = new ContactController();
        $contact->sendContactMail();
        break ;

    case "mentions-legales" :
        $legal = new LegalController();
        $legal->legal();
        break ;

    case "report" :
        $comment = new Commentary(['id' => $_GET['comm_id']]);
        if(isset($_GET['comm_id']) && !empty($_GET['comm_id']) && isset($_GET['id']) && !empty($_GET['id'])) {
            $report = new ChapterController();
            $report->reportComment($comment, $_GET['id']);
        }
        break ;

    case "accueil-administrateur" :
        if(isset($_SESSION['pseudo'])) {
            $admin = new AdminHomeController();
            $admin->admin();
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "creer-chapitre" :
        if(isset($_SESSION['pseudo'])) {
            $create = new AdminCreateController();
            $create->create();
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "modifier-chapitre" :
        if(isset($_SESSION['pseudo'])) {
            $edit = new AdminEditController();
            if (!isset($_POST['title']) OR empty($_POST['user_name'])) {
                $errors[] = 'Titre';
            }
            if (!isset($_POST['number']) OR empty($_POST['number']) AND !ctype_digit($_POST['number'])) {
                $errors[] = 'Numéro';
            }
            if (!isset($_POST['textarea']) OR empty($_POST['textarea'])) {
                $errors[] = 'Contenu';
            }
            if (empty($errors)) {
                $edit->edit(intval($_GET['id']), $_POST['title'], intval($_POST['number']), $_POST['textarea']);
            }
            else {
                echo '<p>Veuillez remplir les champs suivants : <ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>\n";
                }
                echo '</ul></p>';
            }
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "supprimer-chapitre" :
        if(isset($_SESSION['pseudo'])) {
            $delete = new AdminDeleteController();
            $delete->delete($_GET['id']);
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "edit-chapitre" :
        if(isset($_SESSION['pseudo'])) {
            $create = new AdminEditController();
            $create->editForm($_GET['id']);
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "admin-chapitres" :
        if(isset($_SESSION['pseudo'])) {
            $homeadmin = new AdminChapterController();
            $homeadmin->homeAdmin();
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "admin-commentaires" :
        if (isset($_SESSION['pseudo'])) {
            $comment = new Commentary();
            $adminComments = new AdminCommentsController();
            $adminComments->adminReportedComments($comment);
        } else {
            header('Location: page-connection-admin');
        }
        break ;

    case "admin-commentaires-moderation" :
        if (isset($_SESSION['pseudo'])) {
            $comment = new Commentary();
            $adminComments = new AdminCommentsController();
            $adminComments->adminModerateComments($comment);
        } else {
            header('Location: page-connection-admin');
        }
        break ;

    case "admin-commentaires-enlever-signalement" :
        if (isset($_SESSION['pseudo'])) {
            $comment = new Commentary(['id'=>$_GET['id']]);
            $adminComments = new AdminCommentsController();
            $adminComments->adminUnreportedComments($comment);
        } else {
            header('Location: page-connection-admin');
        }
        break ;

    case "admin-creer-chapitre" :
        $numero = intval($_POST['number']) ;
        if(isset($_SESSION['pseudo'])) {
            if (!isset($_POST['title']) OR empty($_POST['title'])) {
                $errors[] = 'Titre';
            }
            if (!isset($_POST['number']) OR empty($_POST['number']) AND !ctype_digit($_POST['number'])) {
                $errors[] = 'Numéro';
            }
            if (!isset($_POST['textarea']) OR empty($_POST['textarea'])) {
                $errors[] = 'Contenu';
            }
            if (empty($errors)) {
                $chapter = new Chapter(['title'=>$_POST['title'], 'number'=>$numero, 'text'=>$_POST['textarea']]);
                $addChapter = new AdminCreateController();
                $addChapter->addChapter($chapter);
            }
            else {
                echo '<p>Veuillez remplir les champs suivants : <ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>\n";
                }
                echo '</ul></p>';
            }
        }
        else{header('Location: page-connection-admin');}
        break ;

    case "page-connection-admin" :
        $connectionadmin = new AdminConnectionController();
        $connectionadmin->connectionadmin();
        break ;

    case "admin-auth" :
        $adminauth = new AdminConnectionController();
        if (isset($_POST{'pseudo'}) AND isset($_POST{'mdp'})){
            if (!empty($_POST{'pseudo'}) AND !empty($_POST{'mdp'})){
                $adminauth->authentification($_POST{'pseudo'}, $_POST{'mdp'});
            }
        }
        break ;

    case "logout" :
        $adminauth = new AdminConnectionController();
        $adminauth->logout();
        break ;

    default :
    $error = new ErrorController();
    $error->error404();






}


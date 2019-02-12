<?php
session_start();
include("src/Controller/Backend/bdConnect.php");

if(isset($_POST['id'])) {
    $id = $_POST['id'] ;
}

if(isset($_POST['mdp'])) {
    $mdp = $_POST['mdp'] ;
    $mdp = md5($mdp) ;
}

$request = $this->db->prepare('SELECT * FROM identification WHERE pseudo = :pseudo AND motdepasse = :mdp');
$connect = $request ->execute([
    'mdp'=>$mdp,
    'pseudo'=>$id,
]);
$nb_row = $connect->rowCount();

if($nb_row === 0) {
    header('Location: src/View/admin/connectionPage/connectionPage.php');
    exit;
}
else {
    $_SESSION['admin'] = true ;
    header('Location: src/View/admin/connectionPage/connectionPage.php');
}
?>
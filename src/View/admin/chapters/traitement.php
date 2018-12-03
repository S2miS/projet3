<?php
session_start();
include('../../../Controller/Backend/bdConnect.php') ;

if(isset($_POST['id'])) {
    $id = $_POST['id'] ;
}

if(isset($_POST['number'])) {
    $number = $_POST['number'] ;
}

if(isset($_POST['title'])) {
    $title = $_POST['title'] ;
}

if(isset($_POST['date'])) {
    $date = $_POST['date'] ;
}

if(isset($_POST['text'])) {
    $text = $_POST['text'] ;
}
$query = $bdd->query('UPDATE chapter SET title = "'.$title.'", date = $date, number = $number, text = "'.$text.'" WHERE idchapter = $id');
$query->execute() ;

header('Location:../home/home.php');
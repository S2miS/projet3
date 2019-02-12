<?php
session_start();
include('src/Controller/Backend/bdConnect.php') ;

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
    $creation_date = $_POST['date'] ;
}

if(isset($_POST['text'])) {
    $text = $_POST['text'] ;
}

$request = $this->db->prepare('UPDATE chapter (title, creation_date, number, text) VALUES (:title, :creation_date, :number, :text)');
$add = $request ->execute([
    'title'=>$title,
    'creation_date'=>$creation_date,
    'number'=>$number,
    'text'=>$text
]);
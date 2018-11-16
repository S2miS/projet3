<html>
<head>
    <meta charset="utf-8">
    <title>A Propos - Jean Forteroche</title>
    <link rel="stylesheet" type="text/css" href="../../../../Projet3/public/css/main.css" media="all" />
    <link rel='stylesheet' href="../../../../Projet3/public/css/reset.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<header>
    <?php
    include("../../View/navigation/nav.php");
    ?>
</header>

<form action="../../../index.php" method="post">

        <input type="text" id="name" name="user_name" placeholder="Nom ou pseudo">
        <input type="email" id="mail" name="user_mail" placeholder="E-Mail">
        <input type="text" id="title" name="user_title" placeholder="Titre du message">
        <textarea id="msg" name="user_message" placeholder="Message"></textarea>
        <input type="checkbox">
        <label for="msg">J'accepte les conditions d'utilisation</label>
        <a href="#">Lien vers les Mentions Légales</a>
        <input type="submit" class="btn" value="Envoyer" />
</form>

<?php
include("../../View/navigation/footer.php");
?>
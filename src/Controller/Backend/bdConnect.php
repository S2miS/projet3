<?php

setlocale (LC_TIME, 'fr_FR.utf8','fra');

define('DB_NAME', 'blogp3');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
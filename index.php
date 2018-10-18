<?php
require 'vendor/autoload.php';
use App\Controller\Frontend\HomeController;
$url='';
if (isset($_GET['url'])){
    $url=$_GET['url'];
}
if ($url="home"){
   $homepage = new HomeController();
   $homepage->home();
}

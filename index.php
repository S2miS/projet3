<?php
//echo phpinfo() ;
require 'vendor/autoload.php';

use App\Controller\Frontend\HomeController;
use App\Controller\Frontend\AboutController;

$url='';
if(isset($_GET['url'])){
    $url=$_GET['url'];
}
if($url==="accueil"){
    $homepage = new HomeController();
    $homepage->home();
}
elseif($url==="a-propos"){
    $about = new AboutController();
    $about->about();
}

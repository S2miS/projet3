<?php
namespace App\Controller\Frontend;

class ErrorController{

    public function error404(){
        require 'src/View/errors/error404.php';
    }
}
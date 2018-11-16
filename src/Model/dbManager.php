<?php

namespace App\Model;
use \PDO;
class dbManager
{
    protected function dbConnect(){
        try {
            $db = new PDO('mysql=localhost;dbname=blogp3;charset=utf-8', 'root', '', array
            (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(\Exception $e){
            die('Erreur:'.$e->getMessage());
        }
        return $db;
    }
}
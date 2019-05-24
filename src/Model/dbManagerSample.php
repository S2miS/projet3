
<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 07/05/2019
 * Time: 18:06
 */
namespace App\Model;
use \PDO;
class dbManagerSample
{
    protected function dbConnect(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=dbname;charset=utf8', 'username', 'password', array
            (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(\Exception $e){
            die('Erreur:'.$e->getMessage());
        }
        return $db;
    }
}
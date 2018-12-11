<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 05/12/2018
 * Time: 17:20
 */

namespace App\Model;


class ConnectionManager
{
    protected $db;

    public function __construct()
    {
        $this->db=self::dbConnect();
    }

    public function login($data)
    {
        session_start();
        include("src/Controller/Backend/bdConnect.php");

        $id = $data['id'] ;
        $mdp = $data['mdp'] ;

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
    }


}
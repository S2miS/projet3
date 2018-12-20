<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 26/11/2018
 * Time: 22:06
 */

namespace App\Controller\Backend;

use App\Model\Connection;
use App\Model\ConnectionManager;
class AdminConnectionController
{
    public function connectionadmin()
    {
        require('src/View/admin/connectionPage/connectionPage.php');
    }

    public function authentification(string $pseudo, string $mdp)
    {
        $password = password_hash($mdp, PASSWORD_BCRYPT);
        $data = new Connection();
        $data->setPseudo($pseudo);
        $data->setAdminPassword($mdp);
        $connectionManager = new ConnectionManager();
        $connection = $connectionManager->login($data);
        if ($connection{'pseudo'} === $pseudo){
            if(password_verify($mdp, $connection{'admin_password'})){
                $_SESSION {'pseudo'} = $pseudo;
                header('Location:accueil-administrateur');
            }
            else{
                echo "mot de passe incorrecte";
            }
        }
        else{
            echo "mauvais pseudo";
        }

    }
}

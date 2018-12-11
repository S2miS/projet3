<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 26/11/2018
 * Time: 22:06
 */

namespace App\Controller\Backend;


class AdminConnectionController
{
    public function connectionadmin()
    {
        require('src/View/admin/connectionPage/connectionPage.php');
    }

    public function connection(string $id, string $mdp)
    {
        $data = new Connection();
        $data->setId($id);
        $data->setMdp($mdp);
        $connectionManager = new ConnectionManager();
        $connection = $connectionManager->login($data);
        header('Location: action=accueil-administrateur');
    }
}


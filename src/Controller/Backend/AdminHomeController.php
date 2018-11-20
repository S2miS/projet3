<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:02
 */

namespace App\Controller\Backend;


class AdminHomeController
{
    public function admin()
    {
        require('src/View/admin/home/home.php');
    }
}
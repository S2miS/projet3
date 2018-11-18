<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:03
 */

namespace App\Controller\Frontend;


class CreateController
{
    public function homeadmin()
    {
        require('src/View/admin/chapters/home.php');
    }
}
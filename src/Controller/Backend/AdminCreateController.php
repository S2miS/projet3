<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:03
 */

namespace App\Controller\Backend;


class AdminCreateController
{
    public function create()
    {
        require('src/View/admin/chapters/home.php');
    }
}
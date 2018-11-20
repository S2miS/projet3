<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 19:04
 */

namespace App\Controller\Backend;


class AdminEditController
{
    public function edit()
    {
        require('src/View/admin/chapters/edit.php');
    }
}
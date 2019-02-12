<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 18:53
 */

namespace App\Controller\Frontend;


class ContactController
{
    public function contact()
    {
        require('src/View/contact/contact.php');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 18:56
 */

namespace App\Controller\Frontend;


class LegalController
{
    public function legal()
    {
        require('src/View/about/legalNotice.php');
    }
}
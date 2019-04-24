<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 18/11/2018
 * Time: 18:53
 */

namespace App\Controller\Frontend;


use App\Service\Mail;

class ContactController
{
    public function contact()
    {
        require('src/View/contact/contact.php');
    }

    public function sendContactMail()
    {
        $mail = new Mail();
        $mail->sendMail();
        header('Location: contact');
    }
}
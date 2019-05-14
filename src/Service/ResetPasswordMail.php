<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 07/05/2019
 * Time: 17:36
 */

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ResetPasswordMail{

    public function resetPasswordMail($email, $token){
        $mail = new PHPMailer(true);
        $mail->SMTPDebug=2;
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "thegeekization@gmail.com";
        $mail->Password = "dmsvjiunkgmwmppx";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;

// Expéditeur
        $mail->setFrom('thegeekization@gmail.com', 'Jean Forteroche');
// Destinataire
        $mail->addAddress('simbox94@yahoo.fr');
        $mail->isHTML(true);
// Objet
        $mail->Subject = 'Message de la part de '.$_POST['name'];

// Votre message
        $mail->Body='Mail : '.$_POST['email'].' Titre : '.$_POST['title'].' Message : '.$_POST['message'];
        $mail->send();
// Envoi du mail avec gestion des erreurs
        /* if(!$mail->Send()) {
             echo 'Erreur : ' . $mail->ErrorInfo;
         } else {
             echo 'Message envoyé !';
         }*/
    }
}

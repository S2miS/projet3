<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class ResetPasswordMail{

    public function resetPasswordMail($email, $token){
        $mail = new PHPMailer(true);
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "thegeekization@gmail.com";
        $mail->Password = "dmsvjiunkgmwmppx";
        $mail->SMTPSecure = "";
        $mail->Port = 465;

// Expéditeur
        $mail->setFrom('thegeekization@gmail.com', 'Jean Forteroche');
// Destinataire
        $mail->addAddress($email);
        $mail->isHTML(true);
// Objet
        $mail->Subject = 'Reinitialisation de votre mot de passe';

// Votre message
        $mail->Body='<a href="https://lpmiaw.univ-lr.fr/perso/mfruchar/P3Simon/changement-mdp-nouveau-mdp&token='.$token.'">Cliquez ici pour changer votre mot de passe</a>';
        $mail->send();
// Envoi du mail avec gestion des erreurs
        /* if(!$mail->Send()) {
             echo 'Erreur : ' . $mail->ErrorInfo;
         } else {
             echo 'Message envoyé !';
         }*/
    }
}

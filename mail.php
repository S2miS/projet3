<?php
/**
 * Created by PhpStorm.
 * User: Sim-Portable
 * Date: 25/03/2019
 * Time: 22:31
 */


require 'vendor/PHPMailer/PHPMailer.php';

$mail = new PHPMailer();
$mail->Host = 'smtp.domaine.fr';
$mail->SMTPAuth   = false;
$mail->Port = 25; // Par défaut

// Expéditeur
$mail->SetFrom('expediteur@example.com', 'Nom Prénom');
// Destinataire
$mail->AddAddress('destinataire@example.com', 'Nom Prénom');
// Objet
$mail->Subject = 'Objet du message';

// Votre message
$mail->MsgHTML('Contenu du message en HTML');

// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé !';
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 07/05/2019
 * Time: 17:08
 */

namespace App\Controller\Frontend;


use App\Model\ConnectionManager;
use App\Service\ResetPasswordMail;

class ChangePasswordController
{
    public function changeMailForm ()
    {
        require "src/View/admin/connectionPage/changePassword.php";
    }

    public function changePasswordCheck ($email)
    {
        $connectionManager = new ConnectionManager();
        $result = $connectionManager->checkMail($email);
        if($result === true){
            $token = uniqid('token',true);
            $resetMail = new ResetPasswordMail();
            $resetMail->resetPasswordMail($email, $token);
            $connectionManager->updateUser($token);
            header("Location: page-connection-admin");
        }
        else {
            header("Location: page-connection-admin");
        }
    }

}
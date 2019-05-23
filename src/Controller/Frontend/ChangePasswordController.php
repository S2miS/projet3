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
        require ('src/View/admin/connectionPage/changePasswordMailForm.php');
    }

    public function changePasswordCheck ($email)
    {
        $connectionManager = new ConnectionManager();
        $result = $connectionManager->checkMail($email);
        if($result === true){
            $token = uniqid('token',true);
            $resetMail = new ResetPasswordMail();
            $resetMail->resetPasswordMail($email, $token);
            $connectionManager->updateUser($email, $token);
            header("Location: page-connection-admin");
        }
        else {
            header("Location: page-connection-admin");
        }
    }

    public function changePasswordForm ($token)
    {
        $connectionManager = new ConnectionManager();
        $user = $connectionManager->checkUser($token);
        $tokenDate = new \DateTime($user->getTokenDate());
        $diff = $tokenDate->diff(new \DateTime())->i;
        if($diff > 30)
        {
            if($user != false){
                require "src/View/admin/connectionPage/newPassword.php";
            }
            else {
                require "src/View/errors/error403.php";
            }
        }else{
            require "src/View/errors/error403.php";
        }

    }

    public function updatePassword ($password, $token)
    {

        $newPassword = password_hash($password, PASSWORD_BCRYPT);
        $connectionManager = new ConnectionManager();
        $connectionManager->updateNewPassword($token, $newPassword);
        header("Location: page-connection-admin");
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 05/12/2018
 * Time: 17:20
 */

namespace App\Model;

use \PDO;
class ConnectionManager extends dbManager
{
    protected $db;

    public function __construct()
    {
        $this->db=self::dbConnect();
    }

    /** Admin connection page **/
    public function login(Connection $connection)
    {
        $request = $this->db->prepare('SELECT pseudo, admin_password FROM identification WHERE pseudo = :pseudo');
        $request ->execute(['pseudo' => $connection->getPseudo()]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    /** Check if it's an existing mail **/
    public function checkMail($email)
    {
        $request = $this->db->prepare('SELECT email FROM identification WHERE email = ?');
        $request ->execute([$email]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        if ($result != false){
            return true;
        }
        else {
            return false;
        }

    }

    /** Update User Password **/
    public function updateUser($email, $token)
    {
        $request = $this->db->prepare('UPDATE identification SET token = ?, token_date = NOW() WHERE email = ?');
        $result = $request ->execute([$token, $email]);
        return $result;
    }

    /** Check if user with token exist **/
    public function checkUser($token)
    {
        $request = $this->db->prepare('SELECT * FROM identification WHERE token = ?');
        $request ->execute([$token]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        $user = new Connection();
        $user->setToken($result{'token'});
        $user->setTokenDate($result['token_date']);
        if($user->getToken() != null)
        {
            return $user;
        }else{
            return false;
        }

    }
    /** Add the new password in the DB **/
    public function updateNewPassword($token, $password)
    {
        $request = $this->db->prepare('UPDATE identification SET token = null, token_date = null, admin_password = ? WHERE token = ?');
        $result = $request ->execute([$password, $token]);
        return $result;
    }
}
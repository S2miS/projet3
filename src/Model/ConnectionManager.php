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
        $request = $this->db->prepare('UPDATE identification SET token =: token, token_date = NOW() WHERE email = ?');
        $request ->execute([$token, $email]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;

    }
}
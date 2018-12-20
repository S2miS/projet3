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

    public function login(Connection $connection)
    {
        $request = $this->db->prepare('SELECT pseudo, admin_password FROM identification WHERE pseudo = :pseudo');
        $request ->execute([
            'pseudo' => $connection->getPseudo()
        ]);
        $result = $request->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


}
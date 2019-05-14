<?php
/**
 * Created by PhpStorm.
 * User: Sim25
 * Date: 05/12/2018
 * Time: 17:30
 */

namespace App\Model;


class Connection
{
    private $id;
    private $pseudo;
    private $admin_password;
    private $email;
    private $token;
    private $token_date;


    public function __construct($values = null)
    {
        if ($values != null) {
            $this->hydrate($values);
        }

    }

    public function hydrate(array $values)
    {
        foreach ($values as $key => $value) {
            $elements = explode('_', $key);
            $newKey = '';
            foreach ($elements as $el) {
                $newKey .= ucfirst($el);
            }

            $method = 'set' . ucfirst($newKey);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function getAdminPassword(): ?string
    {
        return $this->admin_password;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setPseudo($pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    public function setAdminPassword(string $admin_password): void
    {
        $this->admin_password = $admin_password;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken($token): void
    {
        $this->token = $token;
    }

    public function getTokenDate()
    {
        return $this->token_date;
    }

    public function setTokenDate($token_date): void
    {
        $this->token_date = $token_date;
    }
}
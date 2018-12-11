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
    private $mdp;

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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }
}
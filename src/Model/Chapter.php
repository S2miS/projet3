<?php

namespace App\Model;

class Chapter
{
    private $id;
    private $number;
    private $title;
    private $text;
    private $creation_date;
    private $comments = [];

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

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function setTitle(string $title): void
    {

        $this->title = $title;

    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setCreationDate($creation_date): void
    {
        $this->creation_date = $creation_date;
    }


    /**
     * @return mixed
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
}


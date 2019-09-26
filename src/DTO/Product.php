<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class Product
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @Assert\NotBlank()
     * @var
     */
    private $content;

    /**
     * @var
     * @Assert\Positive(),
     * @Assert\NotBlank()
     */
    private $price;

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }
}

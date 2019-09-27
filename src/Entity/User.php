<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields={"email"},
 * message="L'email que vous avez indiquer est deja utilise"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_lastname;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;


    /**
     * @var string A "Y-m-d H:i:s" formatted value
     * @ORM\Column(type="datetime", length=255)
     */
    private $creat_date;

    /**
     *  @var string A "Y-m-d H:i:s" formatted value
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    private $maj_date;


    public function __construct()
    {
        $this->maj_date= new \DateTime();
        $this->creat_date= new \DateTime();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getUserLastname(): ?string
    {
        return $this->user_lastname;
    }

    public function setUserLastname(string $user_lastname): self
    {
        $this->user_lastname = $user_lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCreatDate(): ?string
    {
        return $this->creat_date;
    }

    public function setCreatDate(string $creat_date): self
    {
        $this->creat_date = $creat_date;

        return $this;
    }

    public function getMajDate(): ?string
    {
        return $this->maj_date;
    }

    public function setMajDate(string $maj_date): self
    {
        $this->maj_date = $maj_date;

        return $this;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getRoles()
    {
       return['ROLE_USER'];
    }
}

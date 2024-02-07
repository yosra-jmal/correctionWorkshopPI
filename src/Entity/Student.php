<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;



#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]

  #[Assert\NotBlank(message: "vous devez mettre votre nsc!!!")]
    private ?string $nsc = null;

    #[ORM\Column(length: 255)]

    #[Assert\Email(message: 'The email {{ value }} is not a valid email.',)]
    #[Assert\NotBlank(message: "vous devez mettre votre email!!!")]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNsc(): ?string
    {
        return $this->nsc;
    }

    public function setNsc(string $nsc): static
    {
        $this->nsc = $nsc;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}

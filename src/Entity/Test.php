<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $simpleText;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSimpleText(): ?string
    {
        return $this->simpleText;
    }

    public function setSimpleText(?string $simpleText): self
    {
        $this->simpleText = $simpleText;

        return $this;
    }
}

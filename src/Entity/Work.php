<?php

namespace App\Entity;

use App\Repository\WorkRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkRepository::class)
 */
class Work
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=130)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $basic_fee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payable;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBasicFee(): ?int
    {
        return $this->basic_fee;
    }

    public function setBasicFee(int $basic_fee): self
    {
        $this->basic_fee = $basic_fee;

        return $this;
    }

    public function getPayable(): ?bool
    {
        return $this->payable;
    }

    public function setPayable(bool $payable): self
    {
        $this->payable = $payable;

        return $this;
    }
}

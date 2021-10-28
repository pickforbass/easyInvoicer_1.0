<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoiceRepository::class)
 */
class Invoice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $number;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="invoices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="boolean")
     */
    private $paid;

    /**
     * @ORM\OneToMany(targetEntity=Designation::class, mappedBy="designations")
     */
    private $designations;

    public function __construct()
    {
        $this->designations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    public function setPaid(bool $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * @return Collection|Designation[]
     */
    public function getDesignations(): Collection
    {
        return $this->designations;
    }

    public function addDesignation(Designation $designation): self
    {
        if (!$this->designations->contains($designation)) {
            $this->designations[] = $designation;
            $designation->setInvoice($this);
        }

        return $this;
    }

    public function removeDesignation(Designation $designation): self
    {
        if ($this->designations->removeElement($designation)) {
            // set the owning side to null (unless already changed)
            if ($designation->getInvoice() === $this) {
                $designation->setInvoice(null);
            }
        }

        return $this;
    }

}

<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Subservices>
     */
    #[ORM\OneToMany(targetEntity: Subservices::class, mappedBy: 'services')]
    private Collection $subservices;

    public function __construct()
    {
        $this->subservices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Subservices>
     */
    public function getSubservices(): Collection
    {
        return $this->subservices;
    }

    public function addSubservice(Subservices $subservice): static
    {
        if (!$this->subservices->contains($subservice)) {
            $this->subservices->add($subservice);
            $subservice->setServices($this);
        }

        return $this;
    }

    public function removeSubservice(Subservices $subservice): static
    {
        if ($this->subservices->removeElement($subservice)) {
            // set the owning side to null (unless already changed)
            if ($subservice->getServices() === $this) {
                $subservice->setServices(null);
            }
        }

        return $this;
    }
}

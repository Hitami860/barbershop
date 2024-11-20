<?php

namespace App\Entity;

use App\Repository\WeekdayRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeekdayRepository::class)]
class Weekday
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $monday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $tuesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $wednesday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $thursday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $friday = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $saturday = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonday(): ?\DateTimeInterface
    {
        return $this->monday;
    }

    public function setMonday(?\DateTimeInterface $monday): static
    {
        $this->monday = $monday;

        return $this;
    }

    public function getTuesday(): ?\DateTimeInterface
    {
        return $this->tuesday;
    }

    public function setTuesday(?\DateTimeInterface $tuesday): static
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    public function getWednesday(): ?\DateTimeInterface
    {
        return $this->wednesday;
    }

    public function setWednesday(?\DateTimeInterface $wednesday): static
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    public function getThursday(): ?\DateTimeInterface
    {
        return $this->thursday;
    }

    public function setThursday(?\DateTimeInterface $thursday): static
    {
        $this->thursday = $thursday;

        return $this;
    }

    public function getFriday(): ?\DateTimeInterface
    {
        return $this->friday;
    }

    public function setFriday(?\DateTimeInterface $friday): static
    {
        $this->friday = $friday;

        return $this;
    }

    public function getSaturday(): ?\DateTimeInterface
    {
        return $this->saturday;
    }

    public function setSaturday(?\DateTimeInterface $saturday): static
    {
        $this->saturday = $saturday;

        return $this;
    }
}

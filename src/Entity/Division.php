<?php

namespace App\Entity;

use App\Repository\DivisionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DivisionRepository::class)]
class Division
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 2)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'division', targetEntity: SchoolClass::class)]
    private Collection $schoolClasses;

    public function __construct()
    {
        $this->schoolClasses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->name;
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
     * @return Collection<int, SchoolClass>
     */
    public function getSchoolClasses(): Collection
    {
        return $this->schoolClasses;
    }

    public function addSchoolClass(SchoolClass $schoolClass): static
    {
        if (!$this->schoolClasses->contains($schoolClass)) {
            $this->schoolClasses->add($schoolClass);
            $schoolClass->setDivision($this);
        }

        return $this;
    }

    public function removeSchoolClass(SchoolClass $schoolClass): static
    {
        if ($this->schoolClasses->removeElement($schoolClass)) {
            // set the owning side to null (unless already changed)
            if ($schoolClass->getDivision() === $this) {
                $schoolClass->setDivision(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\TimeTableRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TimeTableRepository::class)]
class TimeTable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $section = null;

    #[ORM\Column(length: 40)]
    private ?string  $week = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $time = null;

    #[ORM\ManyToMany(targetEntity: Subject::class, inversedBy: 'timeTables')]
    private Collection $subject;

    #[ORM\ManyToMany(targetEntity: SchoolClass::class, inversedBy: 'timeTables')]
    private Collection $class;

    #[ORM\ManyToOne(inversedBy: 'timeTables')]
    private ?Teacher $assignedBy = null;

    public function __construct()
    {
        $this->subject = new ArrayCollection();
        $this->class = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getWeek(): ?string
    {
        return $this->week;
    }

    public function setWeek(string $week): static
    {
        $this->week = $week;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): static
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return Collection<int, Subject>
     */
    public function getSubject(): Collection
    {
        return $this->subject;
    }

    public function addSubject(Subject $subject): static
    {
        if (!$this->subject->contains($subject)) {
            $this->subject->add($subject);
        }

        return $this;
    }

    public function removeSubject(Subject $subject): static
    {
        $this->subject->removeElement($subject);

        return $this;
    }

    /**
     * @return Collection<int, SchoolClass>
     */
    public function getClass(): Collection
    {
        return $this->class;
    }

    public function addClass(SchoolClass $class): static
    {
        if (!$this->class->contains($class)) {
            $this->class->add($class);
        }

        return $this;
    }

    public function removeClass(SchoolClass $class): static
    {
        $this->class->removeElement($class);

        return $this;
    }

    public function getAssignedBy(): ?Teacher
    {
        return $this->assignedBy;
    }

    public function setAssignedBy(?Teacher $assignedBy): static
    {
        $this->assignedBy = $assignedBy;

        return $this;
    }
}

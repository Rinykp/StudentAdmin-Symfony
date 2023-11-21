<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeacherRepository::class)]
class Teacher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $name = null;

    #[ORM\Column(length: 60)]
    private ?string $email = null;


    #[ORM\ManyToOne(inversedBy: 'teachers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Subject $subject = null;

    #[ORM\OneToMany(mappedBy: 'assignedBy', targetEntity: TimeTable::class)]
    private Collection $timeTables;

    public function __construct()
    {
        $this->timeTables = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }


    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(?Subject $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return Collection<int, TimeTable>
     */
    public function getTimeTables(): Collection
    {
        return $this->timeTables;
    }

    public function addTimeTable(TimeTable $timeTable): static
    {
        if (!$this->timeTables->contains($timeTable)) {
            $this->timeTables->add($timeTable);
            $timeTable->setAssignedBy($this);
        }

        return $this;
    }

    public function removeTimeTable(TimeTable $timeTable): static
    {
        if ($this->timeTables->removeElement($timeTable)) {
            // set the owning side to null (unless already changed)
            if ($timeTable->getAssignedBy() === $this) {
                $timeTable->setAssignedBy(null);
            }
        }

        return $this;
    }
}

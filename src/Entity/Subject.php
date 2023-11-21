<?php

namespace App\Entity;

use App\Repository\SubjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubjectRepository::class)]
class Subject
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: TimeTable::class, mappedBy: 'subject')]
    private Collection $timeTables;

    #[ORM\OneToMany(mappedBy: 'subject', targetEntity: Teacher::class)]
    private Collection $teachers;

    #[ORM\ManyToMany(targetEntity: Marks::class, mappedBy: 'subject')]
    private Collection $marks;

    public function __construct()
    {
        $this->timeTables = new ArrayCollection();
        $this->teachers = new ArrayCollection();
        $this->marks = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->name;
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
            $timeTable->addSubject($this);
        }

        return $this;
    }

    public function removeTimeTable(TimeTable $timeTable): static
    {
        if ($this->timeTables->removeElement($timeTable)) {
            $timeTable->removeSubject($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Teacher>
     */
    public function getTeachers(): Collection
    {
        return $this->teachers;
    }

    public function addTeacher(Teacher $teacher): static
    {
        if (!$this->teachers->contains($teacher)) {
            $this->teachers->add($teacher);
            $teacher->setSubject($this);
        }

        return $this;
    }

    public function removeTeacher(Teacher $teacher): static
    {
        if ($this->teachers->removeElement($teacher)) {
            // set the owning side to null (unless already changed)
            if ($teacher->getSubject() === $this) {
                $teacher->setSubject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Marks>
     */
    public function getMarks(): Collection
    {
        return $this->marks;
    }

    public function addMark(Marks $mark): static
    {
        if (!$this->marks->contains($mark)) {
            $this->marks->add($mark);
            $mark->addSubject($this);
        }

        return $this;
    }

    public function removeMark(Marks $mark): static
    {
        if ($this->marks->removeElement($mark)) {
            $mark->removeSubject($this);
        }

        return $this;
    }
}

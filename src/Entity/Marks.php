<?php

namespace App\Entity;

use App\Repository\MarksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarksRepository::class)]
class Marks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marks = null;

    #[ORM\ManyToMany(targetEntity: Student::class, inversedBy: 'marks')]
    private Collection $student;

    #[ORM\ManyToMany(targetEntity: Subject::class, inversedBy: 'marks')]
    private Collection $subject;



    public function __construct()
    {
        $this->student = new ArrayCollection();
        $this->subject = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getMarks(): ?string
    {
        return $this->marks;
    }

    public function setMarks(string $marks): static
    {
        $this->marks = $marks;

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getStudent(): Collection
    {
        return $this->student;
    }

    public function addStudent(Student $student): static
    {
        if (!$this->student->contains($student)) {
            $this->student->add($student);
        }

        return $this;
    }

    public function removeStudent(Student $student): static
    {
        $this->student->removeElement($student);

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


}

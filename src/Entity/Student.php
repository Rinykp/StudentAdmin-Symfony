<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dob = null;

    #[ORM\Column(length: 60)]
    private ?string $email = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $phone = null;

    #[ORM\ManyToMany(targetEntity: SchoolClass::class, inversedBy: 'student')]
    public Collection $class;
    #[ORM\ManyToMany(targetEntity: Division::class, inversedBy: 'student')]
    public Collection $division;

    #[ORM\ManyToOne(inversedBy: 'student')]
    private ?Parents $parents = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\ManyToMany(targetEntity: Marks::class, mappedBy: 'student')]
    private Collection $marks;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function __construct()
    {
        $this->division = new ArrayCollection();
        $this->class = new ArrayCollection();
        $this->subject = new ArrayCollection();
        $this->marks = new ArrayCollection();
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

    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    public function setDob(\DateTimeInterface $dob): static
    {
        $this->dob = $dob;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

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

    /**
     * @return Collection<int, Division>
     */
    public function getDivision(): Collection
    {
        return $this->division;
    }

    public function addDivision(Division $division): static
    {
        if (!$this->division->contains($division)) {
            $this->division->add($division);
        }

        return $this;
    }

    public function removeDivision(Division $division): static
    {
        $this->division->removeElement($division);

        return $this;
    }

    public function getParents(): ?Parents
    {
        return $this->parents;
    }

    public function setParents(?Parents $parents): static
    {
        $this->parents = $parents;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

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
            $mark->addStudent($this);
        }

        return $this;
    }

    public function removeMark(Marks $mark): static
    {
        if ($this->marks->removeElement($mark)) {
            $mark->removeStudent($this);
        }

        return $this;
    }

}

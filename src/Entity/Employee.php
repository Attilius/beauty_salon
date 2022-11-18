<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee extends User
{
    #[ORM\Column(length: 255)]
    private ?string $jobTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $jobLocation = null;

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    public function getJobLocation(): ?string
    {
        return $this->jobLocation;
    }

    public function setJobLocation(string $jobLocation): self
    {
        $this->jobLocation = $jobLocation;

        return $this;
    }
}

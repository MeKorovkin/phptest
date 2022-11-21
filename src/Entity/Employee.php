<?php
// src/Entity/Employee.php
namespace App\Controller;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;
/**
#[ORM\Entity(repositoryClass: EmployeeRepository::class)]

 */
class Employee
{
    /**
    @ORM\Id
    @ORM\GeneratedValue
    @ORM\Column
    */
    private int $id;
    /**
    @RM\Column(length: 255)
    */
    private string $name;
    /**
    @ORM\Column
    */
    private int $price;

    public function getId(): ?int
    {
    return $this->id;
    }

// ... getter and setter methods
}
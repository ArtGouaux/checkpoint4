<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Formation
 * @package App\Entity
 * @ORM\Entity
 */

class Formation
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    private ?string $name = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    private ?int $gradeLevel = null;

    /**
     * @var string|null
     * @ORM\Column(type="text")
     */
    private ?string $description = null;

    /**
     * @var DateTimeInterface|null
     * @ORM\Column(type="date_immutable")
     */
    private ?DateTimeInterface $startedAt = null;

    /**
     * @var DateTimeInterface|null
     * @ORM\Column(type="date_immutable", nullable=true)
     */
    private ?DateTimeInterface $endedAt = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getGradeLevel(): ?int
    {
        return $this->gradeLevel;
    }

    /**
     * @param int|null $gradeLevel
     */
    public function setGradeLevel(?string $gradeLevel): void
    {
        $this->gradeLevel = $gradeLevel;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getStartedAt(): ?DateTimeInterface
    {
        return $this->startedAt;
    }

    /**
     * @param DateTimeInterface|null $starteddAt
     */
    public function setStartedAt(?DateTimeInterface $startedAt): void
    {
        $this->endedAt = $startedAt;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEndedAt(): ?DateTimeInterface
    {
        return $this->endedAt;
    }

    /**
     * @param DateTimeInterface|null $endedAt
     */
    public function setEndedAt(?DateTimeInterface $endedAt): void
    {
        $this->endedAt = $endedAt;
    }
}

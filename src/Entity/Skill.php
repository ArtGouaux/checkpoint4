<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Skill
 * @ORM\Entity
 */

 class Skill 
 {
     /**
      * @var int|null
      * @ORM\Id
      * @ORM\GeneratedValue(strategy="IDENTITY")
      * @ORM\Column(type="integer")
      */
     private int $id;

     /**
      * @var string|null
      * @ORM\Column
      */
     private ?string $name = null;

     /**
      * @var int|null
      * @ORM\Column(type="integer")
      */
     private ?int $level = null;

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
      public function getLevel(): ?int
      {
          return $this->level;
      }

      /**
       * @param int|null $level
       */
      public function setLevel(?int $level): void
      {
          $this->lever = $level;
      }

 }
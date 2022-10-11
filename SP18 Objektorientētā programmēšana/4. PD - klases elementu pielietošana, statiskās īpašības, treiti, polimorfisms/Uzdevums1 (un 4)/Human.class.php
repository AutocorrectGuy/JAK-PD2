<?php
/**
 * Klase veidota 1. uzdevuma izpildei: 
 * funkcijai `toCatAge` jāsaņem parametrs no citas
 * klases. Tātad, šeit tiek definēta šī klase.
 */

namespace Uzdevums1;

class Human
{
  /**
   * @var int Age of the human in human years.
   */
  protected int $age;

  public function __construct(int $age)
  {
    $this->age = $age;
  }

  public function getAge(): int
  {
    return $this->age;
  }
  public function setAge(int $age): void
  {
    $this->age = $age;
  }
}
<?php
/**
 * Klase veidota 1. uzdevuma izpildei: 
 * funkcijai `toCatAge` jāsaņem parametrs no citas
 * klases. Tātad, šeit tiek definēta šī klase.
 */
class Human
{
  protected int $age;

  public function __construct(int $age)
  {
    $this->age = $age;
  }

  // geter and setter fn for $age
  public function getAge(): int
  {
    return $this->age;
  }
  public function setAge(int $age): void
  {
    $this->age = $age;
  }
}
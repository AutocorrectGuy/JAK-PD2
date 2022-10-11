<?php
/**
 * 1. Izveidojiet User klasi, kurā būs šādi protected tipa lauki - name,
 *    age, publiskās metodes setName, getName, setAge, getAge. 
 */

class User
{
  protected string $name;
  protected int $age;

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
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
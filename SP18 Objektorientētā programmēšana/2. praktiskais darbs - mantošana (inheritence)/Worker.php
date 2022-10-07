<?php
/**
 * 2. Izveidojiet Worker klasi, kas manto no User klases un ievieš 
 *    papildu privāto algas lauku, kā arī publiskās getSalary un 
 *    setSalary metodes. 
 */
require_once("./User.php");

class Worker extends User
{
  private float $salary;

  // geter and setter fn for $salary
  public function getSalary(): float
  {
    return $this->salary;
  }
  public function setSalary(float $salary): void
  {
    $this->salary = $salary;
  }
}
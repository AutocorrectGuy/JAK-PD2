<?php
/**
 * 2. Izveidojiet Worker klasi, kas manto no User klases un ievieš 
 *    papildu privāto algas lauku, kā arī publiskās getSalary un 
 *    setSalary metodes. 
 */
require_once('./User.php');

class Worker extends User
{
  protected float $salary;

  public function getSalary(): float
  {
    return $this->salary;
  }
  
  public function setSalary(float $salary): void
  {
    $this->salary = $salary;
  }
}
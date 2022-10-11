<?php
/**
 * 4. Izveidojiet Studentu klasi Student, kas manto no Lietotāju klases 
 *    Users un ievieš papildu protected tipa mainīgos stipendiju, kursu, 
 *    kā arī setter un getter metodes. 
 */
require_once('./User.class.php');

class Student extends User
{
  protected string $scolarship;
  protected string $course;
  
  public function getScolarship(): string
  {
    return $this->scolarship;
  }

  public function setScolarship(string $scolarship): void
  {
    $this->scolarship = $scolarship;
  }

  public function getCourse(): string
  {
    return $this->course;
  }

  public function setCourse(string $course): void
  {
    $this->course = $course;
  }
}
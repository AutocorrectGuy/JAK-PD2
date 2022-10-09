<?php

/**
 * Autora piezīme: netika pielietots error-handlings, taču iespējamās
 * kategorijas saglabātas konstantē ārpus klases. Ārpus - jo, autors
 * uzskata, ka nav nepieciešams, tērēt papildus atmiņu konstantei, kura
 * tiks izmantota vairākiem klašu objektiem.  
 * 
 *  5. Izveidojiet klasi Driver, kas tiks mantota no iepriekšējā uzdevuma 
 *    klases Worker. Šai metodei jāievada šādi protected lauki: braukšanas 
 *    pieredze, braukšanas kategorija: A, B, C. 
 */
require_once('./Worker.php');

const ALLOWED_DRIVING_CATEGORIES = ['A', 'B', 'C'];

class Driver extends Worker
{
  protected string $drivingExpierence;
  protected string $drivingCategory;

  // geter and setter fn for $drivingExpierence
  public function getDrivingExpierence(): string
  {
    return $this->drivingExpierence;
  }
  public function setDrivingExpierence(string $drivingExpierence): void
  {
    $this->$drivingExpierence = $drivingExpierence;
  }

  // geter and setter fn for $drivingExpierence
  public function getDrivingCategory(): string
  {
    return $this->drivingCategory;
  }
  public function setDrivingCategory(string $drivingCategory): void
  {
    if (!in_array($drivingCategory, ALLOWED_DRIVING_CATEGORIES)) {
      print('Šāda šofera kategorija neeksistē! Izvēlieties kādu no sekojošajām: "'
        . join('", ', ALLOWED_DRIVING_CATEGORIES) . '".');
      return;
    }
    $this->drivingCategory = $drivingCategory;
  }
}
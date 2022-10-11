<?php

/**
 * 5. uzdevums
 * Veidot jaunu klasi! Nosaukums pēc brīvas izvēles, ņemot vērā failu un 
 * klašu nosaukumu noteikumus. Klases tips: dataObject. Klase saturēs sevī 
 * nepieciešamās set un get metodes manipulācijai ar datiem. 
 */

namespace Uzdevums5;

class DataObject
{  
  /**
   * @var mixed data stored in DataObject entity.
   */
  private $data;
  
  public function setData($data): void
  {
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
}
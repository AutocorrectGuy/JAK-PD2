<?php

/**
 * 2. uzdevums 
 * Veidot jaunu klasi! Nosaukums pēc brīvas izvēles, ņemot vērā failu un 
 * klašu nosaukumu noteikumus. Klases ietvaros realizēt funkciju, kas pados 
 * parametru iepriekš definētajai klasei! Funkcija nesatur atgriežamo tipu. 
 * 
 * Cik saprotu, iepriekš definētā klase ir TaskTwo un viņā jāpadod parametrs.
 * Tālāk nekas nav minēts.
 */

namespace Uzdevums2;

class TaskTwo
{
  protected $parameter;
  public function __construct($parameter)
  {
    print('Izveidots jauns uzdevums, kura parametrs ir: <br />');
    var_dump($parameter);
    print('<br />');
    $this->parameter = $parameter;
  }
}
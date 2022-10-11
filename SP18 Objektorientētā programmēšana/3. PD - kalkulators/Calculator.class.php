<?php

/**
 * Šobrīd visa veidotā loģika ir konkrēti kalkulatora
 * daļā, kura veic aprēķinus - `CalculationsMaker`.
 * Šajā klasē nākotnē varētu pievienot loģiku, ar kuras
 * palīdzību glabāt iepriekš ievadītos mainīgos, aprēķinus,
 * līdzīgi, kā īsta kalkulatora 'Memory' ('M+', 'M-') funkcijās.
 */

require_once("./CalculationsMaker.class.php");
require_once("./Printer.trait.php");

class Calculator extends CalculationsMaker
{
  use PrinterTrait;

  // TODO: implement logic about storing values in calculators memory
}
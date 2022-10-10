<?php

/**
 * 3. uzdevums: ar for cikla palīdzību izvadīt visus pāra 
 * skaitļus intervālā no 1 līdz 100! 
 */

function printEvenNumbers(): void
{
  for ($i = 1; $i <= 100; $i++) {
    if (!($i % 2))
      print($i . "<br />");
  }
}
printEvenNumbers();
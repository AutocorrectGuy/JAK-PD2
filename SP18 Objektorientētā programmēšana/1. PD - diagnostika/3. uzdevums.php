<?php

/**
 * 3. uzdevums: ar for cikla palīdzību izvadīt visus pāra 
 * skaitļus intervālā no 1 līdz 100! 
 */

/**
 * Prints all even natural numbers from 1 to 100.
 *
 * @return void
 */
function printEvenNumbers(): void
{
  for ($i = 1; $i <= 100; $i++)
    !($i % 2) && print($i . '<br />');
}

/**
 * Program output:
 */

printEvenNumbers();
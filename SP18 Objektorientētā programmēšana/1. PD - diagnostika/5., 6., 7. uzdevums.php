<?php

/**
 * 5. Veidot jaunu funkciju, kurai padot divus int tipa 
 * parametrus (strikta deklarācija)! Funkcija atgriež 
 * skaitļu summu. 
 * 
 * 6. Veidot jaunu void tipa funkciju, kura kā parametru 
 * saņem String tipa mainīgo! Uz ekrāna izvada tā simbolu 
 * daudzumu. 
 * 
 * 7. Veidot funkciju, kura saņem trīs int tipa mainīgos (strikta 
 * deklarācija) un atgriež vidējo aritmētisko (iebūvētās 
 * funkcijas izmantot ir aizliegts)!
 */

/**
 * Returns sum of two integers.
 *
 * @param  int $x First integer.
 * @param  int $y Second integer.
 * @return int
 */
function getSum(int $x, int $y): int
{
  return $x + $y;
}

/**
 * Prints on screen character count of the string.
 *
 * @param  string $myString Source string.
 * @return void
 */
function printCharCount(string $myString): void
{
  print(strlen($myString));
}

/**
 * Returns calculated average value from three integers.
 *
 * @param  int $num1 First integer.
 * @param  int $num2 Second integer.
 * @param  int $num3 Third integer.
 * @return float
 */
function getAverage(int $num1, int $num2, int $num3): float
{
  return (($num1 + $num2 + $num3) / 3);
}
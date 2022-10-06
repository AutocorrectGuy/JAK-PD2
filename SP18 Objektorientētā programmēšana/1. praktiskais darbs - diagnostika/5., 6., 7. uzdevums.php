<?php

/**
 * 5. Veidot jaunu funkciju, kurai padot divus int tipa 
 * parametrus (strikta deklarācija)! Funkcija atgriež 
 * skaitļu summu. 
 */

function getSum(int $x, int $y): int
{
  return $x + $y;
}

/**
 * 6. Veidot jaunu void tipa funkciju, kura kā parametru 
 * saņem String tipa mainīgo! Uz ekrāna izvada tā simbolu 
 * daudzumu. 
 */

function printCharCount(string $myString): void
{
  print(strlen($myString));
}

/**
 * 7. Veidot funkciju, kura saņem trīs int tipa mainīgos (strikta 
 * deklarācija) un atgriež vidējo aritmētisko (iebūvētās 
 * funkcijas izmantot ir aizliegts)! 
 */

function getAverage(int $x, int $y, int $z): float
{
  return (($x + $y + $z) / 3);
}
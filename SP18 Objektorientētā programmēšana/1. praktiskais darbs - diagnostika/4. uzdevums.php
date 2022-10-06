<?php

/**
 * 4. uzdevums: veidot masīvu, kuru aizpildīt ar 10 brīvas 
 * izvēles skaitļiem! Izvadīt uz ekrāna
 *    4.1. skaitļu summu;
 *    4.2. mazāko skaitli;
 *    4.3. lielāko skaitli;
 *    4.4. virkni, kurā tiks iekļauts tikai katrs otrais 
 *    masīva elements.
 * Piezīme: iebūvētās funkcijas izmantot ir aizliegts.
 */

// array with 10 random numbers
$myArray = array_reduce(range(0, 9), fn($acc, $curr) =>
  [...$acc, rand(10, 100)], 
[]);

// 4.1. Returns sum of the array values;
function getSum(array $arr): int
{
  $sum = 0;
  for ($i = 0; $i < sizeof($arr); $i++) {
    $sum += $arr[$i];
  }
  return $sum;
}

// 4.2. Returns lowest value from the array;
function getMinValue($arr): int
{
  $lowest = $arr[0];
  for ($i = 0; $i < sizeof($arr); $i++) {
    if ($arr[$i] < $lowest) {
      $lowest = $arr[$i];
    }
  }
  return $lowest;
}

// 4.3. Returns largest value from the array;
function getMaxValue($arr): int
{
  $highest = $arr[0];
  for ($i = 0; $i < sizeof($arr); $i++) {
    if ($arr[$i] > $highest) {
      $highest = $arr[$i];
    }
  }
  return $highest;
}

// Returns a new array with each second value from the given array
function collectEachSecond($arr): array
{
  $temp = [];
  for ($i = 0; $i < sizeof($arr); $i++) {
    if ($i % 2) {
      $temp[] = $arr[$i];
    }
  }
  return $temp;
}

// Prints the generated array and all values of used functions from this file
function prettyPrintTask(array $arr): void
{
  print("Dotais masīvs ar 10 nejaušiem cipariem: <br />");
  print_r($arr);
  print("<br />Skaitļu summa: " . getSum($arr) . "<br />");
  print("Mazākais skaitlis: " . getMinValue($arr) . "<br />");
  print("Lielākais skaitlis: " . getMaxValue($arr) . "<br />");
  print("Virkne, kurā iekļauts tikai katrs otrais masīva elements: <br />");
  print_r(collectEachSecond($arr));
}

prettyPrintTask($myArray);
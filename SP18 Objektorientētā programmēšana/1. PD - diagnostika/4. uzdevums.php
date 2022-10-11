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

/**
 * Returns sum of the array values (task 4.1.).
 *
 * @param  array $arr The input array.
 * @return int
 */
function getSum(array $arr): int
{
  return array_reduce($arr, fn($acc, $curr) => $acc + $curr, 0);
}

/**
 * Returns lowest value from the array (task 4.2.).
 *
 * @param  array $arr The input array.
 * @return int
 */
function getMinValue(array $arr): int
{
  return array_reduce($arr, fn($acc, $curr) => $curr < $acc ? $curr : $acc, $arr[0]);
}

/**
 * Returns largest value from the array (task 4.3.).
 *
 * @param  array $arr The input array.
 * @return int
 */
function getMaxValue(array $arr): int
{
  return array_reduce($arr, fn($acc, $curr) => $curr > $acc ? $curr : $acc, $arr[0]);
}

/**
 * Returns a new array with each second value from the given array (task 4.4.).
 *
 * @param  array $arr The input array.
 * @return array
 */
function collectEachSecond(array $arr): array
{
  $temp = [];
  foreach ($arr as $key => $value)
    $key % 2 && $temp[] = $arr[$key];
  return $temp;
}

/**
 * Returns array of random integers
 *
 * @param  int $size Size of the array.
 * @param  int $lowestValue Lowest possible random value.
 * @param  int $highestValue Highest possible random value.
 * @return array
 */
function randomInArray(int $size, int $lowestValue, int $highestValue): array
{
  return array_reduce(range(0, $size - 1), fn($acc, $curr) =>
  [...$acc, rand($lowestValue, $highestValue)],
  []);
}

/**
 * Prints the generated array and all values of used functions from this file.
 *
 * @param  array $arr The input array.
 * @return void
 */
function prettyPrintTask(array $arr): void
{
  print('Array with size of ' . sizeof($arr) . ' with random integers: '
    . join(', ', $arr) . '. <br />'
    . '4.1. Sum of this array values: ' . getSum($arr) . '.<br />'
    . '4.2. Lowest value in this array: ' . getMinValue($arr) . '.<br />'
    . '4.3. Highest value in this array: ' . getMaxValue($arr) . '.<br />'
    . '4.4. Each second value of this array: '
    . join(", ", collectEachSecond($arr)) . '. '
    );
}

/**
 * Program output:
 */

// Array of size `10` filled with random integers in range from `1` to `100`.
$myArray = randomInArray(10, 1, 100);
prettyPrintTask($myArray);
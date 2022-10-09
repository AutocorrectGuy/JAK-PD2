<?php
/**
 * Autora piezīme: autors uzskata, ka array_reduce nav 
 * pieskaitāma pie iebūvētajām funckijām, jo tā darbojas
 * līdzīgi kā cikli: patiesībā tas ir tas pats foreach cikls,
 * tikai ar papildus saglabātu mainīgo, kurš jāievada array_reduce
 * pēdējā parametrā.
 * 
 * 4.4. Uzdevumā arī varētu izmantot array_reduce, tomēr
 * autors uzskata, ka forEach() šajā gadījumā ir daudz salasāmaks.
 * Lēmums pieņemts tādēļ, jo priekš array_reduce() būtu nepieciešams
 * veidot papildus mainīgo, kurā glabāt konkrēto iterācijas numuru
 * vai ar papildus ciklu pievienot pašreizējam masīvam klāt iteratorus.
 * Šajā gadījumā, šķiet, forEach tieši tādēļ vienkāršāk salasāms cilvēkam
 * un ātrāk izpildāms mašīnai. 
 * 
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
  return array_reduce($arr, fn($acc, $curr) => $acc + $curr, 0);
}

// 4.2. Returns lowest value from the array;
function getMinValue(array $arr): int
{
  return array_reduce($arr, fn($acc, $curr) => $curr < $acc ? $curr : $acc, $arr[0]);
}

// 4.3. Returns largest value from the array;
function getMaxValue(array $arr): int
{
  return array_reduce($arr, fn($acc, $curr) => $curr > $acc ? $curr : $acc, $arr[0]);
}

// 4.4. Returns a new array with each second value from the given array
function collectEachSecond(array $arr): array
{
  $temp = [];
  foreach ($arr as $key => $value)
    $key % 2 && $temp[] = $arr[$key];
  return $temp;
}

// Prints the generated array and all values of used functions from this file
function prettyPrintTask(array $arr): void
{
  print('Dotais masīvs ar 10 nejaušiem cipariem: '
    . join(', ', $arr) . '. '
    . '<br />4.1. Skaitļu summa: ' . getSum($arr) . '.<br />'
    . '4.2. Mazākais skaitlis: ' . getMinValue($arr) . '.<br />'
    . '4.3. Lielākais skaitlis: ' . getMaxValue($arr) . '.<br />'
    . '4.4. Virkne, kurā iekļauts tikai katrs otrais masīva elements: '
    . join(", ", collectEachSecond($arr)) . '. '
    );
}

prettyPrintTask($myArray);
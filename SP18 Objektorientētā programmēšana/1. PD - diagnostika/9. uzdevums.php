<?php
/**
 * 9. Autora piezīme: ar vārdu "unikāls" šajā uzdevuma risinājumā
 * tiek apzīmēts masīva elements, kurš var atkārtoties tikai
 * vienu reizi. Ja viņš atkārtojas >1 reizi, uzdevuma autors risinājumā
 * pieņem, ka šāda vērtība nav unikāla.
 * 
 * Tāda pati ideja arī saistībā par "duplicētajiem" masīvu elementiem.
 * 
 * Tā kā funkcija array_unique() atgriež arī tādas vērtības, kuras
 * atārtojas vairākas reizes, šī funkcija šajā gadījumā tā netiek izmantota.
 * 
 * Nosacījumi: dots masīvs [2,4,7,2,5,7,4,6,8,8,9]. 
 *    9.1. Veidot jaunu masīvu $unique, kurā iekļaut tikai 
 *    unikālos skaitļus no dotā masīva! 
 *    9.2. Veidot jaunu masīvu $duplicate, kurā iekļaut tos 
 *    skaitļus, kuri atkārtojas dotajā masīvā! 
 *    9.3. Aprēķināt abu masīvu $unique un $duplicate skaitļu 
 *    summu un salīdzināt tās savā starpā!
 */

$myArray = [2, 4, 7, 2, 5, 7, 4, 6, 8, 8, 9];
// Saves unique values from $myArray in a new array (task 9.1.).
$unique = array_reduce($myArray, fn($acc, $curr) => in_array($curr, $acc)
  ? array_filter($acc, fn($unique) => $unique != $curr)
  : [...$acc, $curr],
[]);
// Saves duplicated values from $myArray in a new array (task 9.2.).
$duplicate = array_filter($myArray, fn($el) => !in_array($el, $unique));
// stores sums of unique and duplicate values in two seperate variables.
[$uniqueSum, $duplicateSum] = [array_sum($unique), array_sum($duplicate)];

// Prints $unique and $duplicate sums and evaluation (task 9.3.).
print($uniqueSum == $duplicateSum
  ? 'Both sums are the same value: "' . $uniqueSum . '")!'
  : ($uniqueSum > $duplicateSum
    ? 'Sum of unique values "' . $uniqueSum 
      . '" is larger than sum of duplicate values "' . $duplicateSum . '"!'
    : 'Sum of duplicate values "' . $duplicateSum 
      . '" is larger than sum of unique values "' . $uniqueSum . '"!'
    )
);
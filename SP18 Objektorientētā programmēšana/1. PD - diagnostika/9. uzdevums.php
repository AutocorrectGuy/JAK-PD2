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
// 9.1. saves unique values from $myArray in a new array
$unique = array_reduce($myArray, fn($acc, $curr) => in_array($curr, $acc)
  ? array_filter($acc, fn($unique) => $unique != $curr)
  : [...$acc, $curr],
[]);
// 9.2. saves duplicated values from $myArray in a new array
$duplicate = array_filter($myArray, fn($el) => !in_array($el, $unique));
// 9.3. Prints $unique and $duplicate sums and evaluation!
[$uniqueSum, $duplicateSum] = [array_sum($unique), array_sum($duplicate)];
print($uniqueSum == $duplicateSum
  ? 'Summas sakrīt (katras summas vērtība ir "' . $uniqueSum . '")!'
  : ($uniqueSum > $duplicateSum
    ? 'Unikālo skaitļu summa "' . $uniqueSum . '" ir lielāka, nekā duplikātu summa "' . $duplicateSum . '"!'
    : 'Duplicēto skaitļu summa "' . $duplicateSum . '" ir lielāka, nekā unikālo skaitļu summa "' . $uniqueSum . '"!'
  )
);
<?php

/**
 * 2. uzdevums: definēt divus int tipa mainīgos un 
 * salīdzināt tos savā starpā! Uz ekrāna izvadīt paziņojumu par
 * to, kurš skaitlis ir mazāks, vai arī abi skaitļi sakrīt!
 */

$int1 = 5;
$int2 = 3;

print($int1 == $int2
  ? 'Skaitļi sakrīt (abi ir "' . $int1 . '")!'
  : 'Skaitlis "' . ($int1 < $int2 ? $int1 : $int2) . '" ir mazāks!');
<?php

/**
 * 2. uzdevums: definēt divus int tipa mainīgos un 
 * salīdzināt tos savā starpā! Uz ekrāna izvadīt paziņojumu par
 * to, kurš skaitlis ir mazāks, vai arī abi skaitļi sakrīt!
 */

/**
 * Prints two integer evaluation as sentence.
 *
 * @param  int $num1 First integer be evaluated.
 * @param  int $num2 Second integer be evaluated.
 * @return void
 */
function printTwoIntEval(int $num1, int $num2): void
{
  print('Comparing integers ' . $num1 . ' and ' . $num2 . ': ' . $num1 === $num2
    ? 'Both integer values are equal by value "' . $num1 . '")!'
    : 'Integer "' . ($num1 < $num2 ? $num1 : $num2) 
      . '" is larger than the other one!');
}

/**
 * Program output:
 */

// defining two random integers in range from 1 to 100.
[$int1, $int2] = [rand(1, 100), rand(1, 100)];

print('Integer I: ' . $int1 . ', integer II: ' . $int2 . '<br />');
printTwoIntEval($int1, $int2);
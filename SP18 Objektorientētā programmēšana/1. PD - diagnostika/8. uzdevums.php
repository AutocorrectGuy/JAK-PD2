<?php
/**
 * 8. Dota simbolu virkne: “bawefwefYTFafnhawevfllwidhbvAWDHaadgf”.  
 *    8.1. Izvadīt virkni, bet katru otro simbolu pataisīt par
 *    augšējā reģistra burtu! 
 *    8.2. Izvadīt virkni otrādāk (aizliegts izmantot iebūvēto 
 *    funkciju strrev)! 
 *    8.3. Saskaitīt, cik reizes virknē atkārtojas simbols “a”! 
 *    8.4. Izvadīt virknes garumu! 
 *    8.5. Sadalīt virkni divos vienāda garuma masīvos! 
 *    8.6. Izvadīt tieši 13. virknes elementu. 
 */

/**
 * Prints on the screen string with each other letter uppercased (task 8.1.).
 *
 * @param  string $str Source string.
 * @return void
 */
function printEvenToUppercase(string $str): void
{
  $exploded = str_split($str);
  foreach ($exploded as $key => $value)
    $key % 2 && $exploded[$key] = strtoupper($exploded[$key]);
  print(join($exploded) . '<br />');
}

/**
 * Prints on the screen reversed string without strrev (task 8.2.).
 *
 * @param  string $str String to be reversed.
 * @return void
 */
function printReversedString(string $str): void
{
  print(join(array_reverse(str_split($str))) . '<br />');
}

/**
 * Prints on the screen count of char 'a' occurences in given string (task 8.3).
 *
 * @param  string $str Source string.
 * @return void
 */
function printOccurencesOfCharA(string $str)
{
  print('There are ' . substr_count($str, 'a')
    . ' occurences of char "a" <br />');
}

/**
 * Prints strings length (task 8.4.).
 *
 * @param  string $str Source string.
 * @return void
 */
function printStrLength(string $str): void
{
  print(strlen($str) . '<br />');
}

/**
 * Returns array with two equal parts of given string (task 8.5.).
 *
 * @param  string $str Source string.
 * @return array
 */
function splitStrInTwoEqualArrays(string $str): array
{
  return array_chunk(str_split($str), strlen($str) / 2);
}

/**
 * Prints 13th element of given string (task 8.6.).
 *
 * @param  string $str Source string.
 * @return void
 */
function print13thEement(string $str): void
{
  print($str[12] . '<br />');
}

/**
 * Program output
 */

$str = 'bawefwefYTFafnhawevfllwidhbvAWDHaadg';

print('Given string: ' . $str . '<br />');
// 8.1. 
printEvenToUppercase($str);
// 8.2. 
printReversedString($str);
// 8.3.
printOccurencesOfCharA($str);
// 8.4. 
printStrLength($str);
// 8.5.
[$arrPart1, $arrPart2] = splitStrInTwoEqualArrays($str);
print('First part of the array: ' . join(', ', $arrPart1) . '<br />');
print('Second part of the array: ' . join(', ', $arrPart2) . '<br />');
// 8.6.
print13thEement($str);
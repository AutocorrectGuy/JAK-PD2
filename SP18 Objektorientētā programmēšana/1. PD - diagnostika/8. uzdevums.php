<?php
/**
 * Autora piezīme: aizliegts izmantot strrev: tādēļ konvertēju string tipa
 * mainīgo par masīvu un izmantoju array_reverse() :D.
 * 
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

$myString = 'bawefwefYTFafnhawevfllwidhbvAWDHaadg';

// 8.1 Prints string with each other letter uppercased
function printEvenToUppercase(string $str): void
{
  $exploded = str_split($str);
  foreach ($exploded as $key => $value)
    $key % 2 && $exploded[$key] = strtoupper($exploded[$key]);
  print(join($exploded));
}

// 8.2. Prints reversed string (without strrev)
function printReversedString(string $str): void
{
  print(join(array_reverse(str_split($str))));
}

// 8.3. Returns count of char "a" occurences (int) in given string
function countOccurencesOfCharA(string $str): int
{
  return substr_count($str, 'a');
}
print(countOccurencesOfCharA($myString));

// 8.4. Prints strings length
function printStrLength(string $str): void
{
  print(strlen($str));
}

// 8.5. Returns array with two equal parts of given string
function splitStrInTwoEqualParts(string $str): array
{
  return str_split($str, strlen($str) / 2);
}

// 8.6 Prints 13th element of given string
function print13thEement(string $str): void
{
  print($str[12]);
}
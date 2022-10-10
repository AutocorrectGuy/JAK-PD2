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

$myString = "bawefwefYTFafnhawevfllwidhbvAWDHaadgf";

// 8.1 Prints string with each other letter uppercased (with for loop)
function printEvenToUppercase(string $str): void
{
  for ($i = 0; $i < strlen($str); $i++) {
    if ($i % 2) {
      $str[$i] = strtoupper($str[$i]);
    }
  }
  print($str);
}

// 8.2. Prints reversed string (with for loop)
function printReversedString(string $str): void
{
  $reversedStr = "";
  for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr = $reversedStr . $str[$i];
  }
  print($reversedStr);
}

// 8.3. Returns count of char "a" occurences (int) in given string
function countOccurencesOfCharA(string $str): int
{
  $occurencesCount = 0;
  for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == "a") {
      $occurencesCount++;
    }
  }
  return $occurencesCount;
}

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
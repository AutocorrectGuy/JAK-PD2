<?php

/**
 * - Kalkulatora lietojams izmantojot statiskās funkcijas norādot matemātisko
 * funkciju un divus sekojošos skaitļus piemēram:
 *    Kalkulators::print('sum', 10, 3);
 * - Funkciju (matemātisko operāciju) saraksts pieejams Kalkulatora klasē 
 * const mainīgajā OPERATIONS_WHITELIST (kopā izmantojamas 6 funkcijas). 
 * - Ja tiek ievadīta nekorekts matemātiskais operators, tiek izvadīts kļudas
 * paziņojums un iespējamo maemātisko operatorāciju saraksts, kuru jālieto kā
 * pirmo argumentu. 
 */

interface CalculationMethods
{
  public static function calculate(string $mathOperator, int|float $num1, int|float $num2);
}

trait Printer
{
  public static function print(string $operationName, float|int $num1, float|int $num2)
  {
    $result = call_user_func([self::class , 'calculate'], $operationName, $num1, $num2);
    if ($result === null)
      return;
    print($num1 . " " . self::OPERATIONS_WHITELIST[$operationName] . ' ' . $num2 . ' = ' . $result . '<br />');
  }
}

class Kalkulators implements CalculationMethods
{
  use Printer;
  const OPERATIONS_WHITELIST = [
    'sum' => '+',
    'subtract' => '-',
    'multiply' => '*',
    'divide' => '/',
    'power' => '^',
    'modulus' => '%'
  ];

  private static function power(int|float $num, int $exponent)
  {
    return array_reduce(range(1, $exponent - 1), fn($acc, $curr) => $acc * $num, $num);
  }

  private static function validateOperators(string $operatorString): bool
  {
    $operationsKeys = array_keys(self::OPERATIONS_WHITELIST);
    if (!in_array($operatorString, $operationsKeys)) {
      print('Izvēlieties citu matemātisko operāciju, piemēram: "' . join('", "', $operationsKeys) . '". <br />');
      return false;
    }
    return true;
  }

  public static function calculate(string $mathOperation, int|float $num1, int|float $num2): int|float|null
  {
    if (!self::validateOperators($mathOperation))
      return null;
    return $mathOperation === 'power'
      ? self::power($num1, $num2)
      : eval('return ' . $num1 . self::OPERATIONS_WHITELIST[$mathOperation] . $num2 . ';');
  }
}

/**
 * Programmas testēšana
 */

// Kalkulatora pielietojums (bez treita):
print(Kalkulators::calculate('modulus', 10, 3) . '<br />');
// Kalkulatora pielietojums (ar treitu):
Kalkulators::print('divide', 10, 4);
// Kļūdainas matemātiskās operācijas pielietojums: 
Kalkulators::print('modelis', 10, 3);
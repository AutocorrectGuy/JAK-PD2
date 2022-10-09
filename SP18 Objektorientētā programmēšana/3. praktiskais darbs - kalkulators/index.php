<?php

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
    print($num1 . " " . self::OPERATIONS_WHITELIST[$operationName] . ' ' . $num2 . ' = ' . $result);
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
      print('Izvēlieties citu matemātisko operāciju, piemēram: "' . join('", "', $operationsKeys) . '".');
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
      : eval('return ' . $num1 . self::OPERATIONS_WHITELIST[$mathOperation] . $num2 . ";");
  }
}

// Kalkulatora pielietojums:
Kalkulators::print('modulus', 10, 3);
<?php

require_once("./PowerRister.trait.php");
require_once("./CalculationsMaker.inteface.php");

class CalculationsMaker implements CalculationsMakerInterface
{
  use PowerRiserTrait;

  protected const MATH_OPERATIONS_WHITELIST = [
    'sum' => '+',
    'subtract' => '-',
    'multiply' => '*',
    'divide' => '/',
    'power' => '^',
    'modulus' => '%'
  ];

  /**
   * Helper to `calculate()` function.
   * Returns false is used `$mathOperation` param in `calculate()` function
   * is invalid and prints descriptive message on screen.
   * If true, simply returns true without printing message.
   *
   * @param  string $mathOperation Math operation from `calculate()` function.
   * @return bool
   */
  public static function valdidateMathOperation(string $mathOperation): bool
  {
    $operationsKeys = array_keys(self::MATH_OPERATIONS_WHITELIST);

    if (!in_array($mathOperation, $operationsKeys)) {
      print('Choose different math operation like: "'
        . join('", "', $operationsKeys) . '". <br />');
      return false;
    }
    return true;
  }

  /**
   * Returns calculated value
   * @param string $mathOperation Math operation, such as `sum`,
   * `subtract`, `multiply`, `divide`, `power`, `modulus`.
   * @param int|float $num1 First number for calculation.
   * @param int|float $num1 Second number for calculation.
   * @return int|float|null
   */
  public static function calculate(
    string $mathOperation,
    int|float $num1,
    int|float $num2
    ): int|float|null
  {
    if (!self::valdidateMathOperation($mathOperation))
      return null;

    return $mathOperation === 'power'
      ?self::power($num1, $num2)
      : eval('return ' . $num1 . self::MATH_OPERATIONS_WHITELIST[$mathOperation]
      . $num2 . ';');
    ;
  }
}
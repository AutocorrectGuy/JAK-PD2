<?php

trait PrinterTrait
{
  /**
   * Prints on screen mathematical equation. For example "1 + 1 = 2 <br />".
   * Returns true, if math equation was successful.
   * 
   * @param string $mathOperation Math operation, such as `sum`,
   * `subtract`, `multiply`, `divide`, `power`, `modulus`.
   * @param int|float $num1 First number for calculation.
   * @param int|float $num1 Second number for calculation.
   * @return void
   */
  public static function printCalculation(
    string $operationName,
    float|int $num1,
    float|int $num2
    ): bool
  {
    $result = call_user_func([self::class , 'calculate'], $operationName, $num1, $num2);
    if ($result === null)
      return false;

    print($num1 . " " . self::MATH_OPERATIONS_WHITELIST[$operationName]
      . ' ' . $num2 . ' = ' . $result . '<br />');
    return true;
  }
}
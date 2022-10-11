<?php

interface CalculationsMakerInterface
{
  public static function valdidateMathOperation(string $operatorString): bool;
  public static function calculate(
    string $mathOperation,
    int|float $num1,
    int|float $num2
    ): int|float|null;
}
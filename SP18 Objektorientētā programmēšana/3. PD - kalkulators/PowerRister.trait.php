<?php

trait PowerRiserTrait
{
  /**
   * Returns `$num` raised to the power of `$exponent`.
   * Doesn't use built in function `pow()`.
   * 
   * @param  int|float $num The base to use
   * @param  int       $exponent The exponent
   * @return void
   */
  protected function power(int|float $num, int $exponent)
  {
    return array_reduce(range(1, $exponent - 1), fn($acc, $curr) => $acc * $num, $num);
  }
}
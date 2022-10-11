<?php

class Cars
{
  /**
   * @var mixed Color of the car.
   */
  protected $color;

  /**
   * @var mixed Price of the car.
   */
  protected $price;

  /**
   * @var mixed Type of the car.
   */
  protected $type;

  /**
   * __construct of class Cars.
   *
   * @param  mixed $color Color of the car.
   * @param  mixed $price Price of the car.
   * @param  mixed $type Type of the car.
   * @return void
   */
  public function __construct($color, $price, $type)
  {
    $this->color = $color;
    $this->price = $price;
    $this->type = $type;
  }

  /**
   * Prints out on screen selected cars color (in HEX).
   *
   * @return void
   */
  public function showColor(): void
  {
    print($this->color);
  }
}

/**
 * Program output:
 */

$bmw = new Cars('#d6d6d6', '93700 €', 'sedan');
$bmw->showColor();
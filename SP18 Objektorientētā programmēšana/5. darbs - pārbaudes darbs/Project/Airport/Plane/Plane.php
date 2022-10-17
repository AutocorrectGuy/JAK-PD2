<?php

require_once('./Project/Airport/Plane/PlaneAccessors.php');

class Plane {

  /**
   * Getter and setter functions of Plance class.
   */
  use PlaneAccessors;

  /**
   * @var string 
   */
  protected string $_id;

  /**
   * @var string 
   */
  protected string $IATA;

  /**
   * @var bool
   */
  protected bool $isPlaneAvailable;

  /**
   * @var array
   */
  protected array $reservedSeats;

  /**
   * @var int
   */
  protected int $reservedSeatsCount;

  public function __construct(
    string $_id,
    string $IATA,
    bool $isPlaneAvailable = false,
    array $reservedSeats = [],
    int $reservedSeatsCount = 0
  ) {
    $this->_id = $_id;
    $this->IATA = $IATA;
    $this->isPlaneAvailable = $isPlaneAvailable;
    $this->reservedSeats = $reservedSeats;
    $this->reservedSeatsCount = $reservedSeatsCount;

    $this->printInitLog();
  }

  /**
   * @return void Prints message after initialisation
   */
  private function printInitLog() {
    print('Plane "' . $this->_id . '" [' . $this->IATA . '] initialised. <br/ >');
  }
}
<?php

namespace src\models\AirportClasses\Plane\classes\Plane;

use src\models\AirportClasses\Plane\classes\PlaneManager\PlaneManager;
use src\models\AirportClasses\Plane\traits\SeatsTrait\SeatsTrait;

class Plane extends PlaneManager {

  use SeatsTrait;

  /**
   * @var string #id of this Plane.
   */
  protected string $id;

  /**
   * @var string #model name of this Plane.
   */
  protected string $planeModelName;

  /**
   * __construct Tip: 'Airbus A320' is the only plane model avaible right now.
   *
   * @param  string $id 
   * @param  string $planeModelName
   * @return void
   */
  public function __construct(
    string $id,
    string $planeModelName = 'Airbus A320'
  ) {
    $this->id = $id;
    $this->planeModelName = $planeModelName;

    // initializes plane seats
    $this->generatePlaneSeats('Airbus A320');

    print('> Plane #' . $id . ' initialised.' . PHP_EOL);
  }

  /**
   * Get #id of this Plane.
   *
   * @return  string
   */
  public function getId() {
    return $this->id;
  }
}

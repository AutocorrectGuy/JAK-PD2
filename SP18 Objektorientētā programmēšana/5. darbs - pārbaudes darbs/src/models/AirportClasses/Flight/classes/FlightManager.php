<?php

namespace src\models\AirportClasses\Flight\classes\FlightManager;

use src\models\AirportClasses\Flight\classes\Flight\Flight;
use src\models\AirportClasses\Flight\interfaces\FlightManagerInterface\FlightManagerInterface;
use src\models\AirportClasses\Flight\traits\StaticFlightManagerTrait\StaticFlightManagerTrait as SFMT;

class FlightManager implements FlightManagerInterface {

  use SFMT;

  // Non-static version of `addFlightObj` method from `StaticFlightManagerTrait`.
  public function addFlightObj(Flight $flightObject, array &$storage) {
    SFMT::addFlightObj($flightObject, $storage);
  }

  // Non-static version of `findFlightById` method from `StaticFlightManagerTrait`.
  public function findFlightById(string $id, array $storage) {
    SFMT::findFlightById($id, $storage);
  }

  // Non-static version of `deleteFlight` method from `StaticFlightManagerTrait`.
  public function deleteFlight(string $flightId, array &$storage) {
    SFMT::deleteFlight($flightId, $storage);
  }
}

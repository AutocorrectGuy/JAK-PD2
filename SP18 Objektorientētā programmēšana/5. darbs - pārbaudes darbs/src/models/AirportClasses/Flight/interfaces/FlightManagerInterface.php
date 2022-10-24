<?php

namespace src\models\AirportClasses\Flight\interfaces\FlightManagerInterface;

use src\models\AirportClasses\Flight\classes\Flight\Flight;

interface FlightManagerInterface {
  public function addFlightObj(Flight $flightObject, array &$storage);
  public function findFlightById(string $id, array $storage);
  public function deleteFlight(string $flightId, array &$storage);
}

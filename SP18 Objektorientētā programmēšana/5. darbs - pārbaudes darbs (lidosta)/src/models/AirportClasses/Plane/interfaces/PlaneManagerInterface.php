<?php

namespace src\models\AirportClasses\Plane\interfaces\PlaneManagerInterface;

use src\models\AirportClasses\Plane\classes\Plane\Plane;

interface PlaneManagerInterface {
  public function addPlaneObj(Plane $planeObject, array &$storage);
  public function findPlaneById(string $id, array $storage);
  public function deletePlane(string $flightId, array &$storage);
}

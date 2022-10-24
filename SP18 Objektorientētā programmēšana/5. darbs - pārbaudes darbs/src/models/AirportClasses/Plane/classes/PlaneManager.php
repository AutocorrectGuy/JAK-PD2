<?php

namespace src\models\AirportClasses\Plane\classes\PlaneManager;

use src\models\AirportClasses\Plane\classes\Plane\Plane;
use src\models\AirportClasses\Plane\interfaces\PlaneManagerInterface\PlaneManagerInterface;
use src\models\AirportClasses\Plane\Traits\StaticPlaneManagerTrait\StaticPlaneManagerTrait as SPMT;

// implements PlaneManagerIntefrace 
class PlaneManager implements PlaneManagerInterface {

  // StaticPlaneMangerTrait
  use SPMT;

  // Non-static version of `addPlaneObj` method from `StaticPlaneManagerTrait`.
  public function addPlaneObj(Plane $planeObject, array &$storage) {
    SPMT::addPlaneObj($planeObject, $storage);
  }

  // Non-static version of `findPlaneById` method from `StaticPlaneManagerTrait`.
  public function findPlaneById(string $id, array $storage) {
    SPMT::findPlaneById($id, $storage);
  }

  // Non-static version of `deletePlane` method from `StaticPlaneManagerTrait`.
  public function deletePlane(string $flightId, array &$storage) {
    SPMT::deletePlane($flightId, $storage);
  }
}

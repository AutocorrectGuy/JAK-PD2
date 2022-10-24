<?php

namespace src\models\AirportClasses\Plane\Traits\StaticPlaneManagerTrait;

use src\models\AirportClasses\Plane\classes\Plane\Plane;

trait StaticPlaneManagerTrait {

  /**
   * addPlaneObj
   * 
   * Adds `Plane` object to `$storage` array 
   *
   * @param Plane $planeObject `Plane` object which will be pushed into
   * `$storage` array. 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addPlaneObj(Plane $planeObject, array &$storage) {
    $storage['planes'][] = $planeObject;
  }

  /**
   * findPlaneById
   * 
   * By `$id` finds and returns `Plane` object from `$storge` array.
   * Returns `null` if not found.
   *
   * @param  mixed $id
   * @param array $torage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return Plane|null
   */
  public static function findPlaneById(string $planeId, array $storage) {
    $foundPlane = array_filter(
      $storage['planes'],
      fn(Plane $plane) => $plane->getId() === $planeId
    );

    return sizeof($foundPlane) > 0 ? array_values($foundPlane)[0] : null;
  }

  /**
   * deletePlane
   * 
   * Removes `Plane` object from `$storage` array.
   * Plane found by its id.
   *
   * @param Plane $planeObject `Plane` object which will be removed from
   * `$storage` array. 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function deletePlane(string $planeId, array &$storage) {

    /** @var Plane $plane*/
    foreach ($storage['planes'] as $planeKey => $plane) {
      if ($plane->getId() === $planeId) {
        unset($storage['planes'][$planeKey]);

        break;
      }
    }
  }
}

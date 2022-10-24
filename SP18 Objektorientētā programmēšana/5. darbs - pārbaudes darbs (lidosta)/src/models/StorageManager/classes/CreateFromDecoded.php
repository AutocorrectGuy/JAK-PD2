<?php

namespace src\models\StorageManager\classes\CreateFromDecoded;

use src\models\AirportClasses\Airport\classes\Airport\Airport;
use src\models\AirportClasses\Flight\classes\Flight\Flight;
use src\models\AirportClasses\Plane\classes\Plane\Plane;
use src\models\AirportClasses\Plane\Traits\StaticPlaneManagerTrait\StaticPlaneManagerTrait;

/**
 * CreateFromDecoded
 * 
 * Methods which take decoded JSON array data as parameter
 * and creates AirportClasses objects, such as: 
 *  `Airport`, `Flight`, `Plane`.
 */
abstract class CreateFromDecoded {

  /**
   * createAirportFD
   * 
   * Creates new `Airport` object from decoded json data 
   * which is stored as php array.
   * 
   * @param array $airport Decoded json data (parameters 
   * for `Airport` object).
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return Airport
   */
  public static function createAirportFD(
    array $airport,
    array &$storage
  ) {
    return new Airport(...array_values($airport));
  }

  /**
   * createFlightFD
   * 
   * Creates new `Flight` object from decoded json data 
   * which is stored as php array.
   * 
   * @param array $airport Decoded json data (parameters 
   * for `Flight` object).
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return Flight
   */
  public static function createFlightFD(
    array $decodedFlightData,
    array $storage
  ) {

    /**
     * Finds and duplicates plane object, replaces string `planeId`
     * with actual `Plane` object.
     */
    $decodedFlightData['planeId'] = StaticPlaneManagerTrait::findPlaneById(
      $decodedFlightData['planeId'],
      $storage
    );

    return new Flight(...array_values($decodedFlightData));
  }

  /**
   * createPLaneFD
   * 
   * Creates new `Plane` object from decoded json data 
   * which is stored as php array.
   *
   * @param array $airport Decoded json data (parameters 
   * for `Plane` object).
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return Plane
   */
  public static function createPLaneFD(array $decodedPlaneData) {
    return new Plane(...array_values($decodedPlaneData));
  }
}

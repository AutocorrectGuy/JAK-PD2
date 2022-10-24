<?php

namespace src\models\AirportClasses\Flight\traits\StaticFlightManagerTrait;

use src\models\AirportClasses\Flight\classes\Flight\Flight;
use src\models\StorageManager\classes\StorageManager\StorageManager as SM;

trait StaticFlightManagerTrait {

  /**
   * addFlightObj
   * 
   * Adds `Flight` object to `$storage` array 
   * 
   * --- Be aware! ---  
   * This function DOES NOT create 
   * a new `Plane` object in `$storage` array.
   *
   * @param Flight $flightObject `Flight` object which will be pushed into
   * `$storage` array. 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addFlightObj(Flight $flightObject, array &$storage) {

    // stores departure IATA code to actual `Airport` object. 
    $departureIATA = $flightObject->getDepartureIATA();
    SM::findAirportByIATA($departureIATA, $storage)
      ->addDepartureflightId($flightObject->getId());

    // stores arrival IATA code to actual `Airport` object. 
    $arrivalIATA = $flightObject->getArrivalIATA();
    SM::findAirportByIATA($arrivalIATA, $storage)
      ->addArrivalflightId($flightObject->getId());

    // adds `Flight` object to $storage array.
    $storage['flights'][] = $flightObject;
  }

  /**
   * findFlightById
   * 
   * By `$id` finds and returns `Flight` object from `$storge` array.
   * Returns `null` if not found.
   *
   * @param  mixed $id
   * @param array $torage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return Flight|null
   */
  public static function findFlightById(string $flightId, array $storage) {
    $foundFlight = array_filter(
      $storage['flights'],
      fn(Flight $flight) => $flight->getId() === $flightId
    );

    return sizeof($foundFlight) > 0 ? array_values($foundFlight)[0] : null;
  }

  /**
   * deleteFlight
   * 
   * Removes `Flight` object from `$storage` array.
   * Flight found by its id.
   *
   * @param string $flightId `Flight` object which will be removed from
   * `$storage` array. 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function deleteFlight(string $flightId, array &$storage) {

    // find specific $flight object
    $flight = SM::findFlightById($flightId, $storage);

    // removes departure IATA code from actual `Airport` object. 
    $departureIATA = $flight->getDepartureIATA();
    SM::findAirportByIATA($departureIATA, $storage)
      ->removeDepartureflightId($flightId);

    // removes arrival IATA code from actual `Airport` object. 
    $arrivalIATA = $flight->getArrivalIATA();
    SM::findAirportByIATA($arrivalIATA, $storage)
      ->removeArrivalflightId($flightId);

    // delete `Flight` object from `$storage` array.
    /** @var Flight $plane*/
    foreach ($storage['flights'] as $flightKey => $flight) {
      if ($flight->getId() === $flightId) {
        unset($storage['flights'][$flightKey]);

        break;
      }
    }
  }
}

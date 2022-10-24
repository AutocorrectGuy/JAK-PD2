<?php

namespace src\models\AirportClasses\Airport\traits\StaticAirportManagerTrait;

use src\models\AirportClasses\Airport\classes\Airport\Airport;

trait StaticAirportManagerTrait {

  /**
   * addAirportObj
   * 
   * Adds `Airport` object to `$storage` array 
   *
   * @param Airport $airportObject `Airport` object which will be pushed into
   * `$storage` array. 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addAirportObj(Airport $airportObject, array &$storage) {
    $storage['airports'][] = $airportObject;
  }

  /**
   * findAirportByIATA
   * 
   * By `$id` finds and returns `Airport` object from `$storge` array.
   * Returns `null` if not found.
   *
   * @param  mixed $airportIATA
   * @param array $torage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return Airport|null
   */
  public static function findAirportByIATA(string $airportIATA, array $storage) {
    $foundAirport = array_filter(
      $storage['airports'],
      fn(Airport $airport) => $airport->getIATA() === $airportIATA
    );

    return sizeof($foundAirport) > 0 ? array_values($foundAirport)[0] : null;
  }

  /**
   * deleteAirport
   * 
   * Removes `Airport` object from `$storage` array.
   * Airport found by its id.
   *
   * @param Airport $airportObject `Airport` object which will be removed from
   * `$storage` array. 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function deleteAirport(string $airportIATA, array &$storage) {

    /** @var Airport $airport*/
    foreach ($storage['airports'] as $airportKey => $airport) {
      if ($airport->getIATA() === $airportIATA) {
        unset($storage['airports'][$airportKey]);

        break;
      }
    }
  }
}

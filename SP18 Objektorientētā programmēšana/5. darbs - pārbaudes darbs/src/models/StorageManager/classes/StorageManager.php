<?php

namespace src\models\StorageManager\classes\StorageManager;

use src\models\StorageManager\classes\DecodedJSONManager\DecodedJSONManager;
use src\models\AirportClasses\Airport\traits\StaticAirportManagerTrait\StaticAirportManagerTrait;
use src\models\AirportClasses\Flight\traits\StaticFlightManagerTrait\StaticFlightManagerTrait;
use src\models\AirportClasses\Plane\Traits\StaticPlaneManagerTrait\StaticPlaneManagerTrait;

/**
 * StorageManager
 * 
 * Extended class 
 *  `DecodedJSONManager` 
 * uses php array as parameter.
 * 
 * Used traits 
 *  `StaticAirportManagerTrait`,
 *  `StaticFlightManagerTrait`
 *  `StaticPlaneManagerTrait`
 * use objects ar parameters.
 */

class StorageManager extends DecodedJSONManager {

  use StaticAirportManagerTrait;
  use StaticFlightManagerTrait;
  use StaticPlaneManagerTrait;

  /**
   * initStorage
   * 
   * Creates 2d array where AirportClasses, such as 
   * `Airport`, `Flight`, `Plane` are intended to be stored.
   *
   * 
   * @return array Returns 2d array where key names are 
   * lowercased (and in plural) AirportClasses names.
   */
  public static function initStorage() {
    return ['planes' => [], 'airports' => [], 'flights' => []];
  }

  /**
   * addEverythingFromDecoded
   * 
   * With foreach loops creates and puts AirportClasses
   * objects into `$storage` array.
   * 
   * @param array $decodedJSON Array of decoded
   * JSON data where key names are lowercased (and in plural).
   * Decoded example (php array): 
   * [
   *  'airports' => [ ... ],
   *  'flights' => [ ... ],
   *  'planes' => [ ... ]
   * ];
   * 
   * Not decoded example (JSON):
   * {
   *  "airports": [ ... ],
   *  "flights": [ ... ],
   *  "planes": [ ... ]
   * }
   * 
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addEverythingFromDecoded(
    array $decodedJSON,
    array &$storage
  ) {
    // inits planes
    foreach ($decodedJSON['planes'] as $plane)
      DecodedJSONManager::addPlaneFD($plane, $storage);
    // inits airports
    foreach ($decodedJSON['airports'] as $airport)
      DecodedJSONManager::addAirportDF($airport, $storage);
    // inits flights
    foreach ($decodedJSON['flights'] as $flight) {
      DecodedJSONManager::addFlightFD($flight, $storage);
    }
  }
}

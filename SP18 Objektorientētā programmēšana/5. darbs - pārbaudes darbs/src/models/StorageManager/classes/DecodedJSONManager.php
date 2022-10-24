<?php

namespace src\models\StorageManager\classes\DecodedJSONManager;

use src\models\StorageManager\classes\CreateFromDecoded\CreateFromDecoded;
use src\models\StorageManager\traits\JsonParser\JsonParser;
use src\models\StorageManager\classes\StorageManager\StorageManager as SM;


/**
 * DecodedJSONManager
 * 
 * Creates corresponding objects from decoded 
 * JSON data (from php array) and then stores them in
 * `$storage` array. 
 * 
 * Changes original `$storage` array.
 */
abstract class DecodedJSONManager extends CreateFromDecoded {

  /**
   * Parses JSON content to php array which later
   * is used in class `DecodedJSONManager` methods.
   */
  use JsonParser;

  /**
   * addPlaneFD
   * 
   * Adds `Plane` object to `$storage` array from 
   * decoded JSON data
   *
   * @param array $decodedPlaneData Php array of object 
   * `Plane` parameters.
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addPlaneFD(
    array $decodedPlaneData,
    array &$storage
  ) {
    $storage['planes'][] = CreateFromDecoded::createPLaneFD(
      $decodedPlaneData
    );
  }

  /**
   * addFlightFD
   * 
   * Adds `Flight` object to `$storage` array from 
   * decoded JSON data
   * 
   * @param array $decodedFlightData Php array of object 
   * `Flight` parameters.
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addFlightFD(
    array $decodedFlightData,
    array &$storage
  ) {

    // stores departure IATA code to actual `Airport` object. 
    $departureIATA = $decodedFlightData['departureIATA'];
    SM::findAirportByIATA($departureIATA, $storage)->addDepartureflightId($decodedFlightData['id']);

    // stores arrival IATA code to actual `Airport` object. 
    $arrivalIATA = $decodedFlightData['arrivalIATA'];
    SM::findAirportByIATA($arrivalIATA, $storage)->addArrivalflightId($decodedFlightData['id']);

    // creates and adds `Flight` object to $storage array.
    $storage['flights'][] = CreateFromDecoded::createFlightFD(
      $decodedFlightData,
      $storage
    );
  }

  /**
   * addAirportDF
   *
   * Adds `Airport` object to `$storage` array from 
   * decoded JSON data
   * 
   * @param array $decodedAirportData Php array of object 
   * `Airport` parameters.
   * @param array &$storage Array where are AirportClasses
   * objects, such as `Airport`, `Flight`, `Plane` are stored.
   * @return void Returns void. Changes `$storge` Array.
   */
  public static function addAirportDF(
    array $decodedAirportData,
    array &$storage
  ) {
    $storage['airports'][] = CreateFromDecoded::createAirportFD(
      $decodedAirportData,
      $storage
    );
  }
}

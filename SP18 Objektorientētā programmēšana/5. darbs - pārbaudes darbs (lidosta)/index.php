<?php

use src\models\StorageManager\classes\StorageManager\StorageManager as SM;

// used for testing
use src\models\AirportClasses\Airport\classes\Airport\Airport;
use src\models\AirportClasses\Flight\classes\Flight\Flight;
use src\models\AirportClasses\Plane\classes\Plane\Plane;

require_once('./src/services/Autoloader/autoloader.php');

// Loads in JSON data from file and parses it to php array
$decodedJSON = SM::parseJsonFromFile('./testDbData.json');

/**
 * Creates 2d array where will be stored following Objects:
 * airports, flightss, planes where key names are these object names in plural.
 */
$storage = SM::initStorage();

/**
 * Creates and puts `Airport`, `Flight`, `Plane` objects and stores
 * them in previously created array `$storage`. 
 */
SM::addEverythingFromDecoded($decodedJSON, $storage);


/**
 * --------------------------- Testing ---------------------------
 */

// For example, Flight by $id 'FL_001' have finished
SM::deleteFlight('FL_001', $storage);

/**
 * Then I add new airport (Tallin Airport). And new Plane.
 * They is not used in next flights, but may be used in future flights.
 */
SM::addAirportObj(new Airport('TLL', [], []), $storage);
SM::addPlaneObj(new Plane('PL_003'), $storage);

/**
 * Then I create new Flight from Luton to Tallin.
 * Plane 'PL_001' after `Flight_001` now is in Luton (LTN).
 * So I use this plane to create flight the Riga (RIX).
 */
SM::addFlightObj(new Flight(
  'FL_003', // new `Flight` #id
  SM::findPlaneById('PL_002', $storage), // plane used in flight
  'LTN', // departure airport IATA code
  'RIX', // departure airport IATA code
  1666742400, // departure time in UNIX
  1666749600, // arrival time in UNIX
  '143.99 eur', // First class ticket price
  '39.99 eur', // Regular class ticket price
  false // generate ticket for each seat. For 'Airbus 320' - 150 tickets
  ),
  $storage
);

/**
 * Airport check:
 * With var_dump I check weather  
 *  - 'FL_001' has been deleted is removed from 'arrivalflightsIds',
 *  - 'FL_003' has been created is added to 'departureflightsIds',
 */
var_dump(SM::findAirportByIATA('RIX', $storage));

/**
 * Flights check:
 *   - Check if flight 'FL_001' has been deleted (should be NULL if so).
 *   - Commented out line var_dumps `Flight` by $id 'FL_003' (
 *    it has 150 `Ticket` objects in it, so I commented it out).
 */
var_dump(SM::findFlightById('FL_001', $storage));
// var_dump(SM::findFlightById('FL_003', $storage));

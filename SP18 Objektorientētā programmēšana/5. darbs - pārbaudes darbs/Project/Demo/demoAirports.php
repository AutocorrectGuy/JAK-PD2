<?php


require('./Project/Airport/AirportsDB/AirportsDB.php');
require('./Project/Airport/Airport.php');
require('./Project/Airport/Flight/Flight.php');
require('./Project/Airport/Plane/Plane.php');
require('./Project/Airport/Plane/SeatGenerator.php');
require('./Project/Airport/Ticket/TicketGenerator.php');

/**
 * Demo with 3 airports:
 *  - 3 airports: 'Riga Airport' ('RIX'), 'Luton Airport' ('LTN') 'Oslo Airport' ('OSL').
 *      'OSL' will not have any planes or flights in this demo example! 
 *  - 5 planes: AIRBUS A320 (source: http://www.aviationexplorer.com/aircraft_airline_seating_charts.html);
 *  - 2 flights: 'RIX -> LTN', 'LTN -> RIX';
 */

$airportsDB = new AirportsDB([
  'RIX' => new Airport('RIX', 'Riga Airport'),
  'LTN' => new Airport('LTN', 'Luton Airport'),
  'OSL' => new Airport('OSL', 'Luton Airport')
], [
    new Plane('PL_000001', 'OSL', true, SeatManager::generatePlaneSeats(26)),
    new Plane('PL_000002', 'RIX', true, SeatManager::generatePlaneSeats(26)),
    new Plane('PL_000003', 'RIX', true, SeatManager::generatePlaneSeats(26)),
    new Plane('PL_000004', 'RIX', true, SeatManager::generatePlaneSeats(26)),
    new Plane('PL_000005', 'LTN', true, SeatManager::generatePlaneSeats(26)),
  ], [
    // 'RIX' -> 'LTN'
    new Flight('FL_000001', 'PL_000001', 'RIX', 'LTN',
    strtotime('2022-10-18 19:00:00'),
    strtotime('2022-10-18 21:00:00'),
    []),
    // 'LTN' -> 'RIX'
    new Flight('FL_000002', 'PL_000002', 'LTN', 'RIX',
    strtotime('2023-11-18 05:00:00'),
    strtotime('2023-11-18 07:00:00'),
    [])
  ]);

// $tickets = TicketGenerator::generateTicketsForEachSeat(
//   $airportsDB->getFlights()
// );
// find specific plane data object by id (example) 
print('<pre>');
var_dump($airportsDB->getAirports());
// var_dump(AM::findBy_id($planes, 'PL_000001'));
// var_dump($airportsDB);
print('</pre>');
<?php

/**
 * IATA: International Air Transport Association code, 
 *    for example, 'RIX' for 'Riga Airport'
 * UNIX: Unix time is a way of representing a timestamp by 
 *    representing the time as the number of seconds since 
 *    January 1st, 1970 at 00:00:00 UTC.
 */

require_once('./Project/Airport/Flight/FlightAccessors.php');

class Flight {

  /**
   * Setter and getter functions for Flight class variables
   */
  use FlightAccessors;

  /**
   * @var string Flight ID.
   */
  protected string $_id;

  /**
   * @var string Planes ID.
   */
  protected string $_id_plane;

  /**
   * @var string Deprature location as IATA.
   */
  protected string $departureIATA;

  /**
   * @var string Arrival location as IATA.
   */
  protected string $arrivalIATA;

  /**
   * @var int Departure time as UNIX.
   */
  protected int $departureUNIX;

  /**
   * @var int Arrival time as UNIX
   */
  protected int $arrivalUNIX;

  /**
   * @var array List of staff members for flight as array of objects.
   */
  protected array $staffList;

  /**
   * @var string Auto-generated (concatenated) from `$departureIATA` and `$arrivalIATA`
   */
  protected string $flightName;

  /**
   * __construct
   *
   * @return void
   */
  public function __construct(
    string $_id,
    string $_id_plane,
    string $departureIATA,
    string $arrivalIATA,
    int $departureUNIX,
    int $arrivalUNIX,
    array $staffList,
  ) {
    $this->_id = $_id;
    $this->_id_plane = $_id_plane;
    $this->departureIATA = $departureIATA;
    $this->arrivalIATA = $arrivalIATA;
    $this->departureUNIX = $departureUNIX;
    $this->arrivalUNIX = $arrivalUNIX;
    $this->staffList = $staffList;

    $this->generateFlightName();
    $this->printInitLog();
  }

  /**
   * @return void Generates and stores the `$flightName` from `$departureIATA` and $arrivalIATA`
   */
  private function generateFlightName(): void {
    $this->flightName = $this->departureIATA . ' -> ' . $this->arrivalIATA;
  }

  /**
   * @return void Prints message after initialisation
   */
  private function printInitLog() {
    print('Flight "' . $this->_id . '" [' . $this->flightName . '] initialised. <br/ >');
  }
}
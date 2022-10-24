<?php

namespace src\models\AirportClasses\Airport\classes\Airport;

// these 2 are used in PHPDOCS only:
use src\models\AirportClasses\Plane\classes\Plane\Plane;
use src\models\AirportClasses\Flight\classes\Flight\Flight;

class Airport {

  /**
   * IATA code. IATA stands for "International Air Transport Association"
   * @var string
   */
  protected string $IATA;

  /**
   * @var array
   */
  protected array $departureflightsIds;

  /**
   * @var array
   */
  protected array $arrivalFlightIds;

  /**
   * __construct
   *
   * @param  string $IATA
   * @param  array $departureflightsIds
   * @param  array $arrivalFlightIds
   * @return void
   */
  public function __construct(
    string $IATA,
    array $departureflightsIds = [],
    array $arrivalFlightIds = [],
  ) {
    $this->IATA = $IATA;
    $this->departureflightsIds = $departureflightsIds;
    $this->arrivalFlightIds = $arrivalFlightIds;

    print('> The airport [' . $this->IATA . '] initialised.' . PHP_EOL);
  }

  /**
   * Get the IATA code of airport
   */
  public function getIATA() {
    return $this->IATA;
  }

  /**
   * Get the value of departureflightsIds
   *
   * @return  array
   */
  public function getDepartureflightsIds() {
    return $this->departureflightsIds;
  }

  /**
   * Get the value of arrivalFlightIds
   *
   * @return  array
   */
  public function getArrivalFlightIds() {
    return $this->arrivalFlightIds;
  }

  /**
   * Adds departure flight Id to `departureflightsIds` array
   *
   * @param  string  $departureflightsIds
   * @return  self
   */
  public function addDepartureflightId(string $departureflightId) {
    array_push($this->departureflightsIds, $departureflightId);

    return $this;
  }

  /**
   * Adds departure flight Id to `arrivalFlightIds` array
   *
   * @param  string $arrivalflightsId
   * @return self
   */
  public function addArrivalflightId(string $arrivalflightId) {
    array_push($this->arrivalFlightIds, $arrivalflightId);

    return $this;
  }

  /**
   * Adds departure flight Id to `departureflightsIds` array
   *
   * @param  string  $departureflightsIds
   * @return  self
   */
  public function removeDepartureflightId(string $departureflightId) {
    $flightIndex = array_search($departureflightId, $this->departureflightsIds);
    unset($this->departureflightsIds[$flightIndex]);

    return $this;
  }

  /**
   * Adds departure flight Id to `arrivalFlightIds` array
   *
   * @param  string $arrivalflightsId
   * @return self
   */
  public function removeArrivalflightId(string $arrivalflightId) {
    $flightIndex = array_search($arrivalflightId, $this->arrivalFlightIds);
    unset($this->arrivalFlightIds[$flightIndex]);

    return $this;
  }
}

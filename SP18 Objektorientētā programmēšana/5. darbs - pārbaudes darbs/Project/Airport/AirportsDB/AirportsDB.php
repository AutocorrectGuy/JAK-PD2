<?php

require_once('./Project/Airport/AirportsDB/AirportsDBAccessors.php');

class AirportsDB {

  /**
   * Setter and getter functions for AirportsDB class.
   */
  use AirportsDBAccessors;

  /**
   * @var Airport[]
   */
  protected array $airports;

  /**
   * @var Plane[]
   */
  protected array $planes;

  /**
   * @var Flight[]
   */
  protected array $flights;

  public function __construct(
    array $airports = [],
    array $planes = [],
    array $flights = []
  ) {
    $this->airports = $airports;
    $this->planes = $planes;
    $this->flights = $flights;

    $this->printInitLog();

    /**
     * After `$airports`, `$planes` and `$flights` initialisation
     * they are not connected - they does not carry each others ids, 
     * so ids are connected here by copying them from one entity to another.
     */
    $this->initPlanesIds();
    $this->initFlightIds();

    print('<pre>');
    // var_dump(array_map(fn($flight) => $flight->get_id(), $this->flights));
    print('</pre>');
  }

  /**
   * @return void Prints message after initialisation
   */
  private function printInitLog() {
    print('AirprtsDB initialised successfully. <br/ >');
  }

  /**
   * @return void copies each initialised planes _id into relevant airport
   */
  public function initPlanesIds() {
    foreach ($this->planes as $plane) {
      $planeIATA = $plane->getIATA();
      $this->airports[$planeIATA]->set_id_planes(
        [...$this->airports[$planeIATA]->get_id_planes(), $plane->get_id()]
      );
    }
  }

  /**
   * @return void copies each initialised flights _id into relevant airport.
   * Does this only for departure flights, because there is no reason to make
   * duplicates by copying fligts `_id` two times. 
   */
  public function initFlightIds() {
    foreach ($this->flights as $flight) {
      $deartureIATA = $flight->getDepartureIATA();
      $this->airports[$deartureIATA]->set_id_departure_flights(
        [...$this->airports[$deartureIATA]->get_id_departure_flights(), $flight->get_id()]
      );
    }
  }
}
<?php

require_once('./Project/Airport/AirportAccessors.php');

class Airport {

  /**
   * Setter and getter functions for Airport class vairables
   */
  use AirportAccessors;

  /**
   * @var string 
   */
  protected string $airportName;

  /**
   * @var string 
   */
  protected string $IATA;

  /**
   * @var array
   */
  protected array $_id_passengers;

  /**
   * @var array
   */
  protected array $_id_employees;

  /**
   * @var array
   */
  protected array $_id_planes;

  /**
   * @var array
   */
  protected array $_id_departure_flights;

  /**
   * @var array
   */
  protected array $_id_arrival_flights;

  /**
   * @var array
   */
  protected array $_id_tickets;

  public function __construct(
    string $airportName,
    string $IATA,
    array $_id_passengers = [],
    array $_id_employees = [],
    array $_id_planes = [],
    array $_id_departure_flights = [],
    array $_id_arrival_flights = [],
    array $_id_tickets = [],
  ) {
    $this->airportName = $airportName;
    $this->IATA = $IATA;
    $this->_id_passengers = $_id_passengers;
    $this->_id_employees = $_id_employees;
    $this->_id_planes = $_id_planes;
    $this->_id_departure_flights = $_id_departure_flights;
    $this->_id_arrival_flights = $_id_arrival_flights;
    $this->_id_tickets = $_id_tickets;
  }
}
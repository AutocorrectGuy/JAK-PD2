<?php

namespace src\models\AirportClasses\Flight\classes\Flight;

use src\models\AirportClasses\Flight\classes\FlightManager\FlightManager;
use src\models\AirportClasses\Plane\classes\Plane\Plane;
use src\models\AirportClasses\Ticket\classes\Ticket\Ticket;
use src\models\AirportClasses\Ticket\traits\TicketManagerTrait\TicketManagerTrait;

class Flight extends FlightManager {

  // Creates and manages tickets for flight
  use TicketManagerTrait;

  /**
   * @var string #id of this Flight.
   */
  protected string $id;

  /**
   * @var Plane Plane used in this flight (contains all props:
   * #id, seats, etc).
   */
  protected Plane $plane;

  /**
   * @var string Flight/plane departure airport IATA code.
   */
  protected string $departureIATA;

  /**
   * @var string Flight/plane arrival airport IATA code.
   */
  protected string $arrivalIATA;

  /**
   * @var int FLight/plane departure time in UNIX.
   */
  protected int $departureUNIX;

  /**
   * @var int FLight/plane arrival time in UNIX.
   */
  protected int $arrivalUNIX;

  /**
   * @var string First class ticket price in eur.
   */
  protected string $firstClassTicketPrice;

  /**
   * @var string Reguar ticket price in eur.
   */
  protected string $regularTicketPrice;

  /**
   * __construct
   *
   * @param  string $id
   * @param  Plane $plane
   * @param  string $departureIATA
   * @param  string $arrivalIATA
   * @param  int $departureUNIX
   * @param  int $arrivalUNIX
   * @param  string $firstClassTicketPrice
   * @param  string $regularTicketPrice
   * @return void
   */
  public function __construct(
    string $id,
    Plane $plane,
    string $departureIATA,
    string $arrivalIATA,
    int $departureUNIX,
    int $arrivalUNIX,
    string $firstClassTicketPrice,
    string $regularTicketPrice,
    bool $generateTickets
  ) {
    $this->id = $id;
    $this->plane = $plane;
    $this->departureIATA = $departureIATA;
    $this->arrivalIATA = $arrivalIATA;
    $this->departureUNIX = $departureUNIX;
    $this->arrivalUNIX = $arrivalUNIX;
    $this->firstClassTicketPrice = $firstClassTicketPrice;
    $this->regularTicketPrice = $regularTicketPrice;

    /**
     * Generates and array of `Ticket` objects based on `Plane`
     * `Seats`
     */
    $generateTickets && $this->generateTickets(
      $this->id,
      $this->plane,
      $this->firstClassTicketPrice,
      $this->regularTicketPrice
    );

    print('Flight [' . $departureIATA . ' -> ' . $arrivalIATA
      . '] initialised.' . PHP_EOL);
  }

  /**
   * Get #id of this Flight.
   *
   * @return  string
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Get `Plane` object used in this flight
   *
   * @return  Plane
   */
  public function getPlane() {
    return $this->plane;
  }

  /**
   * Get flight/plane departure airport IATA code.
   *
   * @return  string
   */
  public function getDepartureIATA() {
    return $this->departureIATA;
  }

  /**
   * Set flight/plane departure airport IATA code.
   *
   * @param  string  $departureIATA  Flight/plane departure airport IATA code.
   *
   * @return  self
   */
  public function setDepartureIATA(string $departureIATA) {
    $this->departureIATA = $departureIATA;

    return $this;
  }

  /**
   * Get flight/plane arrival airport IATA code.
   *
   * @return  string
   */
  public function getArrivalIATA() {
    return $this->arrivalIATA;
  }

  /**
   * Set flight/plane arrival airport IATA code.
   *
   * @param  string  $arrivalIATA  Flight/plane arrival airport IATA code.
   *
   * @return  self
   */
  public function setArrivalIATA(string $arrivalIATA) {
    $this->arrivalIATA = $arrivalIATA;

    return $this;
  }

  /**
   * Get fLight/plane departure time in UNIX.
   *
   * @return  int
   */
  public function getDepartureUNIX() {
    return $this->departureUNIX;
  }

  /**
   * Set fLight/plane departure time in UNIX.
   *
   * @param  int  $departureUNIX  FLight/plane departure time in UNIX.
   *
   * @return  self
   */
  public function setDepartureUNIX(int $departureUNIX) {
    $this->departureUNIX = $departureUNIX;

    return $this;
  }

  /**
   * Get fLight/plane arrival time in UNIX.
   *
   * @return  int
   */
  public function getArrivalUNIX() {
    return $this->arrivalUNIX;
  }

  /**
   * Set fLight/plane arrival time in UNIX.
   *
   * @param  int  $arrivalUNIX  FLight/plane arrival time in UNIX.
   *
   * @return  self
   */
  public function setArrivalUNIX(int $arrivalUNIX) {
    $this->arrivalUNIX = $arrivalUNIX;

    return $this;
  }

  /**
   * Get tickets
   *
   * @return  Ticket[]
   */
  public function getTickets() {
    return $this->tickets;
  }

  /**
   * Set tickets
   *
   * @param  Ticket[]  $tickets  tickets
   *
   * @return  self
   */
  public function setTickets(array $tickets) {
    $this->tickets = $tickets;

    return $this;
  }

  /**
   * Get first class ticket price in eur.
   *
   * @return  string
   */
  public function getFirstClassTicketPrice() {
    return $this->firstClassTicketPrice;
  }

  /**
   * Get reguar ticket price in eur.
   *
   * @return  string
   */
  public function getRegularTicketPrice() {
    return $this->regularTicketPrice;
  }
}

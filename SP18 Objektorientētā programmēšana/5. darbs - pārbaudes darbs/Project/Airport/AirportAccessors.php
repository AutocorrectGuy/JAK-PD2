<?php

trait AirportAccessors {
  /**
   * Get the value of airportName
   *
   * @return  string
   */
  public function getAirportName() {
    return $this->airportName;
  }

  /**
   * Set the value of airportName
   *
   * @param  string  $airportName
   *
   * @return  self
   */
  public function setAirportName(string $airportName) {
    $this->airportName = $airportName;

    return $this;
  }

  /**
   * Get the value of IATA
   *
   * @return  string
   */
  public function getIATA() {
    return $this->IATA;
  }

  /**
   * Set the value of IATA
   *
   * @param  string  $IATA
   *
   * @return  self
   */
  public function setIATA(string $IATA) {
    $this->IATA = $IATA;

    return $this;
  }

  /**
   * Get the value of _id_passengers
   *
   * @return  array
   */
  public function get_id_passengers() {
    return $this->_id_passengers;
  }

  /**
   * Set the value of _id_passengers
   *
   * @param  array  $_id_passengers
   *
   * @return  self
   */
  public function set_id_passengers(array $_id_passengers) {
    $this->_id_passengers = $_id_passengers;

    return $this;
  }

  /**
   * Get the value of _id_employees
   *
   * @return  array
   */
  public function get_id_employees() {
    return $this->_id_employees;
  }

  /**
   * Set the value of _id_employees
   *
   * @param  array  $_id_employees
   *
   * @return  self
   */
  public function set_id_employees(array $_id_employees) {
    $this->_id_employees = $_id_employees;

    return $this;
  }

  /**
   * Get the value of _id_planes
   *
   * @return  array
   */
  public function get_id_planes() {
    return $this->_id_planes;
  }

  /**
   * Set the value of _id_planes
   *
   * @param  array  $_id_planes
   *
   * @return  self
   */
  public function set_id_planes(array $_id_planes) {
    $this->_id_planes = $_id_planes;

    return $this;
  }

  /**
   * Get the value of _id_departure_flights
   *
   * @return  array
   */
  public function get_id_departure_flights() {
    return $this->_id_departure_flights;
  }

  /**
   * Set the value of _id_departure_flights
   *
   * @param  array  $_id_departure_flights
   *
   * @return  self
   */
  public function set_id_departure_flights(array $_id_departure_flights) {
    $this->_id_departure_flights = $_id_departure_flights;

    return $this;
  }

  /**
   * Get the value of _id_arrival_flights
   *
   * @return  array
   */
  public function get_id_arrival_flights() {
    return $this->_id_arrival_flights;
  }

  /**
   * Set the value of _id_arrival_flights
   *
   * @param  array  $_id_arrival_flights
   *
   * @return  self
   */
  public function set_id_arrival_flights(array $_id_arrival_flights) {
    $this->_id_arrival_flights = $_id_arrival_flights;

    return $this;
  }

  /**
   * Get the value of _id_tickets
   *
   * @return  array
   */
  public function get_id_tickets() {
    return $this->_id_tickets;
  }

  /**
   * Set the value of _id_tickets
   *
   * @param  array  $_id_tickets
   *
   * @return  self
   */
  public function set_id_tickets(array $_id_tickets) {
    $this->_id_tickets = $_id_tickets;

    return $this;
  }
}
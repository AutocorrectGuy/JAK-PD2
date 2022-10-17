<?php

trait FlightAccessors {
  /**
   * Get flight ID.
   *
   * @return  string
   */
  public function get_id() {
    return $this->_id;
  }

  /**
   * Set flight ID.
   *
   * @param  string  $_id  Flight ID.
   *
   * @return  self
   */
  public function set_id(string $_id) {
    $this->_id = $_id;

    return $this;
  }

  /**
   * Get planes ID.
   *
   * @return  string
   */
  public function get_id_plane() {
    return $this->_id_plane;
  }

  /**
   * Set planes ID.
   *
   * @param  string  $_id_plane  Planes ID.
   *
   * @return  self
   */
  public function set_id_plane(string $_id_plane) {
    $this->_id_plane = $_id_plane;

    return $this;
  }

  /**
   * Get deprature location as IATA.
   *
   * @return  string
   */
  public function getDepartureIATA() {
    return $this->departureIATA;
  }

  /**
   * Set deprature location as IATA.
   *
   * @param  string  $departureIATA  Deprature location as IATA.
   *
   * @return  self
   */
  public function setDepartureIATA(string $departureIATA) {
    $this->departureIATA = $departureIATA;

    return $this;
  }

  /**
   * Get arrival location as IATA.
   *
   * @return  string
   */
  public function getArrivalIATA() {
    return $this->arrivalIATA;
  }

  /**
   * Set arrival location as IATA.
   *
   * @param  string  $arrivalIATA  Arrival location as IATA.
   *
   * @return  self
   */
  public function setArrivalIATA(string $arrivalIATA) {
    $this->arrivalIATA = $arrivalIATA;

    return $this;
  }

  /**
   * Get departure time as UNIX.
   *
   * @return  int
   */
  public function getDepartureUNIX() {
    return $this->departureUNIX;
  }

  /**
   * Set departure time as UNIX.
   *
   * @param  int  $departureUNIX  Departure time as UNIX.
   *
   * @return  self
   */
  public function setDepartureUNIX(int $departureUNIX) {
    $this->departureUNIX = $departureUNIX;

    return $this;
  }

  /**
   * Get arrival time as UNIX
   *
   * @return  int
   */
  public function getArrivalUNIX() {
    return $this->arrivalUNIX;
  }

  /**
   * Set arrival time as UNIX
   *
   * @param  int  $arrivalUNIX  Arrival time as UNIX
   *
   * @return  self
   */
  public function setArrivalUNIX(int $arrivalUNIX) {
    $this->arrivalUNIX = $arrivalUNIX;

    return $this;
  }

  /**
   * Get list of staff members for flight as array of objects.
   *
   * @return  array
   */
  public function getStaffList() {
    return $this->staffList;
  }

  /**
   * Set list of staff members for flight as array of objects.
   *
   * @param  array  $staffList  List of staff members for flight as array of objects.
   *
   * @return  self
   */
  public function setStaffList(array $staffList) {
    $this->staffList = $staffList;

    return $this;
  }
}
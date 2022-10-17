<?php

trait PlaneAccessors {
  /**
   * Get the value of _id
   *
   * @return  string
   */
  public function get_id() {
    return $this->_id;
  }

  /**
   * Set the value of _id
   *
   * @param  string  $_id
   *
   * @return  self
   */
  public function set_id(string $_id) {
    $this->_id = $_id;

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
   * Get the value of isPlaneAvailable
   *
   * @return  bool
   */
  public function getIsPlaneAvailable() {
    return $this->isPlaneAvailable;
  }

  /**
   * Set the value of isPlaneAvailable
   *
   * @param  bool  $isPlaneAvailable
   *
   * @return  self
   */
  public function setIsPlaneAvailable(bool $isPlaneAvailable) {
    $this->isPlaneAvailable = $isPlaneAvailable;

    return $this;
  }

  /**
   * Get the value of reservedSeats
   *
   * @return  array
   */
  public function getReservedSeats() {
    return $this->reservedSeats;
  }

  /**
   * Set the value of reservedSeats
   *
   * @param  array  $reservedSeats
   *
   * @return  self
   */
  public function setReservedSeats(array $reservedSeats) {
    $this->reservedSeats = $reservedSeats;

    return $this;
  }

  /**
   * Get the value of reservedSeatsCount
   *
   * @return  int
   */
  public function getReservedSeatsCount() {
    return $this->reservedSeatsCount;
  }

  /**
   * Set the value of reservedSeatsCount
   *
   * @param  int  $reservedSeatsCount
   *
   * @return  self
   */
  public function setReservedSeatsCount(int $reservedSeatsCount) {
    $this->reservedSeatsCount = $reservedSeatsCount;

    return $this;
  }
}
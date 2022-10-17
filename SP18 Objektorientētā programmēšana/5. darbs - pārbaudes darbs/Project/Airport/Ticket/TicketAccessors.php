<?php

trait TicketAccessors {
  /**
   * Get _id
   *
   * @return  string
   */
  public function get_id() {
    return $this->_id;
  }

  /**
   * Set _id
   *
   * @param  string  $_id  _id
   *
   * @return  self
   */
  public function set_id(string $_id) {
    $this->_id = $_id;

    return $this;
  }

  /**
   * Get _flightId
   *
   * @return  string
   */
  public function get_flightId() {
    return $this->_flightId;
  }

  /**
   * Set _flightId
   *
   * @param  string  $_flightId  _flightId
   *
   * @return  self
   */
  public function set_flightId(string $_flightId) {
    $this->_flightId = $_flightId;

    return $this;
  }

  /**
   * Get _seatId
   *
   * @return  string
   */
  public function get_seatId() {
    return $this->_seatId;
  }

  /**
   * Set _seatId
   *
   * @param  string  $_seatId  _seatId
   *
   * @return  self
   */
  public function set_seatId(string $_seatId) {
    $this->_seatId = $_seatId;

    return $this;
  }

  /**
   * Get ticketPrice
   *
   * @return  string
   */
  public function getTicketPrice() {
    return $this->ticketPrice;
  }

  /**
   * Set ticketPrice
   *
   * @param  string  $ticketPrice  ticketPrice
   *
   * @return  self
   */
  public function setTicketPrice(string $ticketPrice) {
    $this->ticketPrice = $ticketPrice;

    return $this;
  }
}
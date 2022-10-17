<?php

require_once('./Project/Airport/Ticket/TicketAccessors.php');

class Ticket {

  use TicketAccessors;
  /**
   * _id
   *
   * @var string
   */
  protected string $_id;
  /**
   * _flightId
   *
   * @var string
   */
  protected string $_flightId;
  /**
   * _seatId
   *
   * @var string
   */
  protected string $_seatId;
  /**
   * ticketPrice
   *
   * @var string
   */
  protected string $ticketPrice;
  
  /**
   * Creates a new `Ticket` object
   * @return void 
   */
  public function __construct(
    string $_id,
    string $_flightId,
    string $_seatId,
    string $ticketPrice
  ) {
    $this->_id = $_id;
    $this->_flightId = $_flightId;
    $this->_seatId = $_seatId;
    $this->ticketPrice = $ticketPrice;
  }
}
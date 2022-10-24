<?php

namespace src\models\AirportClasses\Ticket\traits\TicketManagerTrait;

use src\models\AirportClasses\Plane\classes\Plane\Plane;
use src\models\AirportClasses\Ticket\classes\Ticket\Ticket;

/**
 * TicketManagerTrait
 * 
 * Used to generate and store tickets.
 * 
 * Used in `Flight` class. When `Flight` is initialized, 
 * tickets can be generated (by users choice). 
 */
trait TicketManagerTrait {

  /**
   * @var Ticket[] Array of `Ticket` objects.
   */
  protected array $tickets;

  /**
   * generateTickets
   * 
   * Generates array of `Ticket` objects - for each seat one ticket. 
   * 
   * @param  array $planeSeats 3d array of `Plane` `$seats`.
   * @return void
   */
  public function generateTickets(
    string $flightId,
    Plane $plane,
    string $firstClassPrice,
    string $regularPrice
  ) {
    foreach ($plane->getSeats() as $rowNo => $rowSeats)
      foreach ($rowSeats as $seat)
        $this->tickets[] = new Ticket(
          $flightId . '-' . $seat['$seatNo'],
          $flightId,
          $rowNo + 1,
          $seat['$seatNo'],
          $seat['$firstClass'] ? $firstClassPrice : $regularPrice
        );
    print('> Generated ' . sizeof($this->tickets)
      . ' tickets for flight #' . $flightId . PHP_EOL);
  }

  /**
   * Returns an array of `Ticket` objects.
   *
   * @return  Ticket[]
   */
  public function getTickets() {
    return $this->tickets;
  }
}
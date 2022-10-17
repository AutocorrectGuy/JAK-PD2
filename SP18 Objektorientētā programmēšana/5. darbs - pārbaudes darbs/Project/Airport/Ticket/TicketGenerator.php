<?php

abstract class TicketGenerator {
  /**
   * Generates ticket object for each seat in plane. 
   *
   * @param  array $seats
   * @return array
   */
  public static function generateTicketsForEachSeat(array $seats): array {
    var_dump($seats);

    return [];
  }
}
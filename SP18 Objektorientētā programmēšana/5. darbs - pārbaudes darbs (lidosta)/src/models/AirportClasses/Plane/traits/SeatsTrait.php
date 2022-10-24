<?php

namespace src\models\AirportClasses\Plane\traits\SeatsTrait;

trait SeatsTrait {

  /**
   * @var array 3d array of Plane seats: 
   *  array seat rows; each seat;
   * Seat contains
   * variables: string `$seatNo` and bool `$firstClass`.
   */
  protected array $seats = [];

  /**
   * Generates and stores 3d array of plane seats in `$seats`.
   * Defaults are set for airplane model 'Airbus A320' if no parameters are given.
   *
   * @param  string $planeModelName Plane model name is necessary to know how to calculate
   * 2d row of seats #ids (`$seats`). 
   * @param  int $maxRows Row count for the seats.
   * @param  int $firstClassRowCount `First Class` (first rows `n` rows) count.
   * @param  int $firstClassRowLength `First Class` (first rows `n` rows) row length.
   * @param  int $regularRowLength `Regular rows` (rows after First Class rows) length.
   * @return void 
   */
  protected function generatePlaneSeats(
    string $planeModelName = 'Airbus A320',
    int $maxRows = 26,
    int $firstClassRowCount = 4,
    int $firstClassRowLength = 4,
    int $regularRowLength = 6,
  ) {

    // Don't generate any ticketts if given `$planeModelName` isn't valid.
    if ($planeModelName !== 'Airbus A320') {
      print('There is no such model of airplanes here! Please choose '
        . '"Airbus A320"! Seats have been left empty!');

      return;
    }

    // generates seat rows
    foreach ($this->seats = range(0, $maxRows - 1) as $rowKey => $row) {
      $seatsCount = $rowKey + 1 < $firstClassRowCount
        ? $firstClassRowLength
        : $regularRowLength;
      // generates each seat entry
      foreach ($tempRow = range(0, $seatsCount - 1) as $seatKey => $seat)
        $tempRow[$seatKey] = [
          '$seatNo' => chr(65 + $seatKey) . $rowKey + 1,
          '$firstClass' => $seatsCount === $firstClassRowCount
        ];
      $this->seats[$rowKey] = $tempRow;
    }
  }

  /**
   * Get 3d array of Plane seats.
   *
   * @return  array
   */
  public function getSeats() {
    return $this->seats;
  }
}

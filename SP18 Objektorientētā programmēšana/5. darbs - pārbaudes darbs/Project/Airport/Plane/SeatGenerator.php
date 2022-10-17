<?php

trait SeatManager {

  public static function generatePlaneSeats(
    int $maxRows,
    int $fcRowCount = 4,
    int $fcRowLength = 4,
    int $regularRowLength = 6
  ) {
    $generateSeatRow = function (int &$i, int $rowLength) {
      $j = 0;
      return array_reduce(range(0, $rowLength),
        function ($acc2, $curr2) use (&$i, &$j) {
          return [...$acc2, (chr(65 + $j++) . $i) => null];
        }
        , []);
    };

    $i = 0;
    return array_reduce(range(0, $maxRows),
      function ($acc, $curr) use (&$i, &$j, $fcRowCount, $fcRowLength, $regularRowLength, $generateSeatRow) {
        return [...$acc, ('row' . $i++ + 1) =>
            $generateSeatRow($i, $i < $fcRowCount ? $fcRowLength : $regularRowLength)];
      }, []);
  }

  public static function prettyPrintSeats(array $seats) {
    print('<table>');
    foreach ($seats as $rowId => $seatsRow) {
      print('<tr>');
      foreach ($seatsRow as $seatId => $reservedPersonId) {
        print('<td>');
        print($seatId . ': ' . (!$reservedPersonId ? '--------' : $reservedPersonId));
        print('</td>');
      }
      print('</tr>');
    }
    print('</table>');
  }
}
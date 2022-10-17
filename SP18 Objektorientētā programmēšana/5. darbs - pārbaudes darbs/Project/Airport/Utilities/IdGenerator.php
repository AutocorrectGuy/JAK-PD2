<?php

trait IdGenerator
{
  /**
   * Generates an unique ID based on `idInitials` and `$idNo`.
   *
   * @param  string $idInitials `$arr['initials']`. For example, 'EM' for `$employees`.
   * @param  int $idNo ID number of specific entity.
   * @return void
   */
  protected static array $allIdNumbers = [];

  public static function generateId(string $idInitials, int $idNo): string
  {
    if(array_key_exists($idInitials, self::allIdNumbers)) {

    }

    $maxNumbersInId = 6;
    $leadingZeros = str_repeat('0', $maxNumbersInId - strlen(strval($idNo)));
    return $idInitials . $leadingZeros . $idNo;
  }
}
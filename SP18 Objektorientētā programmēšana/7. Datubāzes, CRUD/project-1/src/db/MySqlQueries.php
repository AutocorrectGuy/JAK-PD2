<?php

namespace App\db;

class MySqlQueries {

  public static function insert(array $data, string $table):string {
    $columns = join(', ', array_map(fn($key) => '`' . $key . '`', array_keys($data)));
    $values = join(', ', array_map(fn($key) => '"' . $key . '"', array_values($data)));
    return 'INSERT INTO `' . $table . '` (' . $columns . ') values (' . $values . ');';
  } 

  public static function deleteFrom(string $table) {
    return 'DELETE ';
  }
}
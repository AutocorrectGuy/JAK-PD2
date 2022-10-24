<?php

namespace src\models\StorageManager\traits\JsonParser;

/**
 * JsonParser
 * 
 * Method(s) which convert JSON file content to php array. 
 */
trait JsonParser {

  /**
   * parseJsonFromFile  
   *
   * @param  mixed $filePath Path of JSON file.
   * @return array Returns php array of parsed JSON data.
   */
  public static function parseJsonFromFile(string $filePath) {
    return json_decode(file_get_contents($filePath), true);
  }
}

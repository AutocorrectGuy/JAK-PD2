<?php

namespace App\db;

use mysqli;

class Connector {

  const PATH_MYSQL_CREDENTIALS = './db/mysqlCredentials.json';

  /**
   * connection
   * @var mysqli Connection to mysql database.
   */
  public mysqli $connection;

  /**
   * success
   * @var bool Connetion success indicator. False if connection fails.
   */
  public bool $success = false;

  /**
   * openConnection 
   * Creates connection to mysql. 
   * Tries to open connection using `PATH_MYSQL_CREDENTIALS` path credentials. 
   * @return void
   */
  public function __construct() {
    $credentials = $this->parseJsonCredentials();
    $credentials
      ? $this->openConnection(...$credentials)
      : null;
  }

  /**
   * openConnection 
   * Creates connection to mysql. Modifies `$connection` and `$success`.
   * @param  string $hostname
   * @param  string $username
   * @param  string $password
   * @param  string $database
   * @return void
   */
  public function openConnection(string $hostname, string $username, string $password, string $database
  ): void {

    try {
      $this->connection = new mysqli($hostname, $username, $password, $database) ?? null;
      $this->success = true;
    } catch (\Throwable $th) {
      $this->success = false;
    }
  }

  /**
   * closeConnection
   * Closes connection to mysql. Modifies `$connection` and `$success`.
   * @return void
   */
  public function closeConnection(): void {
    $this->connection->close();
    $this->success = false;
  }

  public function queryToArray(string $query): array {
    if (!$this->success)
      return [];

    $result = mysqli_query($this->connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

  /**
   * parseJsonCredentials
   * Reads json file with give mysql credentials and converts it to array.
   * @return array|null
   */
  public function parseJsonCredentials(): array |null {
    $fileContents = file_get_contents(self::PATH_MYSQL_CREDENTIALS);
    return $fileContents
      ? json_decode($fileContents, true)
      : null;
  }
}
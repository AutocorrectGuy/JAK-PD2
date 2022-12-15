<?php

namespace App\controllers;

use App\core\Application;
use App\db\Connector;

class SubmitController {

  public function handleSubmit() {

    $conn = new Connector();

    $body = Application::$app->request->getBody();
    foreach ($body as $key => $value)
      $body[$key] = mysqli_real_escape_string($conn->connection, $value);

    if (!$conn->success) {
      Application::$app->router->renderPage('_404');
      return;
    }

    $columns = join(', ', array_map(fn($key) => '`' . $key . '`', array_keys($body)));
    $values = join(', ', array_map(fn($key) => '"' . $key . '"', array_values($body)));
    $queryString = 'INSERT INTO `salesman` (' . $columns . ') values (' . $values . ');';
    // print($queryString);

    // var_dump($queryString);
    // make query
    if(mysqli_query($conn->connection, $queryString)) {
      print($queryString);
      header('Location: /');
    } else {
      print('mysqli error: ' . mysqli_error($conn->connection));
    }
  }
}
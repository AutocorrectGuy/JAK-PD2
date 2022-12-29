<?php

namespace App\controllers;

use App\core\Application;
use App\db\Connector;
use App\db\MySqlQueries;

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
    // make query
    if(mysqli_query($conn->connection, MySqlQueries::insert($body, 'salesman'))) {
      header('Location: /');
    } else {
      print('mysqli error: ' . mysqli_error($conn->connection));
    }
    $conn->closeConnection();
  }
}
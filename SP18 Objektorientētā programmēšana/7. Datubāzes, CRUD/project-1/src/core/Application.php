<?php

namespace App\core; 

class Application {
  public Router $router;
  public Request $request;
  public Response $response;
  public static Application $app;

  public function __construct() {
    $this->request = new Request();
    $this->response = new Response();
    $this->router = new Router($this->request, $this->response);
    self::$app = $this;
  }

  public function run() {
    print($this->router->resolve());
  }
}
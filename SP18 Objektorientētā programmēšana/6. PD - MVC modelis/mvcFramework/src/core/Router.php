<?php

namespace app\src\core;

class Router {

  public Request $request;
  protected array $routes = [
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => [],
  ];

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function get(string $path, callable|string $callback) {
    $this->routes['get'][$path] = $callback;
  }

  public function renderView(string $callback) {
    require_once(__DIR__ . '/../views/' . $callback . '.php');
  }

  public function resolve() {
    $path = $this->request->getPath();
    $method = $this->request->getMethod();

    $callback = $this->routes[$method][$path] ?? false;

    if(!$callback) {
      return "404 PAGE NOT FOUND";
    }

    return is_string($callback)
      ? $this->renderView($callback)
      : call_user_func($callback);
  }
}

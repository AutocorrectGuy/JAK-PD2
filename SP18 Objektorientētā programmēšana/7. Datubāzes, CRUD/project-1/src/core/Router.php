<?php

namespace App\core;

class Router extends Renderer {

  public Request $request;
  public Response $response;
  protected array $routes = [
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => [],
  ];

  public function __construct(Request $request, Response $response) {
    $this->request = $request;
    $this->response = $response;
  }

  public function get(string $path, callable|string|array $callback) {
    $this->routes['get'][$path] = $callback;
  }

  public function post(string $path, callable|string|array $callback) {
    $this->routes['post'][$path] = $callback;
  }

  public function resolve(): void {
    $path = $this->request->getPath();
    $method = $this->request->getMethod();
    $callback = $this->routes[$method][$path] ?? false;

    $this->render($callback, $this->response);
  }
}

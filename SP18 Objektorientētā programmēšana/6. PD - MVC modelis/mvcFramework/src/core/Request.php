<?php

namespace app\src\core;

class Request {
  public function getPath() {
    $path = $_SERVER['REQUEST_URI'] ?? '/';
    $position = strpos($path, '?') ?? false;

    return $position
      ? substr($path, 0, $position)
      : $path;
  }

  public function getMethod() {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
}
<?php

namespace App\core;

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
  
  /**
   * getBody
   * @return array Returns sanitized body array
   */
  public function getBody(): array {
    $body = [];
    
    if ($this->getMethod() === 'get') {
      foreach ($_GET as $key => $value)
        $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
    } else if ($this->getMethod() === 'post') {
      foreach ($_POST as $key => $value)
        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    return $body;
  }
}
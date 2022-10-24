<?php

spl_autoload_register(function ($class) {
  $class = join('/', array_slice(explode('\\', $class), 0, -1));
  require_once('./' . $class . '.php');
});

<?php
use app\src\core\Application;

require_once('../../vendor/autoload.php');

$app = new Application();

$app->router->get('/', 'Home');

$app->router->get('/contacts', function() {
  print('hello contacts');
});

$app->run();
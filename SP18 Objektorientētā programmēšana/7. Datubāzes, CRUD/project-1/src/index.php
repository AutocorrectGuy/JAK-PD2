<?php
use App\controllers\SubmitController;
use App\core\Application;

require_once(__DIR__ . '/vendor/autoload.php');

$app = new Application();
$app->router->get('/', 'Home');
$app->router->post('/handlesubmit', [SubmitController::class, 'handleSubmit']);
$app->run();

?>
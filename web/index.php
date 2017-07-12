<?php

ini_set('display_errors', 0);

require_once __DIR__ . '/../vendor/autoload.php';

$app = require APP_PATH . '/app.php';
require APP_PATH . '/config/prod.php';
require APP_PATH . '/controllers.php';
$app->run();

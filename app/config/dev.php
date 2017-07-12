<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// include the prod configuration
require APP_PATH . '/config/prod.php';

// enable the debug mode
$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => ROOT_PATH . '/var/log/app/dev.log',
));

$app->register(new WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => ROOT_PATH . '/var/cache/profiler',
));

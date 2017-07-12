<?php

// configure your app for the production environment

$app['twig.path'] = array(APP_PATH . '/templates');
$app['twig.options'] = array('cache' => ROOT_PATH . '/var/cache/twig');

<?php

use Silex\Provider\FormServiceProvider;

// Configure app for the production environment
$app['twig.path'] = array(APP_PATH . '/templates');
$app['twig.options'] = array('cache' => ROOT_PATH . '/var/cache/twig');

// Register locale provider
$app->register(new Silex\Provider\LocaleServiceProvider());

// Register and configure form provider
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.domains' => array(),
));

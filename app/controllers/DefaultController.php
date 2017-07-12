<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('default/index.html.twig', array());
})
->bind('homepage');

return $app;

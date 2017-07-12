<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

$console = new Application('Fast Resume', 'n/a');
$console->getDefinition()->addOption(
    new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', 'dev'));
$console->setDispatcher($app['dispatcher']);
$console
    ->register('my-command')
    ->setDefinition(array(// new InputOption('some-option', null, InputOption::VALUE_NONE, 'Some help'),
    ))
    ->setDescription('My command description')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        // do something
    });

return $console;

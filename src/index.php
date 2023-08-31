<?php

/**
 * Make sure we're importing the classes we're using
 */
use App\Application\Command\ExampleCommand;
use App\Framework\CommandBus\CommandBus;

/**
 * This is as close to "standard" as we have in PHP these days for autoloaders.
 * Whenever you're using Composer, this is the autoload file you'll include
 * and configure through your composer.json file.
 */
include __DIR__ . '/vendor/autoload.php';


/**
 * Create a new Command Bus instance
 */
$commandBus = new CommandBus();

/**
 * Create an example command instance
 */
$command = new ExampleCommand(message: 'hello, world');

/**
 * Dispatch the command to the bus
 */
$commandBus->handle($command);

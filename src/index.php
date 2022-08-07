<?php

/**
 * This example file just creates a Command Bus and issues a command that gets handled
 */

use App\Application\Command\ExampleCommand;
use App\Framework\CommandBus\CommandBus;

include __DIR__ . '/autoloader.php';

header('content-type: text/plain');

echo 'Creating Command Bus'.PHP_EOL;
$commandBus = new CommandBus();

echo 'Creating Command'.PHP_EOL;
$command = new ExampleCommand(message: 'hello, world');

echo 'Issuing Command'.PHP_EOL;
$commandBus->handle($command);

echo 'Done'.PHP_EOL;

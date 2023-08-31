# command-bus
A simple implementation of a Command Bus, useful in Layered Architectures for separating concerns between layers


## example

```php
// Replace ExampleCommand with your own Commands
use App\Application\Command\ExampleCommand;
use App\Framework\CommandBus\CommandBus;

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
```
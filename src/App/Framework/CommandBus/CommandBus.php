<?php

namespace App\Framework\CommandBus;

use App\Framework\CommandBus\Contracts\Command;
use App\Framework\CommandBus\Contracts\CommandHandler;
use InvalidArgumentException;

class CommandBus
{
    public function handle(Command $command): void
    {
        // Infer a handler class by appending "handler" to the command class name
        $handler = $this->getHandlerClassName($command::class);

        if(! class_exists($handler)) {
            throw new InvalidArgumentException('Handler class does not exist');
        }

        $handler = new $handler;

        if(! $handler instanceof CommandHandler) {
            throw new InvalidArgumentException('Handler not instance of CommandHandler');
        }

        $handler->handle($command);
    }

    public function getHandlerClassName(string $commandClassName): string
    {
        return $commandClassName . 'Handler';
    }
}

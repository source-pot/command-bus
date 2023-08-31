<?php

namespace App\Framework\CommandBus;

use App\Framework\CommandBus\Contracts\Command;
use App\Framework\CommandBus\Contracts\CommandHandler;
use InvalidArgumentException;

class CommandBus
{
    public function handle(Command $command): void
    {
        $handlerClassName = $this->getHandlerClassName($command::class);

        $handler = $this->instantiateHandlerClass($handlerClassName);

        $handler->handle($command);
    }

    /**
     * Infers a handler class by appending "handler" to the command class name
     */
    private function getHandlerClassName(string $commandClassName): string
    {
        return $commandClassName . 'Handler';
    }

    /**
     * @throws InvalidArgumentException If the handler class doesn't exist, or is not a CommandHandler
     */
    private function instantiateHandlerClass(string $className): CommandHandler
    {
        if(! class_exists($className)) {
            throw new InvalidArgumentException('Handler class does not exist');
        }

        $handler = new $className;

        if(! $handler instanceof CommandHandler) {
            throw new InvalidArgumentException('Handler not instance of CommandHandler');
        }

        return $handler;
    }

}

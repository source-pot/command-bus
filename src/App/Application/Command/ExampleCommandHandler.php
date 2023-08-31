<?php

namespace App\Application\Command;

use App\Framework\CommandBus\Contracts\CommandHandler;

final class ExampleCommandHandler implements CommandHandler
{
    public function handle(ExampleCommand $command): void
    {
        echo '>> ' . $command->message . PHP_EOL;
    }
}
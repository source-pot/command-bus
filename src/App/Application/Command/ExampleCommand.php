<?php

namespace App\Application\Command;

use App\Framework\CommandBus\Contracts\Command;

final readonly class ExampleCommand implements Command
{
    public function __construct(
        public string $message
    ) {
        //
    }
}

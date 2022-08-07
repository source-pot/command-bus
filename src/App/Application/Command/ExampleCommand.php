<?php

namespace App\Application\Command;

use App\Framework\CommandBus\Command;

class ExampleCommand implements Command
{
    public function __construct(public readonly string $message)
    {
    }
}

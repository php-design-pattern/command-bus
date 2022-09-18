<?php

declare(strict_types=1);

namespace DesignPattern\CommandBus;

use DesignPattern\CQRS\Command\CommandInterface;

interface CommandBusInterface
{
    public function handle(CommandInterface $command): void;
}

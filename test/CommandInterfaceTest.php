<?php

namespace DesignPatternTest\CommandBus;

use DesignPattern\CommandBus\CommandBusInterface;
use PHPUnit\Framework\TestCase;

use function interface_exists;

class CommandBusInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function interfaceExist()
    {
        $this->assertTrue(interface_exists(CommandBusInterface::class));
    }
}

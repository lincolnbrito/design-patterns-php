<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Engine;
use PHPUnit\Framework\TestCase;

class TruckBuilderTest extends TestCase
{
    public function testCanAddEngine()
    {
        $truckBuilder = new TruckBuilder();
        $truckBuilder->createVehicle();
        $truckBuilder->addEngine();

        $this->assertInstanceOf(Engine::class, $truckBuilder->getVehicle()->getPart('truckEngine'));

    }
}
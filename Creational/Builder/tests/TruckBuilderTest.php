<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use PHPUnit\Framework\TestCase;

class TruckBuilderTest extends TestCase
{
    private $builder;

    public function setUp()
    {
        $this->builder = new TruckBuilder();
    }

    public function testCanAddEngine()
    {
        $this->builder->createVehicle();
        $this->builder->addEngine();

        $this->assertInstanceOf(Engine::class, $this->builder->getVehicle()->getPart('truckEngine'));
    }

    public function testCanAddDoors()
    {
        $this->builder->createVehicle();
        $this->builder->addDoors();

        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('rightDoor'));
        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('leftDoor'));
    }
}
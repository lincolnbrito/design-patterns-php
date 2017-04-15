<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use PHPUnit\Framework\TestCase;

class TruckBuilderTest extends TestCase
{
    private $builder;
    private $truck;

    public function setUp()
    {
        $this->builder = new TruckBuilder();
        $this->builder->createVehicle();
    }

    public function testCanAddEngine()
    {
        $this->builder->addEngine();

        $this->assertInstanceOf(Engine::class, $this->builder->getVehicle()->getPart('truckEngine'));
    }

    public function testCanAddDoors()
    {
        $this->builder->addDoors();

        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('rightDoor'));
        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('leftDoor'));
    }

    public function testCanAddWheels()
    {
        $this->builder->addWheels();

        $this->assertInstanceOf(Wheel::class, $this->builder->getVehicle()->getPart('wheelLF'));
    }
}
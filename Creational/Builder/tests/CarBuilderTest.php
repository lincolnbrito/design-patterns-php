<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use PHPUnit\Framework\TestCase;

class CarBuilderTest extends TestCase
{
    /**
     * @var CarBuilder
     */
    private $builder;

    public function setUp()
    {
        $this->builder = new CarBuilder();
        $this->builder->createVehicle();
    }

    public function testCanAddEngine()
    {
        $this->builder->addEngine();

        $this->assertInstanceOf(Engine::class, $this->builder->getVehicle()->getPart('engine'));
    }

    public function testCanAddDoors()
    {
        $this->builder->addDoors();

        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('rightDoor'));
        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('leftDoor'));
        $this->assertInstanceOf(Door::class, $this->builder->getVehicle()->getPart('trunkLid'));
    }

    public function testCanAddWheels()
    {
        $this->builder->addWheels();

        $this->assertInstanceOf(Wheel::class, $this->builder->getVehicle()->getPart('wheelLF'));
    }
}
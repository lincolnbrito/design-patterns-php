<?php

namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{

    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
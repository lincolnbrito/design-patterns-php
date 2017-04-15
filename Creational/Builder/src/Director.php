<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

/**
 * Director é parte do padrão builder. Ele conhece a interface do builder
 * e constrói um objeto complexo com ajuda do builder.
 * Você também pode injetar muitos builders ao invés de um para constuir objetos mais complexos.
 *
 * Class Director
 * @package DesignPatterns\Creational\Builder
 */
class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheels();

        return $builder->getVehicle();
    }
}
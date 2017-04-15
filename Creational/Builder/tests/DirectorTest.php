<?php

namespace DesignPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{

    public function testCanBuildTruck()
    {
        $trackBuilder = new TruckBuilder();

    }

}
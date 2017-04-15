<?php

namespace DesignPatterns\Creational\Builder\Parts;

abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @param $key
     * @return bool|object
     */
    public function getPart($key)
    {
        return $this->data[$key] ?? null;
    }
}
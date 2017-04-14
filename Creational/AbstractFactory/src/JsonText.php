<?php

namespace DesignPatterns\Creational\AbstractFactory;


class JsonText extends Text
{
    public function output()
    {
        return json_encode($this->getText());
    }
}
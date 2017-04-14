<?php

namespace DesignPatterns\Creational\AbstractFactory;


class HtmlText extends Text
{
    public function output()
    {
        return "<html>{$this->getText()}</html>";
    }
}
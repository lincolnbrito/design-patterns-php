<?php

namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    abstract public function output();
}
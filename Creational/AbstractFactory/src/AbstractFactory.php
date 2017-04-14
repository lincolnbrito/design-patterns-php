<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Nesse caso, abstract factory é um contrato para criar alguns components
 * para web. Existem duas formas de renderizar um texto: HTML e JSON
 *
 * Class AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}
<?php

namespace popp\Decorator\Abstracts;

abstract class Beverage
{
    protected int $cost;

    abstract public function getDescription(): string;

    abstract public function getCost(): int;
}
<?php

namespace popp\Decorator\Beverages;

use popp\Decorator\Abstracts\Beverage;

class Americano extends Beverage
{
    protected int $cost = 60;

    public function getDescription(): string
    {
        return 'Americano';
    }

    public function getCost(): int
    {
        return $this->cost;
    }
}
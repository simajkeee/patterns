<?php

namespace popp\Decorator\Beverages;

use popp\Decorator\Abstracts\Beverage;

class Cappuccino extends Beverage
{
    protected int $cost = 80;

    public function getDescription(): string
    {
        return 'Cappuccino';
    }

    public function getCost(): int
    {
        return $this->cost;
    }
}
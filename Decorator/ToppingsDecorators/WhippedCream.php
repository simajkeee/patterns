<?php

namespace popp\Decorator\ToppingsDecorators;

use popp\Decorator\Abstracts\BeverageToppingDecorator;

class WhippedCream extends BeverageToppingDecorator
{
    protected int $cost = 30;

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ' with Whipped Cream';
    }

    public function getCost(): int
    {
        return $this->beverage->getCost() + $this->cost;
    }
}
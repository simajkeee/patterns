<?php

namespace popp\Decorator\ToppingsDecorators;

use popp\Decorator\Abstracts\BeverageToppingDecorator;

class Caramel extends BeverageToppingDecorator
{
    protected int $cost = 40;

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . " with Caramel";
    }

    public function getCost(): int
    {
        return $this->beverage->getCost() + $this->cost;
    }
}
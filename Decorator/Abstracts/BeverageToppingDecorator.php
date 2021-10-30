<?php

namespace popp\Decorator\Abstracts;

abstract class BeverageToppingDecorator extends Beverage
{
    public function __construct(protected Beverage $beverage) {}
}
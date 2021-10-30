<?php

use popp\Decorator\Abstracts\Beverage;
use popp\Decorator\Beverages\Americano;
use popp\Decorator\Beverages\Cappuccino;
use popp\Decorator\ToppingsDecorators\Caramel;
use popp\Decorator\ToppingsDecorators\Cinnamon;
use popp\Decorator\ToppingsDecorators\WhippedCream;

require_once('vendor/autoload.php');


$americano = new Americano();
$cappuccino = new Cappuccino();

$mixedAmericano = new Caramel(new Cinnamon(new Americano()));
$mixedCappuccino = new WhippedCream(new Cinnamon(new Cappuccino()));

readyPhrase(new Americano());
readyPhrase($mixedAmericano);
readyPhrase($mixedCappuccino);

function readyPhrase(Beverage $beverage) {
    echo "Your " . $beverage->getDescription() . " is ready! " . $beverage->getCost() . " rubles please<br/>";
}
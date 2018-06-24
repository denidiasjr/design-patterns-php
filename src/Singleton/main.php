<?php

namespace Singleton;

require_once (__DIR__.'/../../vendor/autoload.php');

use Singleton\Counter;

main();

function main() 
{
    // Get first counter instance
    $counter = Counter::getInstance();
    $counter->addOne();
    $counter->addOne();
    $counter->addOne();
    $counter->subOne();

    // Show result
    echo 'Counter: ' . $counter->show() . PHP_EOL;

    // Delete variable
    unset($counter);

    // Get second counter instance
    $newCounter = Counter::getInstance();
    $newCounter->addOne();
    $newCounter->subOne();
    $newCounter->subOne();

    // Show result
    echo 'Counter: ' . $newCounter->show() . PHP_EOL;
}
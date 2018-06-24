<?php

namespace Prototype;

require_once (__DIR__.'/../../vendor/autoload.php');

use Prototype\BrazilianPrototype;
use Prototype\MexicanPrototype;

main();

function main() 
{
    // Creating and showing Neymar object
    $neymar = new BrazilianPrototype('Neymar', 26);

    echo 'Name: '.$neymar->showName() . PHP_EOL;
    echo 'Age: '.$neymar->showAge() . PHP_EOL;
    echo 'Music: '.$neymar->showFavoriteMusic() . PHP_EOL;
    echo 'Sport: '.$neymar->showFavoriteSport() . PHP_EOL;
    echo 'Food: '.$neymar->showFavoriteFood() . PHP_EOL . PHP_EOL;

    // Creating and showing Rodrygo object
    $rodrygo = $neymar->clone('Rodrygo', 17);

    echo 'Name: '.$rodrygo->showName() . PHP_EOL;
    echo 'Age: '.$rodrygo->showAge() . PHP_EOL;
    echo 'Music: '.$rodrygo->showFavoriteMusic() . PHP_EOL;
    echo 'Sport: '.$rodrygo->showFavoriteSport() . PHP_EOL;
    echo 'Food: '.$rodrygo->showFavoriteFood() . PHP_EOL . PHP_EOL;

    // Creating and showing Chicharito object
    $chicharito = new MexicanPrototype('Chicharito', 30);

    echo 'Name: '.$chicharito->showName() . PHP_EOL;
    echo 'Age: '.$chicharito->showAge() . PHP_EOL;
    echo 'Music: '.$chicharito->showFavoriteMusic() . PHP_EOL;
    echo 'Sport: '.$chicharito->showFavoriteSport() . PHP_EOL;
    echo 'Food: '.$chicharito->showFavoriteFood() . PHP_EOL . PHP_EOL;

    // Creating and showing Rafa Marquez object
    $marquez = $chicharito->clone('Rafa Marquez', 39);

    echo 'Name: '.$marquez->showName() . PHP_EOL;
    echo 'Age: '.$marquez->showAge() . PHP_EOL;
    echo 'Music: '.$marquez->showFavoriteMusic() . PHP_EOL;
    echo 'Sport: '.$marquez->showFavoriteSport() . PHP_EOL;
    echo 'Food: '.$marquez->showFavoriteFood() . PHP_EOL;
}
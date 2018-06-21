<?php

namespace FactoryMethod;

require_once (__DIR__.'/../../vendor/autoload.php');

use FactoryMethod\DevelopersFactory;
use FactoryMethod\Developers\Nintendo;

main($argc, $argv);

function main($argc, $argv){
    
    // Check if args are ok
    if (!isset($argv[1])){
        echo 'Enter with a valid argument';
        return;
    }

    // Catch developer name and create object
    $developerName = $argv[1];
    $developer = DevelopersFactory::getDeveloper($developerName);

    if ($developer !== null){
        echo 'Developer: ' . $developer->showName() . PHP_EOL;
        echo 'Games: ' . $developer->listGames();
    } else {
        print_r('Wrong Developer!');
    }
}
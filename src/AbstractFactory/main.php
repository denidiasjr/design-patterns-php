<?php

namespace AbstractFactory;

require_once __DIR__.'/../../vendor/autoload.php';

use AbstractFactory\CountryFactory;

main($argc, $argv);

function main ($argc, $argv)
{
    // Check args
    if (!isset($argv[1])) {
        echo 'Enter a valid continent';
        return;
    }

    if (!isset($argv[2])) {
        echo 'Enter a valid country';
        return;
    }

    // Catch country by args
    $country = CountryFactory::getCountry($argv[1], $argv[2]);

    if ($country === null) {
        echo 'Country not found';
        return;
    }

    // Show info
    $argv[1] = strtolower($argv[1]);
    echo $argv[1] == 'europe' ? $country->showLastChampionsLeagueWinner() : $country->showLastLibertadoresWinner();
}
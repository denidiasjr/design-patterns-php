<?php

namespace AbstractFactory;

use AbstractFactory\Countries\America\Brazil;
use AbstractFactory\Countries\America\Argentina;
use AbstractFactory\Countries\America\Ecuador;
use AbstractFactory\Countries\Europe\Spain;
use AbstractFactory\Countries\Europe\Germany;
use AbstractFactory\Countries\Europe\England;

class CountryFactory
{
    public static function getCountry($continent, $country)
    {
        $continent = strtolower($continent);

        switch ($continent) {
            case 'europe':
                return self::getEuropean($country);
            case 'america':
                return self::getAmerican($country);
        }
    }

    private static function getAmerican($country)
    {
        $country = strtolower($country);

        switch ($country){
            case 'brazil':
                return new Brazil();
            case 'argentina':
                return new Argentina();
            case 'ecuador':
                return new Ecuador();
        }
    }

    private static function getEuropean($country)
    {
        $country = strtolower($country);

        switch ($country){
            case 'spain':
                return new Spain();
            case 'germany':
                return new Germany();
            case 'england':
                return new England();
        }
    }
}
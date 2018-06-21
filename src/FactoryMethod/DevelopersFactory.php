<?php

namespace FactoryMethod;

use FactoryMethod\Developers\Nintendo;
use FactoryMethod\Developers\Sony;
use FactoryMethod\Developers\Microsoft;

class DevelopersFactory
{
    public static function getDeveloper($developer)
    {
        $developer = strtolower($developer);

        switch ($developer){
            case 'nintendo':
                return new Nintendo();
            case 'sony':
                return new Sony();
            case 'microsoft':
                return new Microsoft();
        }
    }
}
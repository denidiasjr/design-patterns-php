<?php

namespace FactoryMethod\Developers;

use FactoryMethod\Developers\Developer;

class Microsoft extends Developer {

    public function __construct()
    {
        $this->name = 'Microsoft';
    }

    public function listGames() {
        return 'Gears of War, Halo, Forza, Alan Wake';
    }
}
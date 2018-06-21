<?php

namespace FactoryMethod\Developers;

use FactoryMethod\Developers\Developer;

class Nintendo extends Developer
{
    public function __construct()
    {
        $this->name = 'Nintendo';
    }

    public function listGames()
    {
        return 'Donkey Kong, Mario, Zelda, Kirby';
    }
}
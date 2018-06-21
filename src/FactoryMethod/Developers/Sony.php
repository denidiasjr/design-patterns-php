<?php

namespace FactoryMethod\Developers;

use FactoryMethod\Developers\Developer;

class Sony extends Developer
{
    public function __construct()
    {
        $this->name = 'Sony';
    }

    public function listGames()
    {
        return 'God of War, Twisted Metal, The Last of Us, Gran Turismo';
    }
}
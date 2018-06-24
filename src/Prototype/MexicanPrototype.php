<?php

namespace Prototype;

use Prototype\PersonPrototype;

class MexicanPrototype extends PersonPrototype
{
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function showfavoriteSport()
    {
        return "Lucha Libre";
    }

    public function showFavoriteFood()
    {
        return "Nachos";
    }

    public function showFavoriteMusic()
    {
        return "Salsa";
    }

    public function clone($name, $age)
    {
        return new MexicanPrototype($name, $age);
    }
}
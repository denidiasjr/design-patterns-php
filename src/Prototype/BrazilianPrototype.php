<?php

namespace Prototype;

use Prototype\PersonPrototype;

class BrazilianPrototype extends PersonPrototype
{
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function showfavoriteSport()
    {
        return "Soccer";
    }

    public function showFavoriteFood()
    {
        return "Feijoada";
    }

    public function showFavoriteMusic()
    {
        return "Samba";
    }

    public function clone($name, $age)
    {
        return new BrazilianPrototype($name, $age);
    }
}
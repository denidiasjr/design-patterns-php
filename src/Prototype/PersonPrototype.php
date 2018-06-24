<?php

namespace Prototype;

abstract class PersonPrototype
{
    protected $name;
    protected $age;

    public function showName()
    {
        return $this->name;
    }

    public function showAge()
    {
        return $this->age;
    }

    public abstract function showfavoriteSport();

    public abstract function showFavoriteFood();

    public abstract function showFavoriteMusic();

    public abstract function clone($name, $age);
}
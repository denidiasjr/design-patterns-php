<?php

namespace FactoryMethod\Developers;

abstract class Developer 
{
    protected $name;

    public abstract function listGames();

    public function showName()
    {
        return $this->name;
    }
}
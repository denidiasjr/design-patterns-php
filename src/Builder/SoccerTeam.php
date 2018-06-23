<?php

namespace Builder;

class SoccerTeam 
{
    private $team;

    public function __construct() 
    {
        $this->team = array();
    }

    public function set($team)
    {
        if (count($team) > 11){
            echo 'Team over capacity!';
            die();
        }

        $this->team = $team;
    }

    public function show()
    {
        return $this->team;
    }
}
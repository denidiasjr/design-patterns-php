<?php

namespace Builder;

use Builder\SoccerTeam;

class SoccerTeamBuilder
{
    private $goalkeeper;
    private $defenders;
    private $midfielders;
    private $attackers;

    public function __construct() 
    {
        $this->goalkeeper = '';
        $this->defenders = [];
        $this->midfielders = [];
        $this->attackers = [];
    }

    public function addGoalkeeper($goalkeeper)
    {
        $this->goalkeeper = $goalkeeper;
    }

    public function addDefenders($defenders)
    {
        $this->defenders = array_merge($this->defenders, $defenders);
    }
    
    public function addMidfielders($midfielders)
    {
        $this->midfielders = array_merge($this->midfielders, $midfielders);
    }

    public function addAttackers($attackers)
    {
        $this->attackers = array_merge($this->attackers, $attackers);
    }

    public function build()
    {
        $team = array_merge([$this->goalkeeper], $this->defenders, $this->midfielders, $this->attackers);
        $soccerTeam = new SoccerTeam();
        $soccerTeam->set($team);
        return $soccerTeam;
    }
}
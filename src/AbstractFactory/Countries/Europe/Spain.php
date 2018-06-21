<?php

namespace AbstractFactory\Countries\Europe;

use AbstractFactory\Countries\Europe\Country;

class Spain extends Country
{
    public function showLastChampionsLeagueWinner()
    {
        return 'Real Madrid (2018)';
    }
}
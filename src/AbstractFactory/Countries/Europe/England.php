<?php

namespace AbstractFactory\Countries\Europe;

use AbstractFactory\Countries\Europe\Country;

class England extends Country
{
    public function showLastChampionsLeagueWinner()
    {
        return 'Chelsea (2012)';
    }
}
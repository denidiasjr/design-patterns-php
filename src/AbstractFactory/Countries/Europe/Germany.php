<?php

namespace AbstractFactory\Countries\Europe;

use AbstractFactory\Countries\Europe\Country;

class Germany extends Country
{
    public function showLastChampionsLeagueWinner()
    {
        return 'Bayern Munich (2013)';
    }
}
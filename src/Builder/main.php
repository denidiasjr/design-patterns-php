<?php

namespace Builder;

require_once (__DIR__.'/../../vendor/autoload.php');

use Builder\SoccerTeamBuilder;

main();

function main(){
    
    echo 'Enter with the goalkeeper: ';
    $goalkeeper = fgets(STDIN);
    
    echo 'Enter with the defenders (separated with comma): ';
    $defenders = explode(',',fgets(STDIN));

    echo 'Enter with the midfielders (separated with comma): ';
    $midfielders = explode(',',fgets(STDIN));
    
    echo 'Enter with the attackers (separated with comma): ';
    $attackers = explode(',',fgets(STDIN));

    $soccerTeamBuilder = new SoccerTeamBuilder();
    $soccerTeamBuilder->addGoalkeeper($goalkeeper);
    $soccerTeamBuilder->addDefenders($defenders);
    $soccerTeamBuilder->addMidfielders($midfielders);
    $soccerTeamBuilder->addAttackers($attackers);
    $soccerTeam = $soccerTeamBuilder->build();

    print_r($soccerTeam->show());
}
<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\welcome;

function even()
{
    $name = welcome();
    evenGame($name);
}

function evenGame($name)
{
    $finalAssocArray = [];

    for($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        if($number % 2 == 0) {
            $resultArray[$number] = 'yes';
        } else {
            $resultArray[$number] = 'no';
        }
    }
    
    $task = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    communication($finalAssocArray, $name, $task);
}
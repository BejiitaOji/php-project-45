<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\welcome;

function calc() 
{
    $name = welcome();
    calculator($name);
}

function calculator($name)
{
    $finalAssocArray = [];

    for($i = 0; $i < 3; $i++) {
        $x = rand(1, 100);
        $y = rand(1, 100);
        switch (mt_rand(1, 3)) {
            case 1:
                $finalAssocArray["$x - $y"] = $x - $y;
                break;
            case 2:
                $finalAssocArray["$x + $y"] = $x + $y;
                break;
            case 3:
                $finalAssocArray["$x * $y"] = $x * $y;
                break;
        }
    }

    $task = 'What is the result of the expression?';
    communication($finalAssocArray, $name,  $task);
}
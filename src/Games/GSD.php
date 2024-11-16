<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\welcome;

function isGSD() {
    $name = welcome();
    gsdGame($name);
}

function findGSD($x, $y) 
{
        while($y > 0) {
            $temp = $x % $y;
            $x = $y;
            $y = $temp;
        }
        return abs($x);
}

function gsdGame($name) 
{
    $finalAssocArray = [];

    for($i = 0; $i < 3; $i++) {
        $first = rand(1, 100);
        $second = rand(1, 100);

        $finalAssocArray["$first $second"] = findGSD($first, $second);
    }

    $task = 'Find the greatest common divisor of given numbers.';
    communication($finalAssocArray, $name, $task);
}
<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function even()
{
    $name = welcome();
    game($name);
}

function isEven($number)
{
    return $number % 2 == 0;
}

function game($name)
{
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    
    #$numbers = array_fill(0, 3, rand(1, 100));
    $correctAnswers = 0;
    while($correctAnswers < 3) {
        $number = rand(1, 100);
        $answer = prompt("Question: $number\nYour answer: ");
        if(isEven($number) && $answer === 'no') {
            line("'$answer' is wrong answer ;(. Correct answer was 'yes'. \nLet's try again, $name!");
            return;
        } elseif(!isEven($number) && $answer === 'yes') {
            line("'$answer' is wrong answer ;(. Correct answer was 'no'. \nLet's try again, $name!");
            return;
        } else {
            line("Correct!");
            $correctAnswers++;
        }

    }
    line("Congratulations, $name!");
}
<?php declare(strict_types=1);

class Lasagna
{
    // Please define the 'expectedCookTime()' function
    public function expectedCookTime() : int 
    {
        return 40;
    }

    // Please define the 'remainingCookTime($elapsed_minutes)' function
    function remainingCookTime(int $elapsed_minutes) : int {
        return 40 - $elapsed_minutes;
    }

    // Please define the 'totalPreparationTime($layers_to_prep)' function
    function totalPreparationTime(int $layers_to_prep) : int {
        return $layers_to_prep*2;
    } 

    // Please define the 'totalElapsedTime($layers_to_prep, $elapsed_minutes)' function
    function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes) : int {
        return ($layers_to_prep*2)+$elapsed_minutes;
    }

    // Please define the 'alarm()' function
    function alarm(){
        return "Ding!";
    }
}
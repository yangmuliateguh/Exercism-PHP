<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizzas, 
                                              int $persons) : int
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement(int $pizzas, 
                                              int $sauce_per_pizzas) : int 
    {
        return ($pizzas*125)/$sauce_per_pizzas;
    }

    public function calculateCheeseCubeCoverage(int $cheese_dimension, 
                                                float $thickness,
                                                int $diameter) : int
    {
        $result = ($cheese_dimension**3) / ($thickness * pi() * $diameter);
        return (int)$result;
    }

    public function calculateLeftOverSlices(int $pizza,
                                           int $person) : int
    {
        return ($pizza*8)%$person;
    }
}
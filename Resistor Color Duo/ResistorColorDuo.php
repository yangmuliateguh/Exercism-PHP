<?php
declare(strict_types=1);

class ResistorColorDuo
{
    public array $colors = ["black",
                            "brown",
                            "red",
                            "orange",
                            "yellow",
                            "green",
                            "blue",
                            "violet",
                            "grey",
                            "white"];
    
    public function getColorsValue(array $colors): int
    {
        if (count($colors)>2) $colors = array_slice($colors, 0, 2);
        $result = "";
        foreach ($colors as $c){
            $result .= array_search($c, $this->colors);
        }
        return (int)$result;
    }
}

// declare(strict_types=1);

// class ResistorColorDuo
// {
//     private array $colors = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"];
    
//     public function getColorsValue(array $colors): int
//     {
//         $result = '';
//         for ($i = 0; $i < min(2, count($colors)); $i++) {
//             $result .= (string)array_search($colors[$i], $this->colors);
//         }
//         return (int)$result;
//     }
// }

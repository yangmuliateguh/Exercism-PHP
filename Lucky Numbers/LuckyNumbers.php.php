<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $reduce = fn($carry, $item) => $carry * 10 + $item;
        return array_reduce($digitsOfNumber1, $reduce, 0) + 
                array_reduce($digitsOfNumber2, $reduce, 0);
    }


    public function isPalindrome(int $number): bool
    {
        $str = strval($number);
        return $str === strrev($str);
    }

    public function validate(string $input): string
    {
        $input = trim($input);
        if (empty($input) && $input !== "0") return "Required field";
        if ((int) ($input) < 1) return "Must be a whole number larger than 0";
        
        return '';
    }
}

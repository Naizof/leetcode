<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $numbers = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $result = 0;
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            $currentValue = $numbers[$s[$i]];
            
            if ($i < $length - 1) {
                $nextValue = $numbers[$s[$i + 1]];
                
                if ($currentValue < $nextValue) {
                    $result -= $currentValue;
                } else {
                    $result += $currentValue;
                }
            } else {
                $result += $currentValue;
            }
        }
        return ($result);
    }
}

$solution = new Solution();
echo ($solution->romanToInt('MCMXCIV'));

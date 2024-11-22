<?php

class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $max = max(strlen($a), strlen($b));
        $a = str_pad($a, $max, '0', STR_PAD_LEFT);
        $b = str_pad($b, $max, '0', STR_PAD_LEFT);

        $result = '';
        $carry = 0;
        for ($i = $max - 1; $i >= 0; $i--) {
            $sum = $a[$i] + $b[$i] + $carry;
            if ($sum >= 2) {
                $sum = $sum - 2;
                $carry = 1;
            } else {
                $carry = 0;
            }
            $result = $sum . $result;
        }

        if ($carry == 1) {
            $result = $carry . $result;
        }

        return $result;
    }
}


$solution = new Solution();
print_r($solution->addBinary('1111', '1111'));

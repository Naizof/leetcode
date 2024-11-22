<?php

class Solution
{

    /**
     * @param int $x
     * @return int
     */
    function mySqrt($x)
    {
        $result = $x / 2;

        if ($x < 0) {
            return 0;
        }

        if ($x == 0 || $x == 1) {
            return $x;
        }

        while (abs($result * $result - $x) > 0.01) {
            $result = ($result + $x / $result) / 2;
        }

        return (int)$result;
    }
}


$solution = new Solution();
print_r($solution->mySqrt(2147395599));

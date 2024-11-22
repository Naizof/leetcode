<?php

class Solution
{

    /**
     * @param int $n
     * @return int
     */
    function climbStairs($n)
    {
        if ($n == 0 || $n == 1) {
            return 1;
        }

        $dp = array_fill(0, $n + 1, 0);
        $dp[0] = 1;
        $dp[1] = 1; 

        for ($i = 2; $i <= $n; $i++) {
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }

        return $dp[$n];
    }
}


$solution = new Solution();
print_r($solution->climbStairs(2));

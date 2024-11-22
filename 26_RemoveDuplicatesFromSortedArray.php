<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $k=1;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] != $nums[$i - 1]) {
                $nums[$k] = $nums[$i];
                $k++;
            }
        }

        $nums = array_slice($nums, 0, $k);
    }
}

$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];

$solution = new Solution();
$solution->removeDuplicates($nums);

print_r($nums);

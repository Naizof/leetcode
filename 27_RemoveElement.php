<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $nums = array_filter($nums, function($value) use ($val){
            return $value !== $val;
        });

        $nums = array_values($nums);
    }
}


$solution = new Solution();

$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];

$solution->removeElement($nums,1);

print_r($nums);

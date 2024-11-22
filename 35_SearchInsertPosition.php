<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        foreach($nums as $index => $value){
            if($value >= $target){
                return $index;
            }
        }
        return count($nums);
    }
}


$solution = new Solution();
print_r($solution->searchInsert([1,3,5,6],5));



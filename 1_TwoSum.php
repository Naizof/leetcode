<?php

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums = [], $target = 0) {
        $seen = [];
    
        foreach ($nums as $index => $num) {
            $complement = $target - $num;
            
            if (isset($seen[$complement])) {
                return [$seen[$complement], $index];
            }
    
            $seen[$num] = $index;
        }
    
        return [];
    }
}

$solution = new Solution();
echo json_encode($solution->twoSum([3,2,4], 6));

<?php

class Solution {

    /**
     * @param int $x
     * @return bool
     */

     function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
    
        $xStr = (string)$x;
        
        return $xStr === strrev($xStr);
    }
    
}

$solution = new Solution();
echo ($solution->isPalindrome(12231));

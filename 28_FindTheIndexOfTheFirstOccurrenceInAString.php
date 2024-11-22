<?php

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $result = strpos($haystack, $needle);
        if($result===false){
            $result = -1;
        }

        return $result;
    }
}


$solution = new Solution();
print_r($solution->strStr("asdadsa","sad"));



<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($words) {
        $prefix = $words[0];

        foreach($words as $word){
            while (strpos($word, $prefix) !== 0) {
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
                if ($prefix === "") {
                    return "";
                }
            }
        }
        return $prefix;
    }
}

$solution = new Solution();
echo ($solution->longestCommonPrefix(["flower","flow","flight"]));
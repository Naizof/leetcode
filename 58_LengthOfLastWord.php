<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $words = explode(" ", $s);

        $words = array_filter($words, function($word) {
            return !empty($word);
        });

        $result = count(str_split(end($words)));

        return $result;
    }
}


$solution = new Solution();
print_r($solution->lengthOfLastWord("   fly me   to   the moon  "));
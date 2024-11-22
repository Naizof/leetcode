<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */

    function isValid($string)
    {
        $stack = [];

        foreach (str_split($string) as $char) {
            if ($char == '[' || $char == '(' || $char == '{') {
                $stack[] = $char;
            } elseif ($char == ']' || $char == ')' || $char == '}') {
                if (empty($stack)) {
                    return false;
                }

                $last = array_pop($stack);

                if (($char == ']' && $last != '[') ||
                    ($char == ')' && $last != '(') ||
                    ($char == '}' && $last != '{')
                ) {
                    return false;
                }
            }
        }

        return empty($stack);
    }
}


$solution = new Solution();
print_r($solution->isValid("()"));

<?php

class ListNode {
    public $val = 0;
    public $next = null;
    
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        return "a";
    }
}

$solution = new Solution();

$l = new ListNode(1);
$l->next = new ListNode(2);
$l->next->next = new ListNode(4);

$result = $solution->deleteDuplicates($l);

print_r($result);

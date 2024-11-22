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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        $dummy = new ListNode();
        $current = $dummy;

        while ($l1 !== null && $l2 !== null) {
            if ($l1->val <= $l2->val) {
                $current->next = $l1;
                $l1 = $l1->next;
            } else {
                $current->next = $l2;
                $l2 = $l2->next;
            }
            $current = $current->next;
        }

        if ($l1 !== null) {
            $current->next = $l1;
        } elseif ($l2 !== null) {
            $current->next = $l2;
        }

        return $dummy->next;
    }
}

$solution = new Solution();

$mergedList = $solution->mergeTwoLists($l1, $l2);

print_r($mergedList);

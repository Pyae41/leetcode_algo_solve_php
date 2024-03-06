<?php 

class ListNode{
    public $val = 0;
    public $next = 0;

    function __construct($val = 0, $next = 0){
        $this->val = $val;
        $this->next = $next;
    }
}
class Solution{

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists(ListNode $list1,ListNode $list2) {

        $dummy = new ListNode(-INF);

        $prev = $dummy;

        $curr1 = $list1;
        $curr2 = $list2;

        while($curr1 && $curr2){
            if($curr1->val <= $curr2->val){
                $prev->next = $curr1;
                $prev = $curr1;
                $curr1 = $curr1->next;
            }
            else{
                $prev->next = $curr2;
                $prev = $curr2;
                $curr2 = $curr2->next;
            }
        }

        if($curr1) $prev->next = $curr1;
        if($curr2) $prev->next = $curr2;

        return $dummy->next;
    }
}

$sol = new Solution();
print($sol->mergeTwoLists(new ListNode([1,2,4]),new ListNode([1,3,4])));
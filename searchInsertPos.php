<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target): int {
        
        $pos = 0;
        $found = false;
        for($i = 0; $i < count($nums); $i++){
            if($nums[$i] == $target) {
                $found = true;
                $pos = $i;
            }
        }
        $nums[] = $target;
        sort($nums);

        return $found ? $pos : array_search($target,$nums);
    }
}

$sol = new Solution();
var_dump($sol->searchInsert([1,3,5,6],2));
// $sol->searchInsert([1,3,5,6],2);
<?php

class Solution{
    function removeDuplicates(&$nums){
        $p = 0;

        foreach($nums as $num){
            if($num > $nums[$p])
                $nums[++$p] = $num;
        }

        return $p + 1;
    } 
}

$sol = new Solution();
$arr = [0,0,1,1,1,2,2,3,3,4];
echo $sol->removeDuplicates($arr);
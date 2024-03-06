<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) : int {
        $found = strpos($haystack,$needle);
        if($found !== false) return $found;
        else return -1;
    }
}

$sol = new Solution();
echo $sol->strStr("hello","ll");
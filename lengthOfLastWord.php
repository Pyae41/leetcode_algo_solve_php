<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $res = array_values(array_filter(explode(" ",$s),fn ($val) => $val !== ""));
        $len = strlen($res[count($res) - 1]);

        return $len;
    }
}

$sol = new Solution();
$sol->lengthOfLastWord("   fly me   to   the moon  ");
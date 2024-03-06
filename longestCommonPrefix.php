<?php

class Solution{

    function longestCommonPrefix($words){
        if(count($words) < 2) return array_pop($words);
        for($i = 0; $i < count($words); $i++){
            for($j = $i+1;$j < count($words); $j++){
              $prefix = $words[$j] < $words[$i] ?  $words[$j] : $words[$i];
            }
        }
        foreach($words as $word){
            while(substr($word,0,strlen($prefix)) != $prefix){
                $prefix = substr($prefix,0,-1);
            }
        }

        return $prefix;
    }
}

$sol = new Solution();
echo $sol->longestCommonPrefix(["flower","flow","flight"]);
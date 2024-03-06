<?php 
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if ($s == '') return true;
        
        $s = str_replace(' ', '', $s);
        $counter = 0;
        
        do {
            $counter += preg_match_all('/(\(\)|\{\}|\[\])/', $s);
            $s = str_replace(['[]', '()', '{}'], '', $s);
            
            if ($counter == 0)
                break;
        } while (strlen($s));
        
        return !$s;
    }
}

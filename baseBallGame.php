<?php

/**
 * @param String[] $ops * @return Integer */ function calPoints($ops) {
    $len = count($ops);
    $score = array(); for($i = 0; $i < $len; $i++){ if($ops[$i] == "D"){ array_push($score,($score[count($score)-1] * 2));
        } else if ($ops[$i] == "+"){
            array_push($score,($score[count($score)-1] + $score[count($score)-2])); } else if ($ops[$i] == "C"){ array_splice($score,count($score) - 1, 1); } else { array_push($score,$ops[$i]);
        }
    }
    return array_sum($score);
}

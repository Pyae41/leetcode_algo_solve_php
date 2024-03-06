class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $index = [];

        for($i = 0; $i < count($nums); $i++){
            for($j = $i + 1; $j < count($nums); $j++){
                if($nums[$i] + $nums[$j] == $target) array_push($index,$i,$j);
            }
        }

        return $index;
    }
}

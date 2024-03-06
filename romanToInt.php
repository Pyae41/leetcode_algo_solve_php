<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */

    public function romanToInt($s)
    {
        $numbers = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $sum = 0;

        // Traverse given input
        for ($i = 0; $i < strlen($s); $i++) {
            // Getting value of
            // symbol s[i]
            $s1 = $numbers[$s[$i]];

            if ($i + 1 < strlen($s)) {
                $s2 = $numbers[$s[$i + 1]];

                // Comparing both values
                if ($s1 >= $s2) {
                    $sum += $s1;
                } else {
                    $sum += $s2 - $s1;
                    $i++;
                }
            } else {
                $sum += $s1;
                $i++;
            }
        }
        return $sum;
    }
}

$solution = new Solution();
echo $solution->romanToInt("III");
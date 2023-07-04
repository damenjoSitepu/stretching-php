<?php 

// Given a square matrix, calculate the absolute difference between the sums of its diagonals.

// For example, the square matrix  is shown below:

// 1 2 3
// 4 5 6
// 9 8 9  

// Answer: (1 + 5 + 9) - (3 + 5 + 9) = 2 ( Difference Between Diagonal )

function diagonalDifference($arr) {
    if (empty($arr)) return 0;
    $countFromLeft = 0;
    $countFromRight = 0;
    
    $numberOfCondition = 1;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < $numberOfCondition; $j++) {
            if ($j !== ($numberOfCondition - 1)) continue;
            $countFromLeft += $arr[$i][$j];
            $countFromRight += $arr[$i][count($arr[$i]) - $j - 1];
        }
        ++$numberOfCondition;
    }
    return abs($countFromLeft - $countFromRight);
}


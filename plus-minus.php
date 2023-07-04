<?php 

// Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with 6 places after the decimal.

// Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to are acceptable.

// Sample Input

// STDIN           Function
// -----           --------
// 6               arr[] size n = 6
// -4 3 -9 0 4 1   arr = [-4, 3, -9, 0, 4, 1]
// Sample Output

// 0.500000
// 0.333333
// 0.166667

function plusMinus($arr) {
    if (empty($arr)) return;
    // 1: Positive Number
    // 2: Negative Number
    // 3: Zero Number
    // 4: Count Of Total Int Elements From The Array
    $storeCounts = [0,0,0,count($arr)];
    for ($i = 0; $i < $storeCounts[3]; $i++) {
        if ($arr[$i] > 0) {
            $storeCounts[0] = ++$storeCounts[0];
            continue;
        }
        if ($arr[$i] < 0) {
            $storeCounts[1] = ++$storeCounts[1];
            continue;
        }
        if ($arr[$i] === 0) {
            $storeCounts[2] = ++$storeCounts[2];
        }
    }
    // Print The Results
    for ($i = 0; $i < count($storeCounts) - 1; $i++) {
        echo number_format((float) $storeCounts[$i] / $storeCounts[3],6,'.','') . "\n";
    }
}
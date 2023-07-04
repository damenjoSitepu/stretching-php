<?php 

// Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.

// Output Format

// Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by summing exactly four of the five integers. (The output can be greater than a 32 bit integer.)

// Sample Input

// 1 2 3 4 5
// Sample Output

// 10 14

function miniMaxSum($arr) {
    if (empty($arr)) return;
    // 1: Min Value
    // 2: Max Value
    $resultValue = [0,0];
    sort($arr);
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $resultValue[0] += $arr[$i];
        $resultValue[1] += $arr[$i + 1];
    }
    echo $resultValue[0] . " " . $resultValue[1];
}
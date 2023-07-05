<?php 

// You are in charge of the cake for a child's birthday. You have decided the cake will have one candle for each year of their total age. They will only be able to blow out the tallest of the candles. Count how many candles are tallest.

// Example

// The maximum height candles are 2 units high. There are 4 of them, so return .

// Function Description

// Complete the function birthdayCakeCandles in the editor below.

// birthdayCakeCandles has the following parameter(s):

// int candles[n]: the candle heights
// Returns

// int: the number of candles that are tallest
// Input Format

// The first line contains a single integer, , the size of .
// The second line contains  space-separated integers, where each integer  describes the height of candles.

// Sample Input 
// 4
// 3 2 1 3
// Sample Output 
// 2
// Explanation 
// Candle heights are . The tallest candles are  units, and there are  of them.

function birthdayCakeCandles($candles) {
    if (empty($candles)) return;
    $tallestCandles = [$candles[0],1];
    if (count($candles) >= 2) {
        for ($i = 1; $i < count($candles); $i++) {
            if ($tallestCandles[0] < $candles[$i]) {
                $tallestCandles[0] = $candles[$i];
                $tallestCandles[1] = 1;
                continue;
            }
            if ($tallestCandles[0] === $candles[$i]) {
                $tallestCandles[1] = ++$tallestCandles[1];
            }
        }
    }
    return $tallestCandles[1];
}
<?php 

// Marc loves cupcakes, but he also likes to stay fit. Each cupcake has a calorie count, and Marc can walk a distance to expend those calories. If Marc has eaten  cupcakes so far, after eating a cupcake with  calories he must walk at least  miles to maintain his weight.

// Function Description

// Complete the marcsCakewalk function in the editor below.

// marcsCakewalk has the following parameter(s):

// int calorie[n]: the calorie counts for each cupcake
// Returns

// long: the minimum miles necessary
// Input Format

// The first line contains an integer , the number of cupcakes in .
// The second line contains  space-separated integers, .

// Sample Input 0

// 3
// 1 3 2
// Sample Output 0

// 11

function marcsCakewalk($calorie) {
    if (empty($calorie)) return 0;
    rsort($calorie);
    $minimizeMiles = 0;
    for ($i = 0; $i < count($calorie); $i++) {
        $minimizeMiles += pow(2,$i) * (int) $calorie[$i];
    }
    return $minimizeMiles;
}

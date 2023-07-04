<?php 

// Output Format

// Print a staircase of size  using # symbols and spaces.

// Note: The last line must have  spaces in it.

// Sample Input

// 6 
// Sample Output

//      #
//     ##
//    ###
//   ####
//  #####
// ######
// Explanation

// The staircase is right-aligned, composed of # symbols and spaces, and has a height and width of .

function staircase($n) {
    // Write your code here
    if ($n === 0) return;
    $defineHashTag = 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $defineHashTag; $j++) {
            echo " ";
        }
        for ($j = 0; $j < $defineHashTag; $j++) {
            echo "#";
        }
        ++$defineHashTag;
        echo "\n";
    }
}
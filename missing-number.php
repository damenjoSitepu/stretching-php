<?php 

// 268. Missing Number 

// Given an array nums containing n distinct numbers in the range [0, n], return the only number in the range that is missing from the array.

// Input: nums = [9,6,4,2,3,5,7,0,1]
// Output: 8
// Explanation: n = 9 since there are 9 numbers, so all numbers are in the range [0,9]. 8 is the missing number in the range since it does not appear in nums.

/**
 * @param Integer[] $nums
 * @return Integer
 */
function missingNumber($nums) {
    if (empty($nums)) return 0;
    $result = (count($nums) * (count($nums) + 1)) / 2;
    return $result - array_sum($nums);
}

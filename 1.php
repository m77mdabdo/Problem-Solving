<?php 

// # Intuition
// <!-- Describe your first thoughts on how to solve this problem. -->

// # Approach
// <!-- Describe your approach to solving the problem. -->

// # Complexity
// - Time complexity:
// <!-- Add your time complexity here, e.g. $$O(n)$$ -->

// - Space complexity:
// <!-- Add your space complexity here, e.g. $$O(n)$$ -->

// # Code
// ```php []
class Solution {

  
    //  * @param Integer[] $nums
    //  * @param Integer $target
    //  * @return Integer[]
    //  
    public function twoSum($nums, $target) {
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}


$solution = new Solution();
$nums = [2, 7, 11, 15];
$target = 9;


print_r($solution->twoSum($nums, $target)); 
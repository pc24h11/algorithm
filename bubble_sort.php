<?php

function bubbleSort(&$arr) {
  $length = count($arr);

  // Traverse through all array elements
  for ($i = 0; $i < $length; $i++) {
    // traverse the array from 0 to n-i-1
    // Swap if the element found is greater
    // than the next element
    for ($j = 0; $j < $length - $i - 1; $j++) {
      if ($arr[$j] > $arr[$j+1]) {
        $t = $arr[$j];
        $arr[$j] = $arr[$j+1];
        $arr[$j+1] = $t; 
      }
    }
  }
}

$arr = [20, 8, 4, 1, 3, 6, 5, 10, 3];
$len = count($arr);
bubbleSort($arr);

echo "Sorted array : \n";
 
for ($i = 0; $i < $len; $i++) echo $arr[$i]." ";
    
echo "\n";
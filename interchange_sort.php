<?php

function interchangeSort(&$arr) {
  $length = count($arr);

  // Traverse through all array elements
  for ($i = 0; $i < $length - 1; $i++) {
    // traverse the array from $i + 1 to $n
    // Swap if the element found is greater
    // than the next element
    for ($j = $i + 1; $j < $length; $j++) {
      if ($arr[$i] > $arr[$j]) {
        $t = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $t;
      }
    }
  }
}

$arr = [20, 8, 4, 1, 3, 6, 5, 10, 3];
$len = count($arr);
interchangeSort($arr);

echo "Sorted array : \n";
 
for ($i = 0; $i < $len; $i++) echo $arr[$i]." ";
    
echo "\n";
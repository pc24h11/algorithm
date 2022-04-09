<?php
/*
Input : arr[] = {10, 20, 80, 30, 60, 50, 110, 100, 130, 170}
x = 110;
Output : 6
Element x is present at index 6

Input : arr[] = {10, 20, 80, 30, 60, 50, 110, 100, 130, 170}
x = 175;
Output : -1
Element x is not present in arr[].
*/

function search($arr, $x) {
  $size = count($arr);
  for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] == $x) {
      return $i;
    }
  }
  return -1;
}

$arr = [2, 3, 4, 10, 40];
$x = 50;
$result = search($arr, $x);
if ($result == -1) {
  echo 'Element is not present in array';
} else {
  echo 'Element is present at index ' . $result;
}

echo "\n";

// improve the linear search
function searchImprove($arr, $x) {
  $left = 0;
  $length = count($arr);
  $right = $length - 1;
  $position = -1;

  for ($left = 0; $left <= $right;) {
    if ($arr[$left] == $x) {
      $position = $left;
      echo 'Element found in Array at ' . ($position + 1) . ' Position with ' . ($left + 1) . ' Attempt';
      break;
    }

    if ($arr[$right] == $x) {
      $position = $right;
      echo 'Element found in Array at ' . ($position + 1) . ' Position with ' . ($length - $right) . ' Attempt';
      break;
    }

    $left++;
    $right--;
  }

  if ($position == -1) {
    echo 'Not found in Array with ' . $left . ' Attempt';
  }
}

$arr1 = [1, 2, 2, 4, 5];
$x1 = 2;

searchImprove($arr1, $x1);


echo "\n";

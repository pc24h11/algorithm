<?php
/*
Input: arr[] = {10, 20, 30, 50, 60, 80, 110, 130, 140, 170}, x = 110
Output: 6
Explanation: Element x is present at index 6

Input: arr[] = {10, 20, 30, 40, 60, 110, 120, 130, 170}, x = 175
Output: -1
Explanation: Element x is not present in arr[].
*/

$arr = [10, 20, 30, 50, 60, 80, 110, 130, 140, 170];
$x = 130;

function search($arr, $x) {
  $length = count($arr);
  $left = 0;
  $right = $length - 1;

  do {
    $mid = intval(($left + $right) / 2);

    if ($arr[$mid] == $x) {
      return $mid;
    }

    // find in left
    if ($arr[$mid] < $x) $left = $mid + 1;

    if ($arr[$mid] > $x) $right = $mid - 1;
  
  } while ($left <= $right);

  return -1;
}

$result = search($arr, $x);
if ($result == -1) {
  echo 'Element is not present in array';
} else {
  echo 'Element is present at index ' . $result;
}

echo "\n";

$arr1 = [10, 20, 30, 50, 60, 80, 110, 130, 140, 170];
$x1 = 130;

function searchRecursive($arr, $x, $l, $r) {
  if ($l > $r) {
    return -1;
  }
  $mid = intval(($l + $r) / 2);

  if ($arr[$mid] == $x) {
    return $mid;
  }

  // find in left
  if ($arr[$mid] < $x) {
    $l = $mid + 1;
    return searchRecursive($arr, $x, $l, $r);
  }

  if ($arr[$mid] > $x) {
    $r = $mid - 1;
    return searchRecursive($arr, $x, $l, $r);
  }
  
  return -1;
}

$l = 0;
$length = count($arr1);
$r = $length - 1;
$result = searchRecursive($arr1, $x1, $l, $r);
if ($result == -1) {
  echo 'Element is not present in array';
} else {
  echo 'Element is present at index ' . $result;
}

echo "\n";
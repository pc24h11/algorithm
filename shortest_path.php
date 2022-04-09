<?php

$graph = array(
	array(0, 4, 0, 0, 0, 0, 0, 8, 0),
	array(4, 0, 8, 0, 0, 0, 0, 11, 0),
	array(0, 8, 0, 7, 0, 4, 0, 0, 2),
	array(0, 0, 7, 0, 9, 14, 0, 0, 0),
	array(0, 0, 0, 9, 0, 10, 0, 0, 0),
	array(0, 0, 4, 0, 10, 0, 2, 0, 0),
	array(0, 0, 0, 14, 0, 2, 0, 1, 6),
	array(8, 11, 0, 0, 0, 0, 1, 0, 7),
	array(0, 0, 2, 0, 0, 0, 6, 7, 0)
);

/*
1. Đánh dấu đỉnh ban đầu (đỉnh nguồn) là $0$ và các đỉnh còn lại là vô cùng.
2. Gọi đỉnh chưa xét với giá trị đánh dấu nhỏ nhất là $C$ (current node).
3. Với mỗi đỉnh kề $N$ (neighbour) với đỉnh $C$: Cộng giá trị đang đánh dấu của đỉnh $C$ với trọng số của cạnh nối đỉnh $C$ với đỉnh $N$. Nếu được kết quả nhỏ hơn giá trị đang đánh dấu ở đỉnh $N$ ta cập nhật giá trị đánh dấu cho đỉnh $N$ mới (Xem ví dụ trên để hiểu hơn).
4. Đánh dấu đỉnh $C$ đã xét xong.
5. Nếu vẫn còn đỉnh chưa xét, lặp lại bước $2$.
*/



function getLowestAndNotProcessedNode($distances, $shortestPaths, $count) {
	$min = 777777777;
	$minIndex = 0;

	for ($i = 0; $i < $count - 1; ++$i) {
		if ($shortestPaths[$i] == false && $distances[$i] <= $min) {
			$min = $distances[$i];
			$minIndex = $i;
		}
	}

	return $minIndex;
}

function dijkstra($graph, $source, $verticesCount) {
  $distances = [];
  $shortestPaths = [];

	for ($i = 0; $i < $verticesCount; ++$i) {
		$distances[$i] = 777777777;	// đánh dấu mọi đỉnh là vô cùng
		$shortestPaths[$i] = false;	// đường dẫn từ $source đến $i
	}

	$distances[$source] = 0;	// đánh dấu đỉnh nguồn $source là 0
	
	for ($count = 0; $count < $verticesCount - 1; ++$count) {
		$u = getLowestAndNotProcessedNode($distances, $shortestPaths, $verticesCount);
		$shortestPaths[$u] = true;

		for ($i = 0; $i < $verticesCount; $i++) {
			// xét đỉnh mới chưa được xét với giá trị nhỏ nhất
			if (
				!$shortestPaths[$i]	// chỉ xét đỉnh chưa được xét
				&& $graph[$u][$i]
				&& $distances[$u] != 777777777
				&& $distances[$u] + $graph[$u][$i] < $distances[$i]
				) {
					$distances[$i] = $distances[$u] + $graph[$u][$i];
			}
		}
	}

	var_dump($distances);
	exit();
}


dijkstra($graph, 0, 9);
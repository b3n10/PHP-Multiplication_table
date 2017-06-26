<?php

$number = (isset($_GET['number'])) ? (int) $_GET['number'] : '' ;

echo '<table>';

for ($x = 1;$x <= $number;$x++) {
	echo '<tr>';
	for ($y = 1;$y <= $number;$y++) {
		$result = $y * $x;
		echo '<td>' . $result . '</td>';
	}
	echo '</tr>';
}

echo '</table>';

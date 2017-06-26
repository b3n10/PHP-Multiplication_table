<?php

$number = (isset($_GET['number'])) ? (int) $_GET['number'] : '' ;

if ($number === 0) {
	echo "<h2>Invalid input.</h2>";
} else {
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
}
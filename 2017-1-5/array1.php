<?php
	$x = array('a' => 'red','b' => 'green');
	$y = array('c' => 'blue','d' => 'yellow');
	$z = $x + $y;
	var_dump($z);
	echo "<br>";
	var_dump($x == $y);
	var_dump($x === $y);
	var_dump($x != $y);
	var_dump($x <>$y);
	var_dump($x !== $y);
?>
<?php

if($_SERVER['argc'] == 1) {
	help();
}

$file = $_SERVER['argv'][1];

$find = '/\'\]\[\'/';

$string = file_get_contents($file);

echo preg_replace($find,'.',$string);

function help() {
	echo PHP_EOL;
	echo "Converts infix multidimensional arrays to single dimensioned arrays separated by a dot.".PHP_EOL.PHP_EOL;
	echo "Usage: convert.php <tmp_file>".PHP_EOL;
	echo "revert will direct output to stdout.".PHP_EOL.PHP_EOL;
	exit();
}

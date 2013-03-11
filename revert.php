<?php 

if($_SERVER['argc'] == 1) {
	help();
}

$file = $_SERVER['argv'][1];

$find = '/\$[a-zA-Z]*\[\'[a-zA-Z0-9_\.]*\']/';

$string = file_get_contents($file);

echo preg_replace_callback($find, function ($match) {
	return preg_replace('/\./',"']['",$match[0]);
}, $string);


function help() {
	echo "Usage: revert.php <tmp_file>".PHP_EOL;
	echo "revert will direct output to stdout.".PHP_EOL.PHP_EOL;
	exit();
}

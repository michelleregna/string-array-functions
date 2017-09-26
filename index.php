<?php
$str = 'My name is Michelle';
$obj = new main();
$obj -> printThis($str);
$obj -> reverseThis($str);
$obj -> uppercaseThis($str);
$obj -> repeatThis($str);
$obj -> countThis($str);

class main {
	public function __construct() {

	}

	public function printThis($str) {
		echo '<h1>Print Function Demo: </h1>';
		print($str);
		echo '<hr>';

	}

	public function reverseThis($str) {
		echo '<h1>Reverse Function Demo: </h1>';
		echo strrev($str);
		echo '<hr>';
	}

	public function uppercaseThis($str) {
		echo '<h1>Uppercase Function Demo:</h1>';
		echo strtoupper($str);
		echo '<hr>';
	}

	public function repeatThis($str) {
		echo '<h1>Repeat Function Demo:</h1>';
		echo str_repeat($str, 5);
		echo '<hr>';
	}

	public function countThis($str) {
		echo '<h1>Length Function Demo:</h1>';
		echo strlen($str);
		echo '<hr>';
	}

	public function __destruct() {

	}

}

?>
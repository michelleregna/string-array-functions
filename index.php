<?php
$str = 'My name is Michelle';
$obj = new main();

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

	public function __destruct() {
		
	}

}

?>
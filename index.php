<?php
$str = 'My name is Michelle';
$obj = new main();
$obj -> reverseThis($str);
$obj -> uppercaseThis($str);
$obj -> repeatThis($str);
$obj -> countThis($str);
$obj -> shuffleThis($str);
$obj -> lowercaseThis($str);
$obj -> rot13This($str);
$obj -> replaceThis($str);
$obj -> returnThis($str);
$obj -> titlecaseThis($str);

$familyArray = array('Father' => 'Chris', 'Mother' => 'Claire', 'Sister' => 'Allison', 'Dog' => 'Finn');
$obj -> printArray($familyArray);
$obj -> countArray($familyArray);
$obj -> shuffleArray($familyArray);
$obj -> sliceArray($familyArray);
$obj -> searchArray($familyArray);
$obj -> sortKeyArray($familyArray);
$obj -> sortValueArray($familyArray);

class main {
	public function __construct() {
		echo '<h1>String Functions</h1>';

	}


	public function reverseThis($str) {
		echo '<h2>1. Reverse Function Demo:</h2>';
		echo strrev($str);
		echo '<hr>';
	}

	public function uppercaseThis($str) {
		echo '<h2>2. Uppercase Function Demo:</h2>';
		echo strtoupper($str);
		echo '<hr>';
	}

	public function repeatThis($str) {
		echo '<h2>3. Repeat Function Demo:</h2>';
		echo str_repeat($str, 5);
		echo '<hr>';
	}

	public function countThis($str) {
		echo '<h2>4. Length Function Demo:</h2>';
		echo strlen($str);
		echo '<hr>';
	}

	public function shuffleThis($str) {
		echo '<h2>5. Shuffle Function Demo:</h2>';
		str_shuffle($str);
		echo '<hr>';
	}

	public function lowercaseThis($str) {
		echo '<h2>6. Lowercase Function Demo:</h2>';
		echo strtolower($str);
		echo '<hr>';
	}

	public function rot13This($str) {
		echo'<h2>7. Rot13 Function Demo:</h2>';
		echo str_rot13($str);
		echo '<hr>';
	}

	public function replaceThis($str) {
		echo '<h2>8. Substring Replace Function Demo:</h2>';
		echo substr_replace($str, 'nombre', 3, 4);
		echo '<hr>';
	}

	public function returnThis($str) {
		echo '<h2>9. Return Substring Function Demo:</h2>';
		echo substr($str, 11);
		echo '<hr>';
	}

	public function titlecaseThis($str) {
		echo '<h2>10. Ucwords Function Demo:</h2>';
		echo ucwords($str);
		echo '<hr>';
	}

	// Start of Array Functions

	public function printArray($array) {
		echo '<h1>Array Functions</h1>';
		echo '<h2>1. Array Print Function:</h2>';
		print_r($array);
		echo '<hr>';
    }

    public function countArray($array) {
    	echo '<h2>2. Array Count Function:</h2>';
    	echo count($array);
    	echo '<hr>';
    }

    public function shuffleArray($array) {
    	echo '<h2>3. Array Shuffle Function:</h2>';
    	shuffle($array);
    	print_r($array);
    	echo '<hr>';
    }

    public function sliceArray($array) {
    	echo '<h2>4. Array Slice Function:</h2>';
    	$parentsArray = array_slice($array, 0, 2);
    	print_r($parentsArray);
    	echo '<hr>';
    }

    public function searchArray($array) {
    	echo '<h2>5. Array Key Exists Function:</h2>';
    	echo 'Does the key "Sister" exist in the array? Answer: ';
    	echo array_key_exists('Sister', $array);
    	echo '<hr>';
    }

    public function sortKeyArray($array) {
    	echo '<h2>6. Array Key Sort Function:</h2>';
    	ksort($array);
    	print_r($array);
    	echo '<hr>';

    }

    public function sortValueArray($array) {
    	echo '<h2>7. Array Value Sort Function: </h2>';
    	asort($array);
    	print_r($array);
    	echo '<hr>';
    }


	public function __destruct() {

	}

}

?>
<?php

function GeneratePasse(){
	$arr = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'); // get all the characters into an array
	shuffle($arr); // randomize the array
	$arr = array_slice($arr, 0, 6); // get the first six (random) characters out
	$str = implode('', $arr); // smush them back into a string
	
	return($str);
}

?>
<?php

	/*
		Creator: Craig Wallace
		Purpose: To learn khow to use the echo and print command.
		Course Title: PHP Fundamentals
		
		Variables never equal a value: instead, they HOLD a value.
		
	*/
	
	$firstName = 'Craig';
	$lastName = 'Wallace';
	$month = "08";
	$day = "22";
	$year = "1985";
	$results = $firstName.' '.$lastName.' was born on '.$day.'/'.$month.'/'.$year.'.';
	echo $results;

	$num1 = 15;
	$num2 = 2;
	$num3 = 16.587;
	$result = 0.0;

	
	$result = $num1 + ($num2 + $num1) / $num3 + $num2 * 18;
	echo '</br>'.$result;
	
	$result = $num3 / $num2 + $num3 * $num1 - ($num1 * $num2);	
	echo '</br>'.$result;


?>
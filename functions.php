<?php

	require("../../../../config.php");

	session_start();
	

	
	
	//ühendus
	$database = "if16_karlerik";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	
	require("../class/User.class.php");
	$User = new User($mysqli);
	
	require("../class/Interest.class.php");
	$Interest = new Interest($mysqli);
	
	require("../class/Car.class.php");
	$Car = new Car($mysqli);
	
	require("../class/Helper.class.php");
	$Helper = new Helper($mysqli);
	
	
	
	
	// functions.php
	//var_dump($GLOBALS);
	
	// see fail, peab olema kõigil lehtedel kus 
	// tahan kasutada SESSION muutujat

	
	//***************
	//**** SIGNUP ***
	//***************
	

	
	

	
	

	
	

	

	
	
	
	
	

	

	
	
	
	
	/*function sum($x, $y) {
		
		return $x + $y;
		
	}
	
	
	function hello($firsname, $lastname) {
		
		return "Tere tulemast ".$firsname." ".$lastname."!";
		
	}
	
	echo sum(5123123,123123123);
	echo "<br>";
	echo hello("Romil", "Robtsenkov");
	echo "<br>";
	echo hello("Juku", "Juurikas");
	*/

?>
<?php

	require_once 'model/DB_config.php';

	$dpt = "";
	$arv = "";
	$bname = "";
	$type = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$dpt = $_POST["dpt"];
		$arv = $_POST["arv"];
		$bname = $_POST["bname"];
		$type = $_POST["type"];

		$query = "UPDATE bustype SET start = '$dpt', end= '$arv' WHERE busname = '$bname' and type = '$type'";
		execute($query);


	}




?>
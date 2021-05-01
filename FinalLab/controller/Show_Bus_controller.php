<?php
	require_once 'model/DB_config.php';

	$search = "";
	$btype = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

	$search = $_POST["search"];
	$btype = $_POST["btype"];

	$query = "select * from bustype where busname = '$search' and type ='$btype'";
	$result = get($query);

	
}

?>
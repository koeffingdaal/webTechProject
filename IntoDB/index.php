<?php  
	$server="localhost";
	$user="root";
	$password="";
	$db="webtech";
	$conn = mysqli_connect($server,$user,$password,$db);
	if ($conn) {
		echo "connected";
	}else{
		echo mysqli_connect_error();
	}
	$query = "insert into user values (NULL,'tasin','1234','23')";
	$query1 = "insert into user values (NULL,'sazid','123','22')";
	if(mysqli_query($conn,$query)){
		echo "value inserted";
	}else{
		echo "Not inserted";
	}
	mysqli_query($conn,$query1)
?>
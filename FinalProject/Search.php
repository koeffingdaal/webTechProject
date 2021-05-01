<?php
		$server="localhost";
		$user="root";
		$password="";
		$db="webtech";

		$conn = mysqli_connect($server,$user,$password,$db);

		





		
		

		$query = "select age from user";
		$result = mysqli_query($conn,$query);
		//$result = get($query);
?>
		<table>
			<tr>
				
				<th>Age</th>
				
<?php
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						//echo "<td>".$row["username"]."</td>";
						echo "<td>".$row["age"]."</td>";
						//echo "<td>".$row["password"]."</td>";
						echo "</tr>";
					}	

?>
		</table>
		


<!DOCTYPE html>
<html>
<head>
	<title>Bus Search Design</title>
</head>
<body>
	<div>
		<form method="post">
			<h1>Find Desired Bus</h1>
			<div>
				<input type="text" name="search" placeholder="keywords.."/>
				<select name="bus_type">
					<option disabled selected>Choose one</option>

					<option value="1">AC Bus </option>
					<option value="2">Non-AC Bus </option>
					
				</select>
				<button class="search-btn" type="button">Search</button>
			</div>
		</form>
	</div>

</body>
</html>







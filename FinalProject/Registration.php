<?php
	$email = "";
	$err_email = "";

	$pass = "";
	$err_pass = "";

	$uname = "";
	$err_uname = "";

	$phone = "";
	$err_phone = "";



	function ValidateEmail($email){
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at++);
		if ($pos_dot > $pos_at) {
			return true;
		}
		return false;

	}

	function ValidatePass($pass){
		$UpperCase = false; 
		$Lowercase = false ;
		for ($i=0; $i <strlen($pass) ; $i++) { 
			if(ctype_upper($pass[$i])){
				$UpperCase = true;
			}
			if (ctype_lower($pass[$i])) {
				$Lowercase = true;
			}
		}
		if ($UpperCase == false || $Lowercase == false) {
				return false;
			}else{
				return true;
			}

	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){


		$pass = $_POST["pass"];
		$email = $_POST["email"];
		$uname = $_POST["uname"];
		$phone = $_POST["phone"];

		$server="localhost";
		$user="root";
		$password="";
		$db="webtech";

		$conn = mysqli_connect($server,$user,$password,$db);
		if (!$conn) {
				die("Connection failed: ".mysqli_connect_error());
			}

		$query = "insert into registration values ('$uname','$pass','$email','$phone')";

		mysqli_query($conn,$query);
			




		if (empty($email) || !ValidateEmail($_POST["email"])) {
			$err_email = "Email Required";
		}else{
			$email = htmlspecialchars($_POST["email"]);
		}





		if(empty($pass) || !ValidatePass($pass)){
			$err_pass = "Password Required";
		}else{
			$pass = htmlspecialchars($_POST["pass"]);
		}





		if(empty($_POST["uname"]) || strlen($_POST["uname"]) <= 6) {
			$err_uname = "Username must contain at least 6 characters";
		}
		else{
			$uname = $_POST["uname"] ;
		}





		if (!empty($_POST["phone"]) && is_numeric($_POST["phone"])) {
			$phone = $_POST["phone"];
			
		}else{
			$err_phone = "Phone Number must be contained Numeric value" ;
			
		}



	}
?>


<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			boarder :5px;
			background: #f0f0f0;
		}
	</style>
</head>
<body>
	<div align="center">
		<h1>REGISTRATION</h1>
		<form method="post" action="">
			<table>
				<tr>
					<td><span>Name</span></td>
					<td>:<span><input type="text" name="name" placeholder="Name"></span></td>
				</tr>
				<tr>
					<td><span>UserName</span></td>
					<td>:<input type="text" name="uname" placeholder="UserName"></td>
					<td><?php echo $err_uname; ?></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<span><input type="Password" name="pass" placeholder="Password"></span></td>
					<td>
						<?php echo $err_pass;?>
					</td>
				</tr>
				<tr>
					<td><span>Confirm Password</span></td>
					<td>:<input type="Password" name="" placeholder="ConfirmPassword"></td>
				</tr>
				<tr>
					<td><span>Email</span></td>
					<td>:<input type="text" name="email" placeholder="Email"></td>
					<td>
						<?php echo $err_email;?>
					</td>
				</tr>
				<tr>
					<td><span>Phone Number</span></td>
					<td>:<span><input type="string" name="phone" placeholder="PhoneNumber"></span></td>
					<td>
						<?php echo $err_phone; ?>
					</td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="Gender" >Male 
						<input type="radio" name="Gender">Female 
				</td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td>:<input type="text" placeholder="Street Address">
						<input type="text" placeholder="City"> 
						<input type="text" placeholder="State">
						<input type="text" placeholder="PostalCode">
					</td>
						
				</tr>

				<tr>
					<td><input type="submit" value="Sign Up"></td>
					
				</tr>


			</table>
		</form>
	</div>

</body>
</html>
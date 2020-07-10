<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$fnameErr = $emailErr = $passwordErr = $conformpasswordErr = "";
$fname = $email = $password = $conformpassword = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(empty($_POST['fname'])){
		$fnameErr = "name is required";		
	}
	else{
		$fname = $_POST['fname'];
		if(!preg_match("/^[a-zA-z ]*$/",$fname)){
			$fnameErr = "only letter and white sapce allowed";
		}
	}
	if(empty($_POST['email'])){
		$emailErr = "email is required";		
	}
	else{
		$email = $_POST['email'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "Inavalid email format";
		}
}
if(empty($_POST['password'])){
		$passwordErr = "password is required";		
	}
	else{
		$password = $_POST['password'];
	}
	if(empty($_POST['confirm_password'])){
		$conformpasswordErr = "conform_password is required";		
	}
	else{
		$conformpassword=$_POST['confirm_password'];
		if($_POST['password']!= $_POST['confirm_password']){
		$conformpasswordErr = "password not equel to same";
	}
	}
}
include "conn.php";
  ?>

					<h1>SignUp</h1>
					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table>
					<tr>
					    <td>First Name:</td>
					    <td><input type="text" class="form-control" name="fname" id="fname"></td>
					    <td><span class="error">* <?php echo $fnameErr;?></span></td>
                        
					
					</tr>
					<tr>
					    <td>Email address:</td>
					   <td><input type="email" class="form-control" name="email" id="email"></td>
					   <td><span class="error">* <?php echo $emailErr;?></span></td>
					
					</tr>
					<tr>
					    <td>Password:</td>
					    <td><input type="password" class="form-control" name="password" id="password"></td>
						<td><span class="error">* <?php echo $passwordErr;?></span></td>
					
					</tr>
				
					<tr>
					
					    <td>Confirm Password:</td>
					    <td><input type="password" class="form-control" name="confirm_password" id="confirm_password"></td>
						<td><span class="error">* <?php echo $conformpasswordErr?></span></td>
					</td>
					</tr>
					
					<td>
					<button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
					</td>
					
					</table>
				</form>
				
				</body>
		</html>
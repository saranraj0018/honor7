<?php
include 'conn.php';
?>

<?php

if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	if($name!=""&&$pass!=""){
		$sql="SELECT FIRST_NAME,PASSWORD FROM sharan WHERE FIRST_NAME='$name' AND PASSWORD='$pass'";
		$result=$conn->query($sql);
		if($result->num_rows==1){
			header("location:register.php");
		}
		else{
			echo "Invalid user";  
		}
	}
	else{
		echo "<p class='error'>please enter the name and password</p>";
	}
	
}
else
{
	echo "<p>please fill the details";
}
?>
<html>
<body>
<form method="POST" action="loginpage.php">
<table>
<tr>
<td> username</td> 
<td><input type ="text" name ="name">
</tr>
<tr>
<td>password</td>
<td><input type ="password" name ="pass">
</tr>

<tr>
<td><input type ="submit" name ="submit" value="Login">
</tr>
</table>
</form>
</body>
</html>






























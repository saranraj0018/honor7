<html>
<body>
<?php
$user="root";
$pass="";
$db="sharan";
if(isset($_POST["btnsignup"])) {
	

$conn=mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect").mysqli_connect_error();
echo "super sharan";
$sql = "INSERT INTO sharan(FIRST_NAME,MAIL_ID,PASSWORD,CONFORM_PASSWORD)VALUES('".$_POST["fname"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["confirm_password"]."')";

if (mysqli_query($conn,$sql)) {
	echo "new record create successfully";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
<?php
include 'conn.php';
/*$sql = "CREATE TABLE raj (
ID int(10),
Task varchar(255))";

if (mysqli_query($conn, $sql)) {
  echo "Table raj created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
*/
if(isset($_POST['save'])){
	$name=$_POST['name'];
	$id=$_POST['id'];
	$sql="INSERT INTO raj(ID,Task) VALUES('$id','$name')";
	if(mysqli_query($conn,$sql)){
	echo"inserted";
	}
}
if(isset($_POST['deleted'])){
	$name=$_POST['name'];
	$id=$_POST['id'];
	$sql="DELETE FROM raj WHERE ID=$id";
	if(mysqli_query($conn,$sql)){
	echo"deleted";
	}
}
if(isset($_POST['edit'])){
	$name=$_POST['name'];
	$id=$_POST['id'];
	$sql="UPDATE raj SET Task='$name' WHERE ID='$id'";
	if(mysqli_query($conn,$sql)){
	echo"edit";
	}
}
$saran=mysqli_query($conn,"SELECT * FROM raj");		
?>


<html>
<body>

<center><h3>welcome sharan</h3>
<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
<table>
<tr>
<th>s no</th>
<th>task</th>
</tr>
<tr>
<td><input type="text" name="id" required></td>
<td><input type="text" name="name" required></td>
<td><input type="submit" name="save" value="save">
<td><input type="submit" name="deleted" value="deleted">
<td><input type="submit" name="edit" value="edit">
</tr>
</tr>
</table>
<?php while($row=mysqli_fetch_array($saran)){ ?>
<?php echo $row['ID'];  ?>
<?php echo $row['Task']; echo "<br>"?>

<?php } ?>
</center>
</body>
</html>

<?php
$status=$_GET["status"];
$user="root";
$pass="";
$db="sharan";
$status=$_GET["status"];
if($status=="disp"){
$conn=mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect").mysqli_connect_error();
echo "connected";

mysqli_select_db($conn,"sharan");
$res=mysqli_query($conn,"select * from js");
echo "<table>";
while($row=mysqli_fetch_array($res))
{
	echo "<tr>";
	echo "<td>"; echo $row["id"]; echo "</td>";
	echo "<td>"; ?><div id="name<?php echo $row["id"]; ?>"> <?php echo $row["name"]; ?> </div> <?php  echo "</td>";
	echo "<td>"; ?><div id="age<?php echo $row["id"]; ?>"> <?php echo $row["age"]; ?> </div> <?php echo "</td>"; 
	echo "<td>"; ?> <input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="delete" onClick="delete1(this.id)"><?php echo "</td>";
	echo "<td>"; ?>               
	<input type="button" id="<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="edit" onclick="aa(this.id)">
	<input type="button" id="update<?php echo $row["id"]; ?>" name="<?php echo $row["id"]; ?>" value="update" style="visibility:hidden" onclick="bb(this.name)">
	 <?php echo "</td>";
	

	
	
	echo "</tr>";
	
}
echo "</table>";
}
if($status=="update")
{
	$id=$_GET["id"];
	$name=$_GET["name"];
	$age=$_GET["age"];
	
	$name=trim($name);
	$age=trim($age);
	


$res=mysqli_query($conn,"update js set name='$name',age='$age' where id='$id'");
	
} 
if($status=="delete")
{
	$id=$_GET["id"];
	
	
	$conn=mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect").mysqli_connect_error();
echo "connected";	
mysqli_select_db($conn,"sharan");
$res=mysqli_query($conn,"DELETE FROM js WHERE id=$id");	
}

if($status=="ins")
{
$nm=$_GET["nm"];
$ct=$_GET["ct"];

$conn=mysqli_connect('localhost',$user,$pass,$db);
mysqli_select_db($conn,"sharan");
$res=mysqli_query($conn,"insert into js values('','$nm','$ct')");



}
?>
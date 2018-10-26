<?php
include("libs/config.php");
error_reporting(0);
$id=$_GET['id'];
$query="DELETE FROM `add_product` WHERE id='$id'";
$data= mysqli_query($conn,$query);


if($data)
{
	
	echo "<font color='green'>record deleted";
	header("location:menu(view-1).php");


}
else{
	echo "delete process failed";
}


?>

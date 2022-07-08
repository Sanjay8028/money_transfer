<?php 
error_reporting(0);

session_start();

include('connection.php');

$sarch=$_POST['sarch']; 

$sql="SELECT username,amount from distribute where username='$sarch'";
 //echo $sql;
//die();
		$data=mysqli_query($conn,$sql) or die("search details");

		mysqli_num_rows($data);

		while($row=mysqli_fetch_assoc($data))
		{
			echo "<input type='text' name='search' class='form-control text-success' readonly value=".$row['username'].">";


			echo "<input type='text' name='amount' class='form-control text-success' readonly value=".$row['amount'].">";
			 }
	
 ?>

 
  
 
<?php 

	$conn=mysqli_connect('localhost','root','','youtube');
	if (!$conn) {
		echo "falied";
	}
	// echo "connect";
 ?>

 <?php 

	 

// session_start();
$errors = [];
$user_id = "";
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'youtube');

 ?>
 
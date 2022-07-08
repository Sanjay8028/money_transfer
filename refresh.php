  

 <?php 
  session_start();
	include('connection.php');

	$userid=$_SESSION['id'];

					$usa="SELECT amount FROM `distribute` WHERE id= $userid";	

						$sal=mysqli_query($conn,$usa);
						mysqli_num_rows($sal);
						$data=array();
						while ($row=mysqli_fetch_array($sal)) {

	                      echo $row['amount']; 
	                        // echo $row['username'];

	                      
	                 }


                  ?>
<!-- C:\xampp\htdocs\transfer\validation.php -->



 





 
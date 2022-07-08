 <?php 
session_start();
	include('connection.php');
		if (isset($_POST['userbtn'])) {
			
			$user1=$_POST['user1']." send";
			 	
             $user2=$_POST['Search'];
			 	
			    $useramt=$_POST['useramt'];

			
			    $userid=$_SESSION['id'];

			// echo $useramt;
			// die();

			$usal="SELECT amount FROM `distribute` WHERE id= $userid";	
			//echo " $usal"; 	
					$sala=mysqli_query($conn,$usal);
					mysqli_num_rows($sala);
					while ($row=mysqli_fetch_assoc($sala)) {
					$ab=$row['amount'];
					$cur=$ab-$useramt;

					if($ab >= $useramt)
					 {
					 
					$add="UPDATE distribute SET amount=$cur WHERE id=$userid";			   
			       $run= mysqli_query($conn,$add);
			    if(isset($run)){
			    	echo "<script>alert('updated amt');</script>";
			   
 
		       $sql="SELECT username,amount from distribute where username='$user2'";

		    echo $sql;
            $data1=mysqli_query($conn,$sql);
            mysqli_num_rows($data1);
            while ($row=mysqli_fetch_assoc($data1)) {
           			$ss=$row['amount'];

           		$a=$ss+$useramt;
           		 
           
						$add="UPDATE distribute SET amount=$a WHERE username='$user2'";		
						//echo $add;	   
			    	mysqli_query($conn,$add);

			    	$sql1="INSERT INTO vallet ( user1, user_id,current,amount) VALUES ( '$user1','$user2', '$useramt', '$ab')";
			    	echo $sql1;
			    //die();
			    		mysqli_query($conn,$sql1);				
			    $_SESSION['success_message'] = "your transaction is successfull";
			    // $_SESSION['$total'];
			    header("Location: welcome.php");
			    	echo " <script>window.location='welcome.php';<script>"; 

  }  

           }
           else 
           {
           	// echo " <script>alert ('insuficiant bailance')</script>";
           } 
           


           }
              echo "<script>alert('insuficiant bailance') 
              window.location='welcome.php';
             </script>"; 


}
}


			

 ?>

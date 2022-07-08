<?php 
session_start();
	include('connection.php');
		if (isset($_POST['userbtn1'])) {
			$userS=$_POST['userS']." send";
			 	
            $user2=$_POST['SearchS'];
			$usernameA=$_POST['searchS'];
			$last=$_POST['useramtS'];	
			$useramt=$_POST['useramtS'];

			
			$userid=$_SESSION['id'];

			//echo $useramt;
			//die();

			$usal="SELECT amount FROM `distribute` WHERE id= $userid";	
			//echo " $usal";
			//die();	
					$sala=mysqli_query($conn,$usal);
					mysqli_num_rows($sala);
					while ($row=mysqli_fetch_assoc($sala)) {
					$ab=$row['amount'];
					if($ab >= $useramt) {
					$cur=$ab+$useramt;
			
					$add="UPDATE distribute SET amount=$cur WHERE id=$userid";	echo $add;		   
			    mysqli_query($conn,$add);
           
           }


}




			//echo $user1." ".$user2." ".$usernameA."".$last." ".$useramt;
$totl=$last - $useramt;
//echo "<br>".$totl;


		$sql="SELECT username,amount from distribute where username='$user2'";

		echo $sql;
            $data1=mysqli_query($conn,$sql);
            mysqli_num_rows($data1);
            while ($row=mysqli_fetch_assoc($data1)) {
           			$ss=$row['amount'];
           		$a=$ss-$useramt;
           			echo $a;

           			 // die();
           
						$add="UPDATE distribute SET amount=$a WHERE username='$user2'";		
						//echo $add;	   
			    	mysqli_query($conn,$add);

			    	$sql1="INSERT INTO vallet ( user1, user_id, usermame1,current,amount) VALUES ( '$userS', '$user2', '$usernameA', '$useramt', '$a')";
			    	echo $sql1;
			    //die();
			    		mysqli_query($conn,$sql1);				
			    $_SESSION['success_message'] = "your transaction is successfull";
			     $_SESSION['$total'];
			     header("Location: welcome.php");

 
           }          
            
	 
}

			

 ?>
 
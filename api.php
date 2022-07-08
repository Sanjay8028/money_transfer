  <?php
 
 $conn=mysqli_connect('localhost','root','','youtube');
	if (!$conn) {
		echo "falied";
	}
	
else{


$qu = "SELECT * FROM distribute";
 
$result = mysqli_query($conn,$qu);
 
mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)) 
        {
        	echo "<pre>";
        print_r($row);
    

}
 


}
?>  
<!-- 
 <?php
 
 $conn=mysqli_connect('localhost','root','','youtube');
	if (!$conn) {
		echo "falied";
	}
	
else{

                $user_name = $_POST['email'];
		$email = $_POST['email_id'];
		$password = $_POST['pswd'];

		$sql = "insert into distribute (username,email,password) values ('$user_name','$email','$password')";

  
      $data=mysqli_query($conn,$sql);

      echo $data;

      if($data) 
      
            {
                $arr=['msg'=>'Record insert sucess','status'=>100];

               echo  json_encode($arr);
    
            }

            else{
               $arr=['msg'=>'Record not insert ','status'=>100];

               echo  json_encode($arr);
            }

    
      
 
}

?>
 

 -->
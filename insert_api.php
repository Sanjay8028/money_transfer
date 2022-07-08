
 <?php

 include('connection.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
 
        $user_name = $_POST['email'];
        $email = $_POST['email_id'];
        $password = $_POST['pswd'];


        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {


        $sql = "insert into distribute (username,email,password) values ('$user_name','$email','$password')";

           $data3= mysqli_query($conn, $sql);
           echo $data3;
           print_r($data3);

         if($data3) 

      
            {
                $arr=['msg'=>'Record insert sucess','status'=>100];

               echo  json_encode($arr);
    
            }


            else{
               $arr=['msg'=>'Record not insert ','status'=>100];

               echo  json_encode($arr);
            }

}
}
    
      
 


?>
 
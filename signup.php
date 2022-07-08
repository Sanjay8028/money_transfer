<?php 
session_start();

include('connection.php');
 
	if($_SERVER['REQUEST_METHOD'] == "POST")
		

	{
		//something was posted
		$user_name = $_POST['email'];
		$email = $_POST['email_id'];
		$password = $_POST['pswd'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			//$user_id = random_num(20);
			$sql = "insert into distribute (username,email,password) values ('$user_name','$email','$password')";

			mysqli_query($conn, $sql);


			header("Location:login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6">
  <h2>signup Form</h2>
  <form  method="post" action=" ">
    <div class="form-group">
      <label for="email">username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="email">
    </div>
      <div class="form-group">
      <label for="email">email :</label>
      <input type="email" class="form-control" id="email_id" placeholder="Enter email" name="email_id">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    
     
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>

</body>
</html>
 
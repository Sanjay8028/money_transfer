 
 
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
<body style="backgroundcolor: lightpink;">


 <?php 
session_start();
include('connection.php');
  
  if (isset($_POST['submit1'])) {
    $user=$_POST['email'];
    $pass=$_POST['pswd'];
    
    $email_id=$_POST['email_id'];
    $sql="select id,username,email from distribute where username='$user'and email='$email_id' and password='$pass'";
    // echo $sql;
// die();
    $data=mysqli_query($conn,$sql);
    // $query = mysqli_query($db_conx, $sql)
     // echo "<script>alert('login successfully')</script>";
    mysqli_num_rows($data);
    if ($row=mysqli_fetch_assoc($data)) {
      $_SESSION['id']=$row['id'];
      $_SESSION['user']=$row['username'];
     $_SESSION['email_id']=$row['email_id'];


     // $_SESSION['password']=$row['password'];

      // echo $_SESSION['user'];
      echo "<script>alert('login successfully') 
           window.location='welcome.php';
        </script>";

      

    }

    else{

    
        echo "<script>alert('login failed try again')</script>";
      // echo "login failed try again";
      }


  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
 

<div class="container">
  <h2>Login Form</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="email">
    </div>
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email_id" placeholder="Enter email" name="email_id">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    
    <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
      
  </form>
<p><a href="new_password.php">Forgot your password?</a></p>
 <p><a href="signup.php"> Signup?</a></p>
</div>
 </div>
</div>
  <!-- <p><a href="reset.php"> Reset password</a></p> -->
</body>
</html>



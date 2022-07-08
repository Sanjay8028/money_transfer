  
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/> 
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

   
</head>


<body>
<!-- 
<div class="container">  
  <div class="container p-3 my-3 border"> -->
   <table style="background-color:yellow;"> 

  
  <!-- <table style="background-color:lightyellow;"> -->
  <thead style="width:50%;"> 
   <tr style="background-color: green;">
      <th class="th-sm">id &nbsp; &nbsp; &nbsp;
      </th>
      <th class="th-sm">password&nbsp; &nbsp; &nbsp;
      </th>
      <th class="th-sm">username &nbsp; &nbsp; &nbsp;
      </th>
    
      <th class="th-sm">Amount&nbsp; &nbsp; &nbsp;
      </th>

      <th class="th-sm">Email &nbsp; &nbsp; &nbsp;
      </th>

      
  </thead>
  <tbody>
      <?php 
        session_start();
	include('connection.php');

	$uid=$_SESSION['id'];
 
      // include('connection.php');
      //      	$uid=$_SESSION['id'];

					$usa="SELECT id, password, amount, username, email FROM `distribute` WHERE id= $uid";	
				// echo " $usa";

						$sal=mysqli_query($conn,$usa);
						mysqli_num_rows($sal);
						$data=array();
						while ($row=mysqli_fetch_array($sal)) 
							{?>
								<h5>your Account Details below</h5>
                      <tr>
                      <td><a href="#" style="color: black";><?php echo $row['id'] ?></a></td>
                      <td><?php echo $row['password'] ?></td>
                      <td><?php echo $row['username'] ?></td>
                    
                      <td><?php echo $row['amount'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    </tr>
                    
                  <?php  } ?>



  </tbody>

</table>
</body>
</html>

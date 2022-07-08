 <?php
 
  session_start(); 
 ?>
 <?php 
include('connection.php');
  if(isset($_POST['addmoney']))
   {


    $money=$_POST['amount'];
    $avball=$_POST['allance'];
    $totalbal=$money+$avball;
    

    $id=$_SESSION['id'];


    $add="UPDATE distribute SET amount=$totalbal WHERE id=$id";
    mysqli_query($conn,$add);
    echo "<script>alert('record updated')</script>";
    }
 ?>

 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- <script src="https//"> </script> -->

  <style type="text/css">
    #btnclick{
      border-radius: 30%;
    }
  
    
    .pg1{
      background: greenyellow;
      border-radius: 25px;
      margin-right: 800px;
      padding: 7px;
    }
  </style>
</head>

<body style=":black;">


<!-- <div class="container">  -->
<!-- <div class="jumbotron" style="background-color: lightyellow;"> -->
  <div class="container">
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Amount</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label>Current Balance </label>
                <?php 
               include('connection.php');
                  $uid=$_SESSION['id'];                 
                  $sql="select amount from distribute where id=$uid";
                  $data1=mysqli_query($conn,$sql);
                  mysqli_num_rows($data1);
                  while($row=mysqli_fetch_assoc($data1)){
                    $uamt=$row['amount'];                   
                    ?>

                  <input type="text" name="allance" value="<?php echo $uamt; ?>" class="form-control text-center" readonly> 
               <?php }
              ?>
            </div>
            <div class="form-group">
              <label>add new balance</label>
                <input type="number" class="form-control" name="amount">
            </div>            
            <button type="submit" name="addmoney" class="btn btn-primary" value="">add money</button>
          </form>            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>        
      </div>
    </div>
  </div>
  <br> 
  <br>
  <div class=" ">
      <h3 class="text-center pg">Login username : <?php echo "<span class='text-success'>".$_SESSION['user']."</span>" ?></h3>

     <h4 class="pg1">Your amount : <span style="color:blueviolet;" id="show"></span></h4>
          <!-- <button class="btn btn-danger"> -->

   <!--     <?php 
                
                 include('connection.php');

                 $uid=$_SESSION['id'];                 
                  $sql="select amount from distribute where id=$uid";
                  $data1=mysqli_query($conn,$sql);
                  mysqli_num_rows($data1);
                  while($row=mysqli_fetch_assoc($data1)){
                    echo $row['amount']; } ?>  --> 
 

              </div>
            </div>
            </div>
      <div class="container">

        <div class="row">
            <div class="col-md-4">
              <button class="btn btn-success text-left" data-toggle="modal" data-target="#myModal">Add ballance</button><br>

    
            </div>
            <!-- <div class="col-md-4 text-right"> -->
  <div class="col-md-2">
    <a href="table.php" class="btn btn-info text-right"> Transectin History</a>
  </div>
 
       <div class="col-md-6">
    <div id="loaddata"><b>Account Details</b><button class="btn-primary" id="btnclick">click here</button>
       
  </div>
              </div>
            

            </div>
          
        </div>  

      </div>
    </div>
  </div>

</div>
  </div>
  <div class="container"> 
    <div class="row">

      <div class="col-md-4  mt-2 btn-light">

        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>

                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    } ?>        
                    <!-- action="save.php"            -->
          <form  method="post" action="save.php">
            <label for="Amount">username:</label>
              <div class="form-group d-flex">                
                <input type="text" class="form-control" readonly id="Amount" value="<?php echo $_SESSION['user']; ?>" name="user1">
              </div>              
              <div class="form-group" >               
                <label for="pwd">Search Username</label>
                <input type="text" class="form-control" id="Search" placeholder="username" name="Search" required>                 
              </div>  

              <div class="form-group" id="search_id">               
              
                              
              </div>

               
              <div class="form-group">
                <label for="pwd">Amount:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Your Amount" name="useramt" required>   
              </div>
              <button type="submit" name="userbtn" class="btn btn-primary">Submit</button>
             <button class="btn-danger p-1 col-lg-3"> <a href="login.php" style="color: white;">Login</a></button> 

                <!-- <button type="submit" name=" " class="btn btn-primary">Login</button> -->
              

          </form>
      </div>
       
      <!-- <div class="col-md-4"> -->
         <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    } ?>        
             
          
           
      </div>
          
      </div>          
      </div>

    </div>  

</div>
      </div>
          
      </div>          
      </div>
    </div>
 
 

</div>
 
<script type="text/javascript">
  $(document).ready(function(){
    setInterval(function(){
      $('#show').load('refresh.php')
  },0);

  });

 </script>  

<script type="text/javascript">
  $(document).ready(function(){
   $('#btnclick').click(function(){
    $('#loaddata').load('details.php');
  })

   });
 </script>
  
 

 

 
<script type="text/javascript">
    $("#Search").on("keyup",function () {
      var search_bar=$(this).val();
      $.ajax({
        url:"validation.php",
        type:"post",
        data:{sarch:search_bar},
        success:function(data){
          $("#search_id").html(data);
          console.log(data);
        }
      })
    })
</script>

</body>
</html>


 
<!--  <script type="text/javascript">
    $("#SearchS").on("keyup",function () {
      var search_bar1=$(this).val();
      $.ajax({
        url:"validation.php",
        type:"post",
        data:{sarch2:search_bar1},
        success:function(data){
          $("#search_id1").html(data);
          console.log(data);
        }
      })
    })
</script> --> 
<!--  <script>

function loadlink(){
    $('#links').load('refresh.php',function () {
         $(this).unwrap();
    });
}

loadlink(); // This will run on page load
setInterval(function(){
    loadlink() // this will run after every 5 seconds
}, 1000);

 </script> -->

  
 
<!-- </body>
</html>
 -->
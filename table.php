 

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
  <style type="text/css">
      table.dataTable thead .sorting:after,
      table.dataTable thead .sorting:before,
      table.dataTable thead .sorting_asc:after,
      table.dataTable thead .sorting_asc:before,
      table.dataTable thead .sorting_asc_disabled:after,
      table.dataTable thead .sorting_asc_disabled:before,
      table.dataTable thead .sorting_desc:after,
      table.dataTable thead .sorting_desc:before,
      table.dataTable thead .sorting_desc_disabled:after,
      table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
      }
  </style>
</head>
<body>  
<div class="container p-3 my-3 border">
  <table id="dtDynamic" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th class="th-sm">id
      </th>
      <th class="th-sm">user1
      </th>
      <th class="th-sm">user2
      </th>
       <th class="th-sm">current
      </th>
      <th class="th-sm">Amount
      </th>
      <th class="th-sm"> date
      </th>
    </tr>
  </thead>
  <tbody>

      <?php include('connection.php');
                   $data= mysqli_query($conn,"select * from vallet");
                    mysqli_num_rows($data);
                    while($row=mysqli_fetch_assoc($data)){?>
                      <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['user1'] ?></td>
                      <td><?php echo $row['user_id'] ?></td>
                     <td><?php echo $row['current'] ?></td>
                      <td><?php echo $row['amount'] ?></td>
         
                      <td><?php echo $row['create_at'] ?></td>
                    </tr>
                    
                  <?php  } ?>


  </tbody>
</table>
<a href="welcome.php" class="btn btn-warning">back</a>
</div>
<script type="text/javascript">
  $(document).ready(function () {
$('#dtDynamic').DataTable({
"scrollY": "50vh",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});
</script>
</body>


</html>


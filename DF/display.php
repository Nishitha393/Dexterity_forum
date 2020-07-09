 <?php      
    include 'conn.php';
//    $username = $_POST ['username'];
//    $password = $_POST ['password'];
    
    if(isset($_POST['done'])){
    header('location:insert.php');            
}

  if(isset($_POST['done2'])){
    header('location:login.php');            
}

    $q = "select * from admin";
    $query = mysqli_query($con, $q);
            
?>

<html>
    <head>
        <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  
  
    
    
    </head>
    <body>
        <form method="post">
        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1  class="text-warning text-center">Bootstrap 3 DataTable Example</h1>
                <br>
                <button class="btn btn-success" type="submit" name="done">Add New Record</button>
                 <button class="btn btn-success" type="submit" name="done2">Go to Login</button>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    
                    <thead>
<!--table row -->  <tr class="bg-dark text-white text-center">
<!--table header-->     <th> Id </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Delete </th>
                        <th> Update </th>
                    </tr>
                    </thead>
      <!--yeha par display ka Heading end kiye hain.-->                    
                    <tbody> 
                    <?php
                      include 'conn.php';
                      $q ="select * from admin";
                      $query = mysqli_query($con,$q);
                      
                      while($res = mysqli_fetch_array($query)){
                    ?>

       
                    <tr class="text-center">
                        <td> <?php echo $res['id']; ?></td>
                        <td> <?php echo $res['username']; ?></td>
                        <td> <?php echo $res['password']; ?></td>
                        <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>
                        <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>    
                    </tr>

                 
                    <?php
                      }
                    ?>
                   </tbody>
                </table>
            </div>      
        </div>
        </form>   
        <script>
      $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    </body>
</html>
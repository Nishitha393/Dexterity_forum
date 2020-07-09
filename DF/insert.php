<?php
include 'conn.php';
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q ="INSERT INTO `admin`(`username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($con,$q);
header('location:display.php');            
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="col-lg-6 m-auto">
            <form method="post">
                <br>
                <br>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center"> User login</h1>
                    </div>
                    <br>    
                    <label>Username:</label>
                    <div>
                    <input type="text" name="username" class="form-control">
                    </div>
                    <br>
                    <label>Password:</label>
                    <input type="text" name="password" class="form-control">
                    <br>
                    <button class="btn btn-success" type="submit" name="done">Submit</button>
                    <br>        
            </form>
        </div>
    </body>
</html>

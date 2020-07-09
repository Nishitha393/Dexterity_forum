<?php
include 'conn.php';
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q ="select * from `admin` where `username`='$username' and  `password`='$password'";
    if($result = $con->query($q)){
    if($row=$result->fetch_assoc()){
    session_start();
    
    $_SESSION['username'] = $_POST['username'];
header('location:Adminhome.php');            
}
}
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
    <body style="background: url(image/index.jpg)">
        <div class="col-lg-6 m-auto" style="">
            <form method="post">
                <br>
                <br>
                <div class="card" style="box-shadow: 0px 0px 5px #014c8c;border-radius: 50px">
                    <div class="card-header bg-dark" style="border-radius: 50px;box-shadow: 0px 0px 15px #000" >
                        <h1 class="text-white text-center">Dexterity Forum Admin</h1>
                    </div>
                    <br> 
                    <div style="padding:100px">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control">
                    <br>
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control">
                    <br>
                    <button class="btn btn-success" type="submit" name="done">Submit</button>
                    <br> 
                    </div>
            </form>
        </div>
    </body>
</html>

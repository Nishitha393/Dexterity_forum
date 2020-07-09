
<?php      
 session_start();
    include 'conn.php';
//    $username = $_POST ['username'];
//    $password = $_POST ['password'];
    
      if(isset($_POST['done'])){
    header('location:insert2.php');            
}
          
?>


<html>
    <head>
        <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        
    </body>
</html>

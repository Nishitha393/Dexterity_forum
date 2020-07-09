 <?php      
 session_start();
    include 'conn.php';
//    $username = $_POST ['username'];
//    $password = $_POST ['password'];
    
    if(!isset($_SESSION['username'])){
  // 
    header('location:index.php');
}

    if(isset($_POST['done'])){
    header('location:insertPost.php');            
}


    $q = "select * from post";
    $query = mysqli_query($con, $q);
            
?>

<html>
    <head>
        <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    </head>
    <body>
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">IBDF</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            <li><a href="displayAllQuestions.php">View All Question</a></li>
      <li><a href="displayQuestions.php">View Asked Question</a></li>
      <li><a href="displayAnswers.php">View Answers</a></li>
        <li><a href="index.php">Logout</a></li>
      
    </ul>
  </div>
</nav>
        
        <form method="post">
        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1  class="text-warning text-center">Display Table Data</h1>
                <br>
                <button class="btn btn-success" type="submit" name="done">Add New Record</button>
                <table class="table table-striped table-hover table-bordered">
                    
                    
<!--table row -->  <tr class="bg-dark text-white text-center">
<!--table header-->     <th> Id </th>
                        <th> Date </th>
                        <th> Description </th>
                        <th> Delete </th>
                        <th> Update </th>
                    </tr>
      <!--yeha par display ka Heading end kiye hain.-->                    
                    
                    <?php
                      include 'conn.php';
                      $q ="select * from post";
                      $query = mysqli_query($con,$q);
                      while($res = mysqli_fetch_array($query)){
                    ?>

                      
                    <tr class="text-center">
                        <td> <?php echo $res['id']; ?></td>
                        <td> <?php echo $res['Date']; ?></td>
                        <td> <?php echo $res['dese']; ?></td>
                        <td> <button class="btn-danger btn"> <a href="deletePost.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a> </button> </td>
                        <td> <button class="btn-primary btn"> <a href="updatePost.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>    
                    </tr>

                 
                    <?php
                      }
                    ?>
                   
                </table>
            </div>      
        </div>
        </form>   
    </body>
</html>
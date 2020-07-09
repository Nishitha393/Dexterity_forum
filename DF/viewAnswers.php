 <?php      
 session_start();
    include 'conn.php';
//    $username = $_POST ['username'];
//    $password = $_POST ['password'];
    
    if(!isset($_SESSION['username'])){
  // 
    header('location:login.php');
}
if(!isset($_GET['id'])){
    header('location:displayAllQuestions.php');
}else{
    $id = $_GET['id'];
}
if(!isset($_GET['Q'])){
header('location:displayAllQuestions.php');
}else{
    $Qus = $_GET['Q'];
}
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
      <a class="navbar-brand" href="home.php">Dexterity Forum</a>
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
                <h1  class="text-warning text-center">Question: <?php echo $Qus;?></h1>
                <br>
              <table class="table table-striped table-hover table-bordered">
                    
                    
<!--table row -->  <tr class="bg-dark text-white text-center">
<!--table header-->     
                        <th> Answered by </th>
                        <th> Answer </th>
                        <th> Status </th>
                        <th>Approve</th>
                    </tr>
      <!--yeha par display ka Heading end kiye hain.-->                    
                    
                    <?php
                      include 'conn.php';
                      $q ="select *,(select name from student where id=answers.Uid)as uname from answers where Qid=$id";
                      $query = mysqli_query($con,$q);
                      while($res = mysqli_fetch_array($query)){
                          
                    ?>

                      
                    <tr class="text-center">
                        <td> <?php echo $res['uname'];?></td>
                        <td> <?php echo $res['Answer']; ?></td>
                        <td> <?php echo $res['Status']; ?></td>
                        <td> <button class="btn-danger btn"> <a href="ApproveAnswer.php?id=<?php echo $id; ?>&aid=<?php echo $res['id'];?>" class="text-white" style="color: white"> Approve Answers </a> </button> </td>
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
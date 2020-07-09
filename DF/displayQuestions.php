 <?php      
 session_start();
    include 'conn.php';
//    $username = $_POST ['username'];
//    $password = $_POST ['password'];
    
    if(!isset($_SESSION['username'])){
  // 
    
        header('location:login.php');
}
    
    $uid =  $_SESSION['id'];
    if(isset($_POST['done'])){
    header('location:insertQuestions.php');            
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
    <body style="background-image: url('image/user.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
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
        <div class="container" style="background-color: rgba(225,225,225,0.8);">
            <div class="col-lg-12">
                <br><br>
                <h1  class="text-warning text-center">Display Questions</h1>
                <br>
                <button class="btn btn-success" type="submit" name="done">Ask New Question</button>
                <table class="table table-striped table-hover table-bordered">
                    
                    
<!--table row -->  <tr class="bg-dark text-white text-center">
<!--table header-->     <th> Id </th>
                        <th> Question </th>
                        <th> User ID </th>
                        <th> Answers </th>
                        <th> Status </th>
                        <th> View </th>
                        <th> Delete </th>
                        <th> Update </th>
                    </tr>
      <!--yeha par display ka Heading end kiye hain.-->                    
                    
                    <?php
                      include 'conn.php';
                      
                      

                      $q ="select id,Question,uid,Status,(select count(id) from answers where qid=q.id )as acount from questions q where uid=$uid";

                      $query = mysqli_query($con,$q);
                      while($res = mysqli_fetch_array($query)){
                    ?>

                      
                    <tr class="text-center">
                        <td> <?php echo $res['id']; ?></td>
                        <td> <?php echo $res['Question']; ?></td>
                        <td> <?php echo $res['uid']; ?></td>
                        <td> <?php echo $res['acount']; ?></td>
                        <td> <?php if($res['Status']==0){echo "UnSolved";}else{ echo "Solved";} ?></td>
                    
                        <td> <button class="btn-danger btn"> <a  style="color: white;" href="viewAnswers.php?id=<?php echo $res['id']; ?>&Q=<?php echo $res['Question']; ?>" class="text-white"> View Answers </a> </button> </td>
                        <td> <a href="deleteQuestion.php?id=<?php echo $res['id']; ?>" class="text-white"> <span class="glyphicon glyphicon-trash"></span> </a> </td>
                        <td> <a href="updateQuestion.php?id=<?php echo $res['id']; ?>" class="text-white"> <span class="glyphicon glyphicon-pencil"></span> </a> </td>    
                    
                    
                    
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
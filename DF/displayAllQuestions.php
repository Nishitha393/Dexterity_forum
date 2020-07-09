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
     <?php 
     include 'navbar.php';
     ?>
        
        <form method="post">
        <div class="container" style="background-color: rgba(225,225,225,0.8);">
            <div class="col-lg-12">
                <br><br>
                <h1  class="text-warning text-center">Display All Questions</h1>
                <br>
                <button class="btn btn-success" type="submit" name="done">Ask New Question</button>
                <table class="table table-striped table-hover table-bordered">
                    
                    
<!--table row -->  <tr class="bg-dark text-white text-center">
<!--table header-->     <th> Id </th>
                        <th> Question </th>
                        <th> User ID </th>
                        <th> Answers </th>
                        <th> Status </th>
                        <th> Submit Answer </th>
                       
                    </tr>
      <!--yeha par display ka Heading end kiye hain.-->                    
                    
                    <?php
                      include 'conn.php';
                      
                      
                      $q ="select id,Question,uid,Status,(select count(id) from answers where Qid=q.id )as answerCount from questions q";

                      $query = mysqli_query($con,$q);
                      while($res = mysqli_fetch_array($query)){
                    ?>

                      
                    <tr class="text-center">
                        <td> <?php echo $res['id']; ?></td>
                        <td> <?php echo $res['Question']; ?></td>
                        <td> <?php echo $res['uid']; ?></td>
                        <td> <a href="viewAnswers.php?id=<?php echo $res['id']; ?>&Q=<?php echo $res['Question']; ?>" ><?php echo $res['answerCount']; ?></a></td>
                        <td> <?php if($res['Status']==0){echo "UnSolved";}else{ echo "Solved";} ?></td>
                    
                        <?php if($res['Status']==0){ ?>
                        <td> <button class="btn-danger btn"> <a style="color: white;" href="insertAnswer.php?qid=<?php echo $res['id']; ?>" class="text-white"> Answer </a> </button> </td>
                        <?php } ?>
                        
                    
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
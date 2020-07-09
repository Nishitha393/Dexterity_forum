<?php
session_start();
include 'conn.php';
if(!isset($_SESSION['username'])){  //---work?
  // 
    header('location:login.php');
}
$qid=0;
$question='';
if(isset($_GET['qid'])){
    $qid= filter_var($_GET['qid'],FILTER_SANITIZE_NUMBER_INT);
   
    $sql = 'select Question from questions where id='.$qid;
   if($result=$con->query($sql)){
       if($row=$result->fetch_assoc()){
           $question =$row['Question'];
       }
   }
   
   
}else{
    header('Location: displayAllQuestions.php');
}

if(isset($_POST['done'])){
   // $id = $_POST['id'];
    $Qid = $_POST['Qid'];
    $Uid = $_SESSION['id'];
//    $user = $_SESSION['username'];
    $Answer = $_POST['Answer'];
    
    $q ="INSERT INTO `answers`(`Qid`,`Uid`,`Answer`,`Status`) VALUES ('$Qid','$Uid','$Answer','0')";
    $query = mysqli_query($con,$q);
     $refererPage=   $_SERVER['HTTP_REFERER'];            

    header('location:'.$refererPage);            
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
 <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
    </head>
    <body style="background-image: url('image/1 (1).jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;" >
  <?php include 'navbar.php'; ?>
        
      
        <div>
            <h2 style="">Question : </h2>
            
            <h1 style="padding: 30px; color: purple;"><?php echo $question;?></h1>
            <table class="table table-striped table-hover table-bordered">
                    
                    
<!--table row -->  <tr class="bg-dark text-white text-center">
<!--table header-->     
                        <th> Answered By </th>
                        <th> Answer </th>
                        
                    </tr>
      <!--yeha par display ka Heading end kiye hain.-->                    
                    
                    <?php
                      include 'conn.php';
                      $q ="select *,(select name from student where id=a.Uid)as answerBy from answers a where Qid=$qid";
                      $query = mysqli_query($con,$q);
                      while($res = mysqli_fetch_array($query)){
                          
                    ?>

                      
                    <tr class="text-center">
                        <td> <?php echo $res['answerBy'];?></td>
                        <td> <?php echo $res['Answer']; ?></td>
                    </tr>
                    <?php
                      }
                    ?>
                   
                </table>
            <br>
            
        </div>
        <div class="col-lg-6 m-auto">
            <form method="post">
                <br>
                <br>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center"> Answers</h1>
                    </div>
                    <br>    
                    
                    <input type="hidden" name="Qid"  class="form-control" value="<?php echo $qid; ?>">
                    <br>
                    <label>Your Answer:</label>
                    <input type="text" name="Answer" class="form-control">
                    <br>
                    
                    <button class="btn btn-success" type="submit" name="done">Submit</button>
                    <br>        
            </form>
        </div>
    </body>
</html>

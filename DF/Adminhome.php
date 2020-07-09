<?php
session_start();

if(!isset($_SESSION['username'])){  //----work?
  // 
    header('location:index.php');
}
include 'conn.php';
if(isset($_POST['done'])){
header('location:displayPost.php');          
}
if(isset($_POST['Comments'])){
header('location:displayComments.php');          
}
//if(isset($_POST['doneAnswer'])){
//header('location:displayAnswers.php');          
//}



   if(isset($_POST['submit'])){
   // $id = $_POST['id'];
    $comments = $_POST['comments'];
//    $Uid = $_SESSION['id'];
    $myDate = date('Y-m-d');
    $q ="INSERT INTO `comments`(`comments`,`Uid`,`date`) VALUES ('$comments','0','$myDate')";
    $query = mysqli_query($con,$q);
//    header('location:displayComments.php');            
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
    
    </head>
    <body  style="background: linear-gradient(to bottom right,#0ff,#0ff,#033);height:100vh">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Dexterity Forum</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    
     <li><a href="index.php">Logout</a></li>
      
    </ul>
  </div>
</nav>

        <div class="container row">
            <div class="col-md-3">
            <?php 
            
            
            $sql = "select (select count(*) from student) as students,(select count(*) from questions)as questions, (select count(*) from answers) as answers";
           $students = $question = $answers = 0;
            if( $result=$con->query($sql)){
            if($row=$result->fetch_assoc()){
                $students = $row['students'];
                        $questions = $row['questions'];
                        $answers = $row['answers'];
            }
           }
            ?>
                
                <div class="row" style="box-shadow: 0px 0px 5px #033;background: linear-gradient(#314755,#26a0da);">
            <div class="col-md-11" style="color:white;margin: 10px;text-align: center;padding:20px;background: rgba(0,0,0,0.5) ;box-shadow: 0px 0px 5px #014c8c">
                <h3> Total Registered Users</h3>
                <h3><?php echo $students;?></h3>
            </div>
            <div class="col-md-11" style="color:white;margin: 10px;text-align: center;padding:20px;background: rgba(0,0,0,0.5) ;box-shadow: 0px 0px 5px #014c8c">
                <h3> Total Questions asked</h3>
                <h3><?php echo $questions;?></h3>
            </div>
            <div class="col-md-11" style="color:white;margin: 10px;text-align: center;padding:20px;background: rgba(0,0,0,0.5) ;box-shadow: 0px 0px 5px #014c8c">
                <h3> Total Answers by Users</h3>
                <h3><?php echo $answers;?></h3>
            </div>
        </div>
        
        </div>
        <div class="col-md-9">
            
            <form method="post">
        
		<div class="panel panel-default">

           
           
		  <!-- Default panel contents -->
		  <div class="panel-heading" style="background: linear-gradient(to right,#26a0da,#314755);">
		  	<div class="panel-heading row" style="padding: 20px;">
		  		<h3 class="center-block">Notifications</h3>
			</div>
		  </div>
		  <table class="table table-bordered">
         

      		<thead>
                <tr>
                    <th>id</th>
                         <th>Notifications</th>
                          
                          <th>Delete</th>
                </tr>
          </thead>

           <?php 
         
         $sql2 = "SELECT * from comments";

        $query2 = mysqli_query($con, $sql2);
      
      while ($row = mysqli_fetch_array($query2)) {  ?>


        <tbody>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['comments']; ?></td>
         <form method='post'>
        
        <td> <a href="deleteComments.php?id=<?php echo $row['id']; ?>" class="text-white"> <span class="glyphicon glyphicon-trash"></span> </a> </td>    
        </form>
        </tbody>

     <?php }
     $con->close();
           ?>
		        
		         </tbody> 
		   </table>
		 
	  </div>

			<div class="panel panel-default">
				  <div class="panel-heading">
				    <h2 class="panel-title center-block">Publish New Notifications</h2>
				  </div>
	  <div class="panel-body">
	    <form role="form"  method="post">
				<div class="input-group col-lg-9 col-md-9 col-sm-9 col-xs-9">
					 <div class="form-group ">
					      <label for="name">Notifications</label>   
					       <textarea class="form-control" rows="3" draggable="false" name="comments">
					       </textarea>  
					  </div> 
					
				</div><br>
	<div class="input-group pull-right">
		<div class="form-group">
			<button class="btn btn-primary" name="submit">SUBMIT</button>
		</div>
	</div>
        				
        				</form>
				  </div>
			</div>
	</div>
        </form> 
            
        </div>
         
    </body>
</html>

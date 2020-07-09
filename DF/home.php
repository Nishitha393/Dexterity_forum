<?php
session_start();
if(!isset($_SESSION['username'])){  //----work?
  // 
    header('location:index.php');
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
    <body style="background-image: url('image/ItUELb4.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;"> <?php include 'navbar.php'; ?>
  
        
<form method="post">
        <div class="container">
        <div class="    col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:50px;border-radius: 50px;background: rgba(0,0,0,0.5);color:white;padding:10px">
            <h3 class="text-center"> Welcome <?php echo $_SESSION['username'];?> <span><a href="insertQuestions.php">do you have a Question?</a></span></h3>
        
        </div>
        </div>
    
        <div class="container">
<!--        <a href="logout.php">LOGOUT</a>-->
   
        
        </div>
         </form>
<!--<div class="container">
    function proper         when page         loads 
 <div  id="myCarousel" class="carousel slide"    data-ride="carousel">
     
   Indicators 
  The indicators are the little dots at the bottom of each slide (which indicates how many slides there is in the carousel, and which slide the user are currently viewing).
  <ol class="carousel-indicators">  indicators are specified in oder list
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li> data-slide-to,jab dot pe clk kren to nxt ku jna
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  
   Wrapper for slides 
  <div class="carousel-inner">
      
      content of slide      ek slide ko active krna zruri hai
    <div         class="item       active">
        <img style="height: 300px;width: 800px;" src="image/1.jpg" alt="Peoples">
      <div class="carousel-caption">
        <h3>Peoples</h3>
        <p>1st sliding image!</p>
      </div>
    </div>
  
    <div class="item">
          <img style="height: 300px;width: 800px;" src="image/2.jpg" alt="Educated Peoples">
      <div class="carousel-caption">
        <h3>Educated Peoples</h3>
        <p>2nd sliding image!</p>
      </div>
    </div>
  
    <div class="item">
          <img  style="height: 300px;width: 800px;" src="image/3.jpg" alt="General Peoples">
      <div class="carousel-caption">
        <h3>General Peoples</h3>
        <p>3rd sliding image!</p>
      </div>
    </div>
  
    <div class="item">
        <img src="image/4.jpeg" alt="Peoples in Hall">
      <div class="carousel-caption">
        <h3>General Peoples</h3>
        <p>4th sliding image!</p>
      </div>
    </div>  
  </div>
  

   Left and right controls 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
</div> -->

        
        <!-- User Login Modal -->
<div id="usermodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Login</h4>
      </div>
      <div class="modal-body">
        
          <div class="row" style="text-align: center">
               <form action="validation.php" method="post">
                   
                        <div class="col-xs-8 col-xs-offset-2"> 
                            
                            

                           
                                   <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                                       <input type="text" name="Name" class="form-control">
                                   </div>
                            <br>
                                     <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                                       <input type="password" name="password" class="form-control">
                                     </div>
                            <br>
                                    <button type="submit"class="btn btn-primary"> Login </button>
                                    
                                    
                                    <a class="btn btn-success" href="#" data-toggle="modal" data-target="#userregmodal" name="done">Registration</a>
                            
                                    
                          </div>
                  
</form>
                      </div>
        
        
      </div>
      
    </div>

  </div>
</div>
        
         <!-- registration Modal -->
<div id="userregmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Registration</h4>
      </div>
      <div class="modal-body">
        
          <div class="row" style="text-align: center">
               <form action="validation.php" method="post">
                   
                        <div class="col-xs-8 col-xs-offset-2"> 
                            
                            

                           
                                   <div class="input-group">
                                       
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
                                       
                                       <input type="text" name="name" class="form-control" required>
                                      
                                   </div>
                         
                            
                            <br><div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                                       
                                       <input type="email" name="email" class="form-control" required>
                                     </div>
                            <br>
                                     <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                                       <input type="password" name="password" class="form-control" required>
                                     </div>
                            <br>
                             <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></label>
                                       <input type="date" name="dob" class="form-control" required>
                                     </div>
                            <br>
                            <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></label>
                                       <input type="number" name="mobile" class="form-control" required>
                                     </div>
                            <br>
                                    <button type="submit"class="btn btn-primary"> Login </button>
                                    
                                    
                                   
                            
                                    
                          </div>
                  
</form>
                      </div>
        
        
      </div>
      
    </div>

  </div>
</div>
         <br>
         <div class="container">
             
            <div class="col-md-8" style="padding:20px;background-color: rgba(0,0,0,0.5);color:white;padding:20px; box-shadow: 0px 0px 5px #000;"">
                <h3>Questions asked by community members:</h3>
        
                <?php 
                include 'conn.php';
                $sql = "select status,date,id,Question,view,uid, (select Name from student where id=q.uid) as Name, (select count(id) from answers where qid=q.id )as acount from questions q order by date desc;";
                $result = $con->query($sql);
                while($row = $result->fetch_assoc()){
                    $qid = $row['id'];
                    $status =$row['status'];
                    $question = $row['Question'];
                    $vCount = $row['view'];
                    $aCount = $row['acount'];
                    $UName = $row['Name'];
                    $date1=date_create($row['date']);
                    $date2= date_create(date("Y/m/d"));
                    $diff=date_diff($date1,$date2);
                ?>
                
                
                <div class="summary" style="background-color: rgba(225,225,225,0.7); padding: 5px;">
        
        
                    <h3><a style="color: black; padding: 10px;" href="updateView.php?qid=<?php echo $qid;?>&question=<?php echo $question;?>" class="question-hyperlink">
                        <?php 
                        if($status){
                            echo '[Solved]  ';
                        }
                        echo $question; 
                        ?>
                        </a></h3>
        
        
        
    <div style="display: inline-block">
        
        
        <div style="display: inline-block">
            <div class="mini-counts"><span title="0 answers" class="badge"><?php echo $aCount; ?></span></div>
            <div>answers</div>
        </div>
        <div style="display: inline-block">
            <div class="mini-counts"><span title="2 views" class="badge"><?php echo $vCount; ?></span></div>
            <div>views</div>
        </div>
            
    </div>
        
        <div style="display: inline-block;" class="pull-right">
            asked <span title="2018-09-20 09:31:54Z" class="relativetime">
                <?php 
                $year = $diff->format("%y");
                $month = $diff->format("%m");
                $days = $diff->format("%d");
                
                $askedDuration = "";
                if($year>0 ){
            $askedDuration = $year." Years ago by";
                }
                if($month>0 ){
            $askedDuration = $askedDuration.",". $month." months ago by";
                }
                if($days>0){
                  $askedDuration = $askedDuration.",". $days." days ago by";
                }else{
                    $askedDuration = "today by";
                    
                }
                
                
                
                echo $askedDuration;
                
            ?>
                </span>
             <?php echo $UName; ?> <span class="reputation-score" title="reputation score " dir="ltr"></span>
        </div>
        <hr style="height:2px;border:none;color:#333;background-color:#333;" />
    </div>
                 
                <?php 
                
                }
                ?>
            </div>
             
             <div class="col-md-4" style=" box-shadow: 0px 0px 5px #333; background-color: rgba(225,225,225,0.7);">
                 <div style="text-align: center;background-color: rgba(0,0,0,0.5);color:white;padding:20px; box-shadow: 0px 0px 5px #000;"><h3>Admin Notifications</h3></div><br>
                 <ul>
                   
                 <?php
                 $sql = "select * from comments;";
                $result = $con->query($sql);
                while($row = $result->fetch_assoc()){
                ?>
                 
                     
                     
                     <li>
                         <h5> <?php echo $row["comments"];?> </h5>
                     </li>
                    
                  <?php  
                }
                    ?>
             </ul>
             </div>
             
         </div>
         
    </body>
</html>
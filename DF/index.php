<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/util.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body style="background-image: url('image/index.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Dexterity Forum</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     
      
      <li><a href="adminlogin.php" >Admin Login</a></li>
      <!--<li><a href="#" data-toggle="modal" data-target="#adminmodal">Admin</a></li>-->
      
    </ul>
  </div>
</nav>


 <div class="container-fluid"> 
 <!--   function proper -->        <!--when page         loads -->
 <div style="">
    <h1 style="text-align: center; background-color: rgba(225,225,225,0.6);box-shadow: 0px 0px 5px #040505; padding:10px; margin-bottom: 15px;">Dexterity Forum</h1>
</div>
 <div class="row" >
      <div class="col-md-6">
          
          <div id="myCarousel" class="carousel slide"    data-ride="carousel">
     
  <!-- Indicators -->
  <!--The indicators are the little dots at the bottom of each slide (which indicates how many slides there is in the carousel, and which slide the user are currently viewing).-->
  <ol class="carousel-indicators">  <!--indicators are specified in oder list-->
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li> <!--data-slide-to,jab dot pe clk kren to nxt ku jna-->
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <!--<li data-target="#myCarousel" data-slide-to="4"></li>-->
  </ol>  

  
  <!-- Wrapper for slides -->
  
  
  <div class="carousel-inner" style="box-shadow: 0px 0px 25px #040505;">
    
      
<!--content of slide    -->  <!--ek slide ko active krna zruri hai-->
    <div         class="item       active">
        <img  src="image/1.jpg" alt="Peoples">
      <div class="carousel-caption">
        
      </div>
    </div>
  
    <div class="item">
          <img src="image/2.jpg" alt="Educated Peoples">
      <div class="carousel-caption">
        
      </div>
    </div>
  
    <div class="item">
          <img src="image/3.jpg" alt="General Peoples">
      <div class="carousel-caption">
        
      </div>
    </div>
  
<!--    <div class="item">
        <img src="image/4.jpeg" alt="Peoples in Hall">
      <div class="carousel-caption">
        <h3>General Peoples</h3>
        <p>4th sliding image!</p>
      </div>
    </div>  --> 
  </div> 
  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
          
          
      </div>
      <div class="col-md-5">
          
          <div class="wrap-login100" style="margin-left: 10%; box-shadow: 0px 0px 25px #040505;">
              <form class="login100-form validate-form p-l-35 p-r-25 p-t-138" action="validation.php" method="post">
                  <span class="login100-form-title" >
						User Sign In
					</span>
                                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<?php 
                                                if(isset($_GET['status'])){
                                                    if($_GET['status']=='invalid'){
                                                        header("location:home.php"); 
                                                    }
                                                }
                                                ?>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="Name" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							
						</span>

						<a href="#" class="txt2">
							
						</a>
					</div>

					<div class="container-login100-form-btn">
                                            <button class="login100-form-btn" type="submit">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-40 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" data-toggle="modal" data-target="#userregmodal" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
      </div>
  </div>
 

</div>
        
        <!-- User Login Modal -->


        
        <!-- Admin Login Modal -->
<div id="adminmodal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Admin Login</h4>
      </div>
      <div class="modal-body">
         
          <div class="row" style="text-align: center">
               <form action="Adminvalidation.php" method="post">
                   
                        <div class="col-xs-8 col-xs-offset-2"> 
                            
                            

                           
                                   <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                                       <input type="text" name="Name" class="form-control" placeholder="enter email id here">
                                   </div>
                            <br>
                                     <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                                       <input type="password" name="password" class="form-control" placeholder="enter password here">
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


        
         <!-- registration Modal -->
<div id="userregmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button id="regCloseBtn" type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Registration</h4>
      </div>
      <div class="modal-body">
         <div id="msg"></div>
          <div class="row" style="text-align: center">
              
                   
                        <div class="col-xs-8 col-xs-offset-2"> 
                            
                            

                           
                                   <div class="input-group">
                                       
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
                                       
                                       <input type="text" id="name" name="name" class="form-control" required placeholder="enter name here">
                                      
                                   </div>
                         <!-- <select>
                            <option value="name">enter name here</option>
                                       </select>  -->
                            
                            <br><div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                                       
                                       <input type="email" id="email" name="email" class="form-control" required placeholder="enter email id here">
                                     </div>
                            <br>
                            <span>Password Minimum 8 character's Long</span>
                                     <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                                       <input type="password" id="password" name="password" class="form-control" required placeholder="enter password here">
                                       
                                     </div>
                            <br>
                             <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></label>
                                       <input type="date" name="dob" id="dob" class="form-control" required placeholder="enter date-of-birth here">
                                     </div>
                            <br>
                             <span>Mobile number must be of 10 digits</span>
                            <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></label>
                                       <input type="number"  name="mobile" id="mobile" class="form-control" required placeholder="enter mobile no here">
                                     </div>
                            <br>
                                    <button id="stdRegBtn" class="btn btn-primary"> Register </button>
                                    
                                    
                                   
                            
                                    
                          </div>
                  

                      </div>
        
        
      </div>
      
    </div>

  </div>
</div>
         
         <script>
             
             $('#stdRegBtn').click(function(){
                 console.log('reached');
                 
          $.post("userreg.php", 
          {
          name: $('#name').val(),
          email: $('#email').val(),
          password : $('#password').val(),
          dob : $('#dob').val(),
          mobile : $('#mobile').val()
          },
          
        function(result){
             console.log(result);
//           $('#regCloseBtn').click();

           $("#msg").hide().html(result).slideDown();
          
           });       
                
                 
                 
     
                 
                 
                 
             });
             
             </script>
         
         
    </body>
</html>
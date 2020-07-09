<?php

session_start();

$con = mysqli_connect('localhost','root');

//if($con){
//  echo "Connection successfull";
//}else{
//echo "No Connection";
//}

mysqli_select_db($con,'ibdf');

$name = $_POST['Name'];   
$pass = $_POST['password'];  

$q ="select * from admin where username ='$name' && password = '$pass'";

$result = mysqli_query($con,$q);
    
$num = mysqli_num_rows($result);
 
if($num == 1){  
$row=$result->fetch_assoc();    //-----work?
$_SESSION['username'] = $name;
$_SESSION['id'] = $row['id'];   //-----work?
header('location:Adminhome.php'); 

}else{
    
   // header('location:login.php');
    }
  ?>

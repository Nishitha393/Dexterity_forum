<?php

session_start();

$con = mysqli_connect('localhost','root');



mysqli_select_db($con,'ibdf');

$name = $_POST['Name'];   
$pass = $_POST['password'];  

$q ="select * from student where Name ='$username' and Password = '$password'";

$result = mysqli_query($con,$q);
    
$num = mysqli_num_rows($result);
 
if($num == 1){  
$row=$result->fetch_assoc();    //-----work?
$_SESSION['username'] = $row['Name'];
$_SESSION['id'] = $row['id'];   //-----work?
header("location:home.php"); 

}else{
    
   header("location:index.php?status=invalid");
//   echo 'Invalid UserName and Password';
 }
  ?>

<?php



$con = mysqli_connect('localhost','root');

if($con){
//  echo "Connection successfull";
}else{
echo "No Connection";
}

mysqli_select_db($con,'ibdf');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['dob']) && isset($_POST['mobile']) )
{
    
}else{
   die("Parameters missing :". $_POST['password']);
}

$name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);   
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$dob = filter_var($_POST['dob'],FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
$mobile = filter_var($_POST['mobile'],FILTER_SANITIZE_STRING);

if(strlen($mobile)<10 || strlen($mobile)>10){
    
    die("Mobile number must be of 10 digits");
}

if(strlen($pass)<8){
    
    die("Password must be atleast 8 character's long");
}



$q ="select * from student where Email = '$email'";

$result = mysqli_query($con,$q);
    

$num = mysqli_num_rows($result);
 

if($num >= 1){
    
echo"User already exists.. Login to continue.";

}else{



$qy ="insert into student values ('','$name','$email','$dob','$pass','$mobile')";

if(mysqli_query($con,$qy)){
    echo "Registration successfull. Login to continue";
}else{
    echo "Failed to register.";
}

    }
  ?>
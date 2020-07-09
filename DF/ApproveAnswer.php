<?php
session_start();
    include 'conn.php';
    
    if(!isset($_SESSION['username'])){
  // 
    header('location:index.php');
}
     
    $id = $_GET['id'];
    $aid = $_GET['aid'];
    
    $q = "update `questions` set Status='1' where id=$id";
    mysqli_query($con,$q);
    
    $q = "update `answers` set Status='1' where id=$aid";
     mysqli_query($con,$q);
    
    header('location:displayQuestions.php');
?>

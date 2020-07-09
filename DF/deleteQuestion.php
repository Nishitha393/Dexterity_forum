<?php
include 'conn.php';

$id = $_GET['id'];  

$q = "DELETE FROM `questions` WHERE id = $id";

mysqli_query($con,$q);

header('location:displayQuestions.php');



?>

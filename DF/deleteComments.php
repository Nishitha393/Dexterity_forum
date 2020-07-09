<?php
include 'conn.php';

$id = $_GET['id'];  

$q = "DELETE FROM `comments` WHERE id = $id";

mysqli_query($con,$q);

header('location:Adminhome.php');



?>

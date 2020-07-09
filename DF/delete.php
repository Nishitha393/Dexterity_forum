<?php
include 'conn.php';

$id = $_GET['id'];  

$q = "DELETE FROM `admin` WHERE id = $id";

mysqli_query($con,$q);

header('location:display.php');



?>

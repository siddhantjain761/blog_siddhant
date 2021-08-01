<?php
include ("../dbcon.php");

$id = $_GET['id'];
$query = "delete from blog_list where id='$id'";

mysqli_query($con,$query);
header('location:addblog.php');





?>

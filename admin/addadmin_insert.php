<?php
include ("../dbcon.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password =  $_POST['password'];
$des = $_POST['description'];
$i = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];

$name1 = md5(rand()). '.' .$i;
 
$file = "admin_image/".$name1;


move_uploaded_file($filename,$file);

echo $query = "insert into admin(name,email,password,description,image)value('$name','$email','$password','$des','$file' )";
 mysqli_query($con,$query);
 header('location:add_admin.php');




?>
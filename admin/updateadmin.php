<?php
include ("../dbcon.php");

$id=$_POST['id'];
$name1=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$des=$_POST['description'];
$i = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];
$file_check="admin_image/".$i;
$name = md5(rand()). '.' .$i;
 $file = "admin_image/".$name;
move_uploaded_file($filename,$file);

if($file_check=="admin_image/"){
	//echo $file_check;
	echo $query = "update admin SET name='$name1',email='$email',password='$password',description='$des' where id='$id'";
	 

}
else{
	$query = "update admin SET name='$name1',email='$email',password='$password',description='$des',image='$file' where id='$id'";

}
 
	 
 
 

mysqli_query($con,$query);
header('location:add_admin.php');



?>
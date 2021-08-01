<?php
include ("../dbcon.php");

$id=$_POST['id'];
$title=$_POST['t'];
$des=$_POST['description'];
$i = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];
$file_check="upload/".$i;
$name = md5(rand()). '.' .$i;
 $file = "upload/".$name;
move_uploaded_file($filename,$file);

 
 

if($file_check=="upload/"){
	//echo $file_check;
	echo $query="update blog_list SET  title='$title',descr='$des' where id='$id'";
	mysqli_query($con,$query); 
	 
 
	 

}
else{
	$query = "update blog_list SET title='$title',descr='$des',image='$file' where id='$id'";

}
 
	 
 
 

mysqli_query($con,$query); 
header('location:addblog.php');



?>
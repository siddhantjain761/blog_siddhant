<?php
include "../dbcon.php";

$title = $_POST['t'];
$dis = $_POST['description'];
$i = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];

$name = md5(rand()). '.' .$i;
$file ="upload/".$name;
//echo  $title,$dis,$name;
move_uploaded_file($filename,$file);

echo $query = "insert into blog_list(title,descr,image)value('$title','$dis','$file')";
mysqli_query($con,$query);
//header('location:addblog.php'); 




?>

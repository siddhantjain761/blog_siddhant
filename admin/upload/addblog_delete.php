 <?php
include ("dbcon1.php");

$id=$_GET['id'];
$query = "delete form blog_list where id='$id'";

mysqli_query($con,$query);
header('location:addblog.php'); 








 ?>

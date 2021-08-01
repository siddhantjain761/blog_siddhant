<?php
session_start();
include "../dbcon.php";

$email = $_POST['email'];
$pass = $_POST['password'];

echo $query ="select * from admin where email='$email' and password='$pass'";
$data = mysqli_query($con,$query);

$fetch = mysqli_fetch_array($data);
  
 
echo $value =  mysqli_num_rows($data);

if($value=='1'){
	$_SESSION['email']=$fetch['email'];
	$_SESSION['name']=$fetch['name'];
	$_SESSION['image']=$fetch['image'];
	header('location:dashboard.php');

}
else{
	header('location:index.php');
}


?>

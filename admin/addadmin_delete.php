<?php
include "../dbcon.php";

$id = $_GET['id'];
$query = "delete from admin where id='$id'";

mysqli_query($con,$query);
header('location:add_admin.php');



?>
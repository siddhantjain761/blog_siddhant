<?php
SESSION_START();


if(empty($_SESSION['email'])){
	header('location:index.php');
}



?>
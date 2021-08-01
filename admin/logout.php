<?php
session_start();
session_unset();  //logout session

header('location:index.php');


?>
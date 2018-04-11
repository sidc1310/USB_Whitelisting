<?php
session_start();
session_destroy();
// if($_SESSION['email'])
// {
// 	unset($_SESSION['email']);

// }
// if($_SESSION['email1'])
// {
// 	unset($_SESSION['email1']);

// }

header("location:admin_login.php");
?>
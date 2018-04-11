<?php
session_start();
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	if(isset($_POST['adminlogin']))
	{
// $username="root";
// $password="";
// $host="localhost:3306";
// $connection=mysql_connect($host,$username,$password);
include('connect.php');
if(!$connection)
{
die("unable to connect");
}

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM admin WHERE email='$email' && password='$password'";
//mysql_select_db("usb",$connection);
//$result=mysql_query($query,$connection);
$result=mysqli_query($connection,$query);

$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['email']=$email;
	header("location:admin_dash.php");
}
else
{
	$_SESSION['email']=$email;
	header("location:admin_dashboard.php");
}
	}
}

?>
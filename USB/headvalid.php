<?php
session_start();
echo "in head valid";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	if(isset($_POST['headlogin']))
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

$query="SELECT * FROM head WHERE username='$email' && password='$password'";
//mysql_select_db("usb",$connection);
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['email']=$email;
	header("location:head_dash.php");
}
else
{
	header("location:head_login.php");
}
	}
}

?>
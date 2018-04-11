<?php
$username="root";
$password="";
$host="localhost:3306";
$connection=mysql_connect($host,$username,$password);

if(!$connection)
{
die("unable to connect");
}

//Get MAC ID
$str=exec('start /B MAC.bat',$oo);
$MAC=$oo[0];
$con=hash('SHA256',$MAC);
$query="SELECT * FROM mac WHERE mac_add='$con'";
mysql_select_db("usb");
$result=mysql_query($query);


//Get COMP NAME

$str=exec('start /B comp_name.bat',$oo);
$PC=$oo[2];


if(mysql_num_rows($result))
{
	echo "ay chup";
	
}
else
{
	echo $con;
}

?>
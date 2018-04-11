<?php

include('connect.php');
if(!$connection)
{
die("unable to connect");
}

$str=exec('start /B USB_VSN.bat',$oo);
$USB=$oo[0];
$Ucon=hash('SHA256',$USB);
$Uquery="SELECT * FROM usbvsn WHERE usb_vsn='$Ucon'";
// mysql_select_db("usb");
$Uresult=mysqli_query($connection,$Uquery);

if(mysqli_num_rows($Uresult))
{

}
else
{
	
}
?>
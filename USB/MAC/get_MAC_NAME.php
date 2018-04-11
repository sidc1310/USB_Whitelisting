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
$Mquery="SELECT * FROM mac WHERE mac_add='$con'";
mysql_select_db("usb");
$Mresult=mysql_query($Mquery);


//Get USB_VSN
$str=exec('start /B USB_VSN.bat',$oo);
$USB=$oo[0];
$Ucon=hash('SHA256',$USB);
$Uquery="SELECT * FROM usbvsn WHERE usb_vsn='$Ucon'";
mysql_select_db("usb");
$Uresult=mysql_query($Uquery);

if(mysql_num_rows($Uresult))
{

}
else
{
	
}


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




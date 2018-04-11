<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        if(isset($_POST['ok']))
        {
          $drive_letter=$_POST['dl'];
          $share_name=$_POST['dn'];
		$str=shell_exec('start cmd /c Sushmita.bat $drive_letter $share_name');
		}
	}
?>
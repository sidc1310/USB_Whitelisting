<?php
$str=exec('start /B comp_name.bat',$oo);
$PC=$oo[2];
var_dump($PC);
?>
<?php
$tempdata=json_decode(file_get_contents('temp.dat'),true) ;
//var_dump($tempdata);
//echo $tempdata[0];echo ('<br>');
echo json_encode($tempdata);

?>
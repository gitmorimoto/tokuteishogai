<?php
$td=$_POST['ary'];
//$jmd=$_POST['jmd'];
file_put_contents('temp.dat', json_encode($td));

echo json_encode($td);

?>
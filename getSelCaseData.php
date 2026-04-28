<?php
$selCasePath=json_decode(file_get_contents('php://input'));
//$selCasePath="1649723520_はなやま　ゆみか_花山　優美佳";
$selCasePath='../database/tokuteishogai/'.$selCasePath.'.dat';
//echo $selCasePath;echo '<br>';
$dataArray=json_decode(file_get_contents($selCasePath),true);
//print_r($dataArray);
//$dataArray=["a"];
echo json_encode($dataArray);
?>
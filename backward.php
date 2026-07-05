<?php
$json = file_get_contents('php://input');
if($json){
    $dataArray = json_decode($json,true);
    file_put_contents('temp/backward.json',json_encode($dataArray,JSON_UNESCAPED_UNICODE));
}
echo json_encode(['backward.json ok']);
?>
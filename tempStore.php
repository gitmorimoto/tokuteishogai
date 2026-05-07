<?php

$json = file_get_contents('php://input');
if($json){
    $dataArray = json_decode($json,true);
    file_put_contents('temp/store.json',json_encode($dataArray,JSON_UNESCAPED_UNICODE));
    $return = ['stored'];
}else{
    $return = ['no data'];
}

echo json_encode($return,JSON_UNESCAPED_UNICODE);

?>
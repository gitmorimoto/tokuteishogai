<?php

$json = file_get_contents('php://input');
if($json){
    $Array = json_decode($json,true);
    //$textDataArray = $Array[0];
    //$markDataArray = $Array[1];

    file_put_contents('temp/store.json',json_encode($Array,JSON_UNESCAPED_UNICODE));
    $return = ['stored'];
}else{
    $return = ['no data'];
}

echo json_encode($return,JSON_UNESCAPED_UNICODE);

?>
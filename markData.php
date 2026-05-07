<?php
$json = file_get_contents('php://input');
if($json){
    $markDataArray = json_decode($json,true);
    if($markDataArray){
        file_put_contents('./temp/storeMark.json',json_encode($markDataArray,JSON_UNESCAPED_UNICODE));
        $return = ['The mark data is stored in storeMark.json'];
    }else{
        $return = ['No mark data is stored in storeMark.json'];
    }
}else{
   $return = ['No mark data is provided']; 
}
echo json_encode($return,JSON_UNESCAPED_UNICODE);
?>
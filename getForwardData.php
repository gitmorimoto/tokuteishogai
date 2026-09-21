<?php
if(file_exists('temp/forward.json')){
    $json = file_get_contents('temp/forward.json');
    $data = json_decode($json,true);
}else{
    $data = [];
}
echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>
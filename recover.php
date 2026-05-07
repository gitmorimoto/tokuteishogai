<?php
if(file_exists('./temp/store.json' )){
    $json = file_get_contents('./temp/store.json');
    $dataArray = json_decode($json,true);
}else{
    $dataArray = ['no text data array'];
}
if(file_exists('./temp/storeMark.json' )){
    $mjson = file_get_contents('./temp/storeMark.json');
    $markDataArray = json_decode($mjson,true);
}else{
    $markDataArray = ['no mark data array'];
}

$return = [$dataArray,$markDataArray];
echo json_encode($return);

?>
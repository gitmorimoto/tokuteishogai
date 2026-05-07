<?php
include_once('config.php');
$ts = time();
$pathToDatabaseFile = $pathToDatabase.'/'.$ts.'.json';

if(file_exists('temp/store.json')){
   
    copy('temp/store.json',$pathToDatabaseFile);
    $return = ['stored'];
}else{
    $return = ['no data in the temp/store.json'];
}
echo json_encode($return,JSON_UNESCAPED_UNICODE);

?>
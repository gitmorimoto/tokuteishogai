<?php
include_once('config.php');
$ts = time();

if (!is_dir($pathToDatabase)) {
    mkdir($pathToDatabase, 0777, true);
}
$pathToDatabaseFile = $pathToDatabase.'/'.$ts.'.json';
if(file_exists('temp/store.json')){
    if (copy('temp/store.json', $pathToDatabaseFile)) {

        $return = ['stored'];

    } else {

        $return = ['copy failed'];

    }
}else{
    $return = ['no data in the temp/store.json'];
}
echo json_encode($return,JSON_UNESCAPED_UNICODE);

?>
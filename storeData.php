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
makeIdToPath($pathToDatabaseFile);
echo json_encode($return,JSON_UNESCAPED_UNICODE);
function makeIdToPath($path){
    include('config.php');
    $pathToIdToPath = $pathToDatabase.'/manager/idToPath.json';
    $idToPath = json_decode(file_get_contents($pathToIdToPath),true);
    $cont = json_decode(file_get_contents($path),true);
    //print_r($idToPath);echo '<br>';
    //print_r($cont);echo '<br>';
    $selId = $cont[0];
    //echo $selId;echo '<br>';
    if(array_key_exists($selId,$idToPath)){
        array_push($idToPath[$selId],$path); 
        //echo 'id exists';
    }else{
        //echo 'No id exists';echo '<br>';
        $idToPath[$selId] = [$path];
        file_put_contents($pathToIdToPath,json_encode($idToPath,JSON_UNESCAPED_UNICODE));
    }
}
?>
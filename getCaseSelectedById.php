<?php

use function PHPSTORM_META\type;

include("config.php");
//include("class.DatabaseManager.php");
//$obj = new DatabaseManager($pathToDatabase);
//$idToPath = $obj->idToPathMaker();

$json = file_get_contents('php://input');
$inp = json_decode($json,true);
//var_dump($inp);
$selId = $inp["selId"];
//$selId = 21168;
$idToPath = json_decode(file_get_contents($pathToDatabase.'/manager/idToPath.json'),true);
//print_r($idToPath);
//echo gettype($idToPath);
//print_r($idToPath);

//echo $selId;
if($selId !==null && is_array($idToPath)){
    //echo 'array_key_exist?';
    if(array_key_exists($selId,$idToPath)){
        $selPaths = $idToPath[$selId];
        $sender = [0,$selPaths];
    }else{
        $sender = searchClientData($selId);
        
    }
    
}
/*
if(count($selPaths)==0){
    $idToPath = json_decode(file_get_contents($pathToClientManager.'/idToPath.json'),true);
    if($idToPath){
        if(array_key_exists($selId,$idToPath)){
            $selPaths = $idToPath[$selId];
        }else{
            $selPaths = [];
        }
    }
}
    */
echo json_encode($sender,JSON_UNESCAPED_UNICODE);

function searchClientData($selId){
    include('config.php');
    $path = $pathToClientManager.'/idToPath.json';
    $idToPaths = json_decode(file_get_contents($path),true);
    if(array_key_exists($selId,$idToPaths)){
        //echo 'id is already registered';
        $sPaths = $idToPaths[$selId];
        $sender = [1,$sPaths];
    }else{
        //echo 'id is not registered yet';
        file_put_contents('../clientManager-Prototype/port/tokuteiShogai_selId.txt',$selId);
        $sPaths = [];
        $sender = [2,$sPaths];
    }
    return $sender;
}


?>
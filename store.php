<?php
include("class.BackUp.php");
session_start();
$td=array();
$md=array();


$td=$_POST['td'];
$md=$_POST['md'];
$id=$td[1];
$user=$td[2];
$ts=time();
$path='../database/tokuteishogai/'.$ts.'.dat';
$array=array($td,$md);
file_put_contents($path, json_encode($array));
$obj=new backUp('../database/tokuteishogai/','D:/BACKUP/tokuteishogai/');
$obj->backUpMaker();

echo 'stored';





?>
<?php
session_start();
//$markarray=array();

$index=$_POST['index'];

if(!empty($_SESSION['indexarray'])){
	$indexarray=$_SESSION['indexarray'];
}else{$indexarray=array();}

array_push($indexarray, $index);
//$markarray=array_merge($markarray,$array);
//$markarray=array_merge_recursive ( $markarray ,$array );
//array_push($markarray, $array);
$_SESSION['indexarray']=$indexarray;

//$index='a';
echo $index;
//$array=array('a','b');
//echo json_encode($indexarray);
<?php
session_start();
$array=array();
$d3="";
$d7="";
$d8="";
$d9="";
$d12="";

$d17="";
$d18="";
$d23="";
$d24="";
$d29="";

$d30="";
$d35="";
$d36="";
$d41="";
$d44="";

$d61="";



$d3=$_POST['d3'];
$d7=$_POST['d7'];
$d8=$_POST['d8'];
$d9=$_POST['d9'];
$d12=$_POST['d12'];

$d17=$_POST['d17'];
$d18=$_POST['d18'];
$d23=$_POST['d23'];
$d24=$_POST['d24'];
$d29=$_POST['d29'];

$d30=$_POST['d30'];
$d35=$_POST['d35'];
$d36=$_POST['d36'];
$d41=$_POST['d41'];
$d44=$_POST['d44'];

$d61=$_POST['d61'];


if($d3!=""){
	$cd3=dayconvymd($d3);
}else{$cd3="";}

if($d7!=""){
	$cd7=dayconvym($d7);
}else{$cd7="";}

if($d8!=""){
	$cd8=dayconvym($d8);
}else{$cd8="";}

if($d9!=""){
  	$cd9=dayconvym($d9); 	
}else{$cd9="";}

if($d12!=""){
    $cd12=dayconvymd($d12);  
}else{$cd12="";}

//--------------------------------
if($d17!=""){
  	$cd17=dayconvym($d17); 	
}else{$cd17="";}


if($d18!=""){
  	$cd18=dayconvym($d18); 	
}else{$cd21="";}

if($d23!=""){
  	$cd23=dayconvym($d23); 	
}else{$cd23="";}

if($d24!=""){
  	$cd24=dayconvym($d24); 	
}else{$cd24="";}

if($d29!=""){
  	$cd29=dayconvym($d29); 	
}else{$cd29="";}

//---------------------------------------

if($d30!=""){
  	$cd30=dayconvym($d30); 	
}else{$cd30="";}


if($d35!=""){
  	$cd35=dayconvym($d35); 	
}else{$cd35="";}

if($d36!=""){
  	$cd36=dayconvym($d36); 	
}else{$cd36="";}

if($d41!=""){
  	$cd41=dayconvymd($d41); 	
}else{$cd41="";}

if($d44!=""){
  	$cd44=dayconvymd($d44); 	
}else{$cd44="";}
//------------------------------------------

if($d61!=""){
  	$cd61=dayconvymd($d61); 	
}else{$cd61="";}

$array=array($cd3,$cd7,$cd8,$cd9,$cd12,$cd17,$cd18,$cd23,$cd24,$cd29,$cd30, $cd35,$cd36,$cd41,$cd44,$cd61);
//$array=array('a','b');

echo json_encode($array);


?>
<?php
function dayconvym($day){
	$date=date('Y年m月', strtotime($day));
	return $date;
}

function dayconvymd($day){
	$date=date('Y年m月d日', strtotime($day));
	return $date;
}
 



?>
<?php
session_start();
if(!empty($_POST['categ'])){
	$categ=$_POST['categ'];
	$categ=trim($categ);
}
//$categ=trim($categ);

//$categ='diag';
//$categ='hosp';

if($categ=='diag'){

	$mysqli=dbcon();
	$stmt=$mysqli->prepare('select id,name from diagnosis');
	$stmt->execute();
	$stmt->bind_result($id,$name);
	$diaglist=array();
	while($stmt->fetch()){
		array_push($diaglist, $name);
	}
   echo json_encode($diaglist,JSON_UNESCAPED_UNICODE);

}

if($categ=='hosp'){

	$mysqli=dbcon();
	$stmt=$mysqli->prepare('select id,name from hospitals');
	$stmt->execute();
	$stmt->bind_result($id,$name);
	$hosplist=array();
	while($stmt->fetch()){
		array_push($hosplist, $name);
	}
echo json_encode($hosplist,JSON_UNESCAPED_UNICODE);

}

//$array=['a',$categ];
//echo json_encode($array);



?>

<?php

function dbcon(){
	$host='localhost';
	$user='forestman';
	$pw='phpapos21';
	$server="institutes";	
	try {	
 		 $mysqli=new mysqli($host,$user,$pw,$server);
		} catch (PDOException $e) {
  		echo 'データベースにアクセスできません！' . $e->getMessage();
  		exit;
		}
	return $mysqli;
}

?>


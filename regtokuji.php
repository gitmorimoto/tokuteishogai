<?php
session_start();
$mysqli=dbcon();
$id=$_SESSION['id'] ;
$namef=$_SESSION['namef'] ;
$namej=$_SESSION['namej'] ;
echo $id,$namef,$namej;

$sql='insert into tokuji (id,namef,namej) values(?,?,?)';
$stmt=$mysqli->prepare($sql);
$stmt->bind_param('sss',$id,$namef,$namej);
$stmt->execute();

?>
<?php
function dbcon(){
	$host='localhost';
	$user='forestman';
	$pw='phpapos21';
	$server='medforms';

	$mysqli=new mysqli($host,$user,$pw,$server);


	if ($mysqli->connect_error){
	  echo $mysqli->connect_error;
 	 exit();
	}else{
	  $mysqli->set_charset("utf8");
	}
	return $mysqli;	
}


?>

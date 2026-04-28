<?php 
session_start();
$paths=array();
$sdata=array();
$sfile=$_POST['sfile'];
$sfile=trim($sfile);
$spath='./datastore/'.$sfile;
//$sdata=file_get_contents( './datastore/1612221055_27176.dat' );
$sdata=file_get_contents( $spath )  ;
echo $sdata;

 ?>


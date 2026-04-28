<?php 
  session_start();
 
  $indexarray=$_SESSION['recallindexarray']; //back ids array
  $front=$_SESSION['ids'];//front ids array
 // var_dump($front);
  $sitemarray=array();
  $m=count($indexarray);
   for($i=0 ;$i<$m;$i++){
    $f[$i]=$front[$indexarray[$i]];
 //   echo $indexarray[$i].':'.$f[$i];echo '<br>';
    $array=array($indexarray[$i],$f[$i]);
    array_push($sitemarray, $array);
   }

//  $sitemarray=array('a','b') ;
  echo json_encode($sitemarray);

  ?>
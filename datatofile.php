<?php 
  
  session_start();

  //echo 'datatofile';
  $storedata=$_SESSION['storedata'];
 // var_dump($storedata);
//  var_dump($storedata);
  $fp=$_SESSION['fp'];echo '<br>';

 // var_dump($storedata);
//  echo $fp;
  file_put_contents($fp, json_encode($storedata));
  header('location:index.php');





  ?>
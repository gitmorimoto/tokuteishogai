<?php 
  session_start();
  
  $fpath=$_POST['fpath'];
  $fpath=trim($fpath);
  $spfpath=explode('_',$fpath);
  $id=$spfpath[0];
  
  $casearray=$_SESSION['casearray'];

 //var_dump($casearray);
 $m=count($casearray);
 for($i=0 ;$i<$m;$i++){
 	$day[$i]=$casearray[$i][1][0];
 	if($day[$i]==$id){
 		$ts=$casearray[$i][0];
 		$sid=$casearray[$i][1][1];
 		$sna=$casearray[$i][1][2];
 		$fp='./datastore/'.$ts.'_'.$sid.'_'.$sna;
        $storedata=json_decode(file_get_contents($fp),true);
        $_SESSION['recalldata']=$storedata;
      }
 	
  }


  echo $fp;

  ?>
<?php 
  
  require_once('../functions.php') ;
  $sid="";
  $sid=json_decode(file_get_contents('php://input'));
  
  $cases=array();
  $cases=glob('../database/tokuteishogai/*');
  
 
  $caseArray=array();
  
  $m=count($cases);
  
  //$sid=23337;
  $sid=trim($sid);
// echo $sid;

  for($i=0 ;$i<$m;$i++)
  {
     
      $cont=json_decode(file_get_contents($cases[$i]),true);
    
      $id=$cont[0][0];
     // echo 'ID='.$id;echo '<br>';
  		if($sid==$id){
       
          $bn=pathinfo($cases[$i])['filename'];
        
          $sBn=explode('_',$bn);

          $writeday=date('Y-m-d',$sBn[0]);
          
          if(!empty($sBn[1]))
          {

             $listName=$writeday.'<br>'.$sBn[1];
          }
         
       
  		   	array_push($caseArray,array($listName,$bn));
        
  		}
     
  }

 if(empty($caseArray)){
        $scase=client_selected_by_id($sid);
         file_put_contents('scase.dat', json_encode($scase[0]));
      //  print_r($scase);
         
 }else{
      file_put_contents('caseArray.dat', json_encode($caseArray));
 }
 file_put_contents('selCaseNumber.dat',count($caseArray));
  //print_r($caseArray);echo '<br>';
   
 //$caseArray=['test'];
 //print_r($caseArray);
  echo json_encode($caseArray);
  
  















  ?>
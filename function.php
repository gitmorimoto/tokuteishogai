<?php

function convWS($wareki){
	$nengo=substr($wareki,0,6);
	$wyear=explode('年', $wareki);
	//echo 'wyear='.$wyear[0];echo '<br>';
	$y=substr($wyear[0],6);
	//echo 'y='.$y;echo '<br>';
	//echo 'wyear1='.$wyear[1];echo '<br>';
	$md=explode('月',$wyear[1]);
	//echo 'md=';
	//print_r($md);echo '<br>';
	$m=$md[0];
	//echo 'm=';
	//print_r($m);echo '<br>';
	$d=str_replace('日','',$md[1]);
	//print_r($d);echo '<br>';
	//echo 'y='. $y;echo '<br>';
	//echo 'nengo='.$nengo;echo '<br>';
	switch ($nengo) {
						case '昭和':
							$byear=1925;
							break;
						case '平成':
							$byear=1988;
							break;
						case '令和':
							$byear=2018;
							break;
						default:
							$byear=2018;
							break;
					}
	 $m=sprintf("%02d", $m);
	 $d=sprintf("%02d", $d);
	 $sreki=$byear+$y.'-'.$m.'-'.$d;
	return $sreki;
	
}

function convD2Date($date){
   $edate=explode('-',$date);
  // echo 'edate=';
  // print_r($edate);echo '<br>';
   $m=sprintf("%02d",$edate[1]);
 //  echo $m;echo '<br>';
   $d=sprintf("%02d",$edate[2]);
 //  echo $d;echo '<br>';
   $r=$edate[0].'-'.$m.'-'.$d;
 //  echo $r;
   return $r;

}

function getAge($bday,$wday) {
    $bday = str_replace('-', '', $bday);
    $wday = str_replace('-', '', $wday);

    $age = floor(($wday - $bday)/10000);
    return $age;
}



function dayconvymd($day){
	$r="";
  if(preg_match("^[0-9]{4}-([1-9]|0[1-9]|1[0-2])-([0-9]|0[1-9]|[12][0-9]|3[01])$^",$day)){
  	//echo 'day='.$day;
  		$eday=explode('-',$day);
  		$y=$eday[0];
   	 	$m=sprintf('%02d',$eday[1]);
   	 	$d=sprintf('%02d',$eday[2]);
    	$sday=$y.$m.$d;
    	//echo 'sday='.$sday;echo '<br>';
    	if($sday>20190431){
    		$y=$y-2018;
    		$r='令和'.$y.'年'.$m.'月'.$d.'日';
    	}
    	if($sday>19890107 && $sday<20190501){
    		$y=$y-1988;
    		$r='平成'.$y.'年'.$m.'月'.$d.'日';
    	}
    	if($sday>19261225 && $sday<19890108){
    		$y=$y-1925;
    		$r='昭和'.$y.'年'.$m.'月'.$d.'日';
    	}
    	  
   }else{
   	   $r=$day;
   }
return $r;
}

function dayconvym($day){
	$r="";
  if(preg_match("^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$^",$day)){
  		$eday=explode('-',$day);
  		$y=$eday[0];
   	 	$m=sprintf('%02d',$eday[1]);
   	 	$d=sprintf('%02d',$eday[2]);
    	$sday=$y.$m.$d;
    //	echo 'sday='.$sday;echo '<br>';
    	if($sday>20190431){
    		$y=$y-2018;
    		$r='令和'.$y.'年'.$m.'月';
    	}
    	if($sday>19890107 && $sday<20190501){
    		$y=$y-1988;
    		$r='平成'.$y.'年'.$m.'月';
    	}
    	if($sday>19261225 && $sday<19890108){
    		$y=$y-1925;
    		$r='昭和'.$y.'年'.$m.'月';
    	}
   }else{
   	$r=$day;
   }
  return $r;
} 
//echo dayconvymd('令和2年2月17日');
?>
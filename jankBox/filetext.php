<?php 
	session_start();
//////////////////////////text data process/////////////////////////////////////////////////////////
	echo $_POST['genderbox'];
if(!empty($_POST['genderbox'])){ //gender
	$genderbox = $_POST['genderbox'];
	
  if($genderbox=='male'){
   $gendstr='./images/genderm.png'; //male check
   
  }
  if($genderbox=='female'){
    $gendstr='./images/genderf.png'; //female check
  }
  $_SESSION['gendstr']=$gendstr;
}else{$gendstr="";}



if(!empty($_POST['infosource'])){ //gender
	$infosource = $_POST['infosource'];
//	 echo $infosource;
  }
if($infosource=='form'){
	$sostr1='./images/form.png'; //診療録で確認
}else{
	$sostr1='./images/nform.png';
}
$_SESSION['sostr1']=$sostr1;


if($infosource=='dict'){
	$sostr2='./images/dict.png';//本人の申し立て　
}else{
	$sostr2='./images/ndict.png';
}

$_SESSION['sostr2']=$sostr2;

if(!empty($_POST['infosource2'])){ //gender
	$infosource2 = $_POST['infosource2'];
	 echo 'infos2='. $infosource2;
  }
if($infosource2=='form'){
	$sostr3='./images/form.png'; //診療録で確認
}else{
	$sostr3='./images/nform.png';
}
$_SESSION['sostr3']=$sostr3;


if($infosource2=='dict'){
	$sostr4='./images/dict.png';//本人の申し立て　
}else{
	$sostr4='./images/ndict.png';
}
$_SESSION['sostr4']=$sostr4;




$id=filter_input(INPUT_POST, 'id'); //id
$namef=filter_input(INPUT_POST, 'namef');//furigana
$namej=filter_input(INPUT_POST, 'namej');//kanjisimei
//$gender=filter_input(INPUT_POST, 'gender');
$gender=$gendstr;
$birthdate=filter_input(INPUT_POST, 'birthday');
$pn=filter_input(INPUT_POST, 'zip01');//yuubinn banngo
$addr=filter_input(INPUT_POST, 'addr11');//zyuusho
$diag0=filter_input(INPUT_POST, 'diag0');//sinndann
$icd1=filter_input(INPUT_POST, 'icd1');//icd 10
$date1=filter_input(INPUT_POST, 'date1');//'主な精神障害

$date2=filter_input(INPUT_POST, 'date2');//合併精神障害
$date3=filter_input(INPUT_POST, 'date3');//合併身体障害
$compl1=filter_input(INPUT_POST, 'compl1');//合併精神障害
$compl2=filter_input(INPUT_POST, 'compl2');//合併身体障害
$fdiagdate=filter_input(INPUT_POST, 'fdiagdate');//はじめて医師の診断を受けた日
$pillnesstext=filter_input(INPUT_POST, 'pillnesstext');//現病歴
$hosp1=filter_input(INPUT_POST, 'hosp1');//病院名
$stm1=filter_input(INPUT_POST, 'stm1');//診療開始
$em1=filter_input(INPUT_POST, 'em1');//診療終了
$adm1=filter_input(INPUT_POST, 'adm1');//入院

$diag1=filter_input(INPUT_POST, 'diag1');//診断
$treat1=filter_input(INPUT_POST, 'treat1');//治療
$res1=filter_input(INPUT_POST, 'res1');//転帰
$hosp2=filter_input(INPUT_POST, 'hosp2');
$stm2=filter_input(INPUT_POST, 'stm2');
$em2=filter_input(INPUT_POST, 'em2');
$adm2=filter_input(INPUT_POST, 'adm2');
$diag2=filter_input(INPUT_POST, 'diag2');
$treat2=filter_input(INPUT_POST, 'treat2');
$res2=filter_input(INPUT_POST, 'res2');

$hosp3=filter_input(INPUT_POST, 'hosp3');
$stm3=filter_input(INPUT_POST, 'stm3');
$em3=filter_input(INPUT_POST, 'em3');
$adm3=filter_input(INPUT_POST, 'adm3');
$diag3=filter_input(INPUT_POST, 'diag3');
$treat3=filter_input(INPUT_POST, 'treat3');
$res3=filter_input(INPUT_POST, 'res3');
$hosp4=filter_input(INPUT_POST, 'hosp4');
$stm4=filter_input(INPUT_POST, 'stm4');
$em4=filter_input(INPUT_POST, 'em4');

$adm4=filter_input(INPUT_POST, 'adm4');
$diag4=filter_input(INPUT_POST, 'diag4');
$treat4=filter_input(INPUT_POST, 'treat4');
$res4=filter_input(INPUT_POST, 'res4');
$phis=filter_input(INPUT_POST, 'phis');//発育・養育歴
$inass=filter_input(INPUT_POST, 'inass');//知能に関するコメント
$devdother=filter_input(INPUT_POST, 'devdother');//知能に関するコメント
$devdcom=filter_input(INPUT_POST, 'devdcom');//発達障害コメント
$ldother=filter_input(INPUT_POST, 'ldother');/*/*****************************************///*/
$sztype=filter_input(INPUT_POST, 'sztype');

$epiother=filter_input(INPUT_POST, 'epiother');
$psother=filter_input(INPUT_POST, 'psother');/*********************************************/
$epicom=filter_input(INPUT_POST, 'epicom');
$pscom=filter_input(INPUT_POST, 'pscom');//精神コメント
$bcom=filter_input(INPUT_POST, 'bcom');
$bhother=filter_input(INPUT_POST, 'bhother');//行動コメント
$charcom=filter_input(INPUT_POST, 'charcom');//正確コメント
$pillnessdate=filter_input(INPUT_POST, 'pillnessdate');
$dlife=filter_input(INPUT_POST, 'dlife');//日常生活能力の程度
$tasses=filter_input(INPUT_POST, 'tasses');//医学的総合判定

$wrday=filter_input(INPUT_POST, 'wrday');//記録年月日
$hname=filter_input(INPUT_POST, 'hname');//病院又は診療所の名称
$dname=filter_input(INPUT_POST, 'dname');//診療担当科名
$haddr=filter_input(INPUT_POST, 'haddr');//所在地
$dr=filter_input(INPUT_POST, 'dr');//医師氏名
$iqtest=filter_input(INPUT_POST, 'iqtest');
$testday=filter_input(INPUT_POST, 'testday');
$iqother=filter_input(INPUT_POST, 'iqother');
$szfreq=filter_input(INPUT_POST, 'szfreq');
$tcomment2=filter_input(INPUT_POST, 'tcomment2');

$iqdq=filter_input(INPUT_POST, 'iqdq');
//$gendstr
//$sostr1
//$sostr2
//$sostr3
//$sostr4
$narrator=filter_input(INPUT_POST, 'narrator');
$relation=filter_input(INPUT_POST, 'relation');
//echo 'narrator='.$narrator;
//echo 'relation='.$relation;

$ts=time();
$filetext=array($ts,$id,$namef,$namej,$gender,$birthdate,$pn,$addr,$diag0,$icd1,$date1,
	$date2,$date3,$compl1,$compl2,$fdiagdate,$pillnesstext,$hosp1,$stm1,$em1,$adm1,
	$diag1,$treat1,$res1,$hosp2,$stm2,$em2,$adm2,$diag2,$treat2,$res2,
	$hosp3,$stm3,$em3,$adm3,$diag3,$treat3,$res3,$hosp4,$stm4,$em4,
	$adm4,$diag4,$treat4,$res4,$phis,$inass,$devdcom,$devdother,$ldother,$sztype,
	$epiother,$psother,$epicom,$pscom,$bcom,$bhother,$charcom,$pillnessdate,$dlife,$tasses,
	$wrday,$hname,$dname,$haddr,$dr,$iqtest,$testday,$iqother,$szfreq,$tcomment2,
	$iqdq,$gendstr,$sostr1,$sostr2,$sostr3,$sostr4,$narrator,$relation);

$_SESSION['filetext']=$filetext;

//var_dump($filetext);



////////////////varables to session/////////////////////////////////////////////////////////////////
//$namef=$_POST['namef'];
/*
$_SESSION['id']=$id;
$_SESSION['namef']=$namef;
$_SESSION['namej']=$namej;
$_SESSION['birthday']=$birthdate;
if(!empty($birthdate)){
	$age=calage($birthdate);
	$_SESSION['age']=$age;
}else{$age="";}

$_SESSION['gender']=$gender;
$_SESSION['pn']=$pn;
$_SESSION['addr']=$addr;
$_SESSION['diag0']=$diag0;
$_SESSION['icd1']=$icd1;

$_SESSION['date1']=$date1;//主な精神障害
$_SESSION['date2']=$date2;//合併精神障害
$_SESSION['date3']=$date3;//合併身体障害

echo $date1;echo '<br>';
echo $date2;echo '<br>';
echo $date3;echo '<br>';
*/
header('location:index.php');








?>
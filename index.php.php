<?php
session_start();
$namef="";

$id=filter_input(INPUT_POST, 'id');
$namef=filter_input(INPUT_POST, 'namef');
$namej=filter_input(INPUT_POST, 'namej');
$birthdate=filter_input(INPUT_POST, 'birthday');
$pn=filter_input(INPUT_POST, 'zip01');
$addr=filter_input(INPUT_POST, 'addr11');
$diag1=filter_input(INPUT_POST, 'diag1');
$icd1=filter_input(INPUT_POST, 'icd1');
$date1=filter_input(INPUT_POST, 'date1');
$date2=filter_input(INPUT_POST, 'date2');
$date3=filter_input(INPUT_POST, 'date3');
$compl1=filter_input(INPUT_POST, 'compl1');
$compl2=filter_input(INPUT_POST, 'compl2');
$fdiagdate=filter_input(INPUT_POST, 'fdiagdate');
$pillness=filter_input(INPUT_POST, 'pillness');

$hosp1=filter_input(INPUT_POST, 'hosp1');
$stm1=filter_input(INPUT_POST, 'stm1');
$em1=filter_input(INPUT_POST, 'em1');
$adm1=filter_input(INPUT_POST, 'adm1');
$diag1=filter_input(INPUT_POST, 'diag1');
$treat1=filter_input(INPUT_POST, 'treat1');
$diag1=filter_input(INPUT_POST, 'diag1');
$res1=filter_input(INPUT_POST, 'res1');

$hosp2=filter_input(INPUT_POST, 'hosp2');
$stm2=filter_input(INPUT_POST, 'stm2');
$em2=filter_input(INPUT_POST, 'em2');
$adm2=filter_input(INPUT_POST, 'adm2');
$diag2=filter_input(INPUT_POST, 'diag2');
$treat2=filter_input(INPUT_POST, 'treat2');
$diag2=filter_input(INPUT_POST, 'diag2');
$res2=filter_input(INPUT_POST, 'res2');

$hosp3=filter_input(INPUT_POST, 'hosp3');
$stm3=filter_input(INPUT_POST, 'stm3');
$em3=filter_input(INPUT_POST, 'em3');
$adm3=filter_input(INPUT_POST, 'adm3');
$diag3=filter_input(INPUT_POST, 'diag3');
$treat3=filter_input(INPUT_POST, 'treat3');
$diag3=filter_input(INPUT_POST, 'diag3');
$res3=filter_input(INPUT_POST, 'res3');



$hosp4=filter_input(INPUT_POST, 'hosp4');
$stm4=filter_input(INPUT_POST, 'stm4');
$em4=filter_input(INPUT_POST, 'em4');
$adm4=filter_input(INPUT_POST, 'adm4');
$diag4=filter_input(INPUT_POST, 'diag4');
$treat4=filter_input(INPUT_POST, 'treat4');
$diag4=filter_input(INPUT_POST, 'diag4');
$res4=filter_input(INPUT_POST, 'res4');

$phis=filter_input(INPUT_POST, 'phis');
$pillness=filter_input(INPUT_POST, 'pillness');
$dlife=filter_input(INPUT_POST, 'dlife');
$tasses=filter_input(INPUT_POST, 'tasses');

$wrday=filter_input(INPUT_POST, 'wrday');
$hname=filter_input(INPUT_POST, 'hname');
$dname=filter_input(INPUT_POST, 'dname');
$haddr=filter_input(INPUT_POST, 'haddr');
$dr=filter_input(INPUT_POST, 'dr');


//echo $hosp1;

//echo  'address'.$pn.$addr;
if(!empty($_POST['gender'])){
	$gender = $_POST['gender'];
}else{$gender='male';}

//var_dump($gender);
if($gender[0]=='male'){
	$gendstr='./images/genderm.png';
}
if($gender[0]=='female'){
	$gendstr='./images/genderf.png';
}

if(!empty($_POST['source1'])){
	$source1 = $_POST['source1'];
}else{$source1[0]='nform';}

if(!empty($_POST['source2'])){
	$source2 = $_POST['source2'];
}else{$source2[0]='ndict';}

if(!empty($_POST['source3'])){
	$source3 = $_POST['source3'];
}else{$source3[0]='nform';}

if(!empty($_POST['source4'])){
	$source4 = $_POST['source4'];
}else{$source4[0]='ndict';}

//var_dump($source3);

if($source1[0]=='form'){
	$sostr1='./images/form.png';
}else{
	$sostr1='./images/nform.png';
}
if($source2[0]=='dict'){
	$sostr2='./images/dict.png';
}else{
	$sostr2='./images/ndict.png';
}
if($source3[0]=='form'){
	$sostr3='./images/form.png';
//	echo $sostr3;
}else{
	$sostr3='./images/nform.png';
}
if($source4[0]=='dict'){
	$sostr4='./images/dict.png';
}else{
	$sostr4='./images/ndict.png';
}





//$namef=$_POST['namef'];
$_SESSION['id']=$id;
$_SESSION['namef']=$namef;
$_SESSION['namej']=$namej;
$_SESSION['birthday']=$birthdate;
if(!empty($birthdate)){
	$age=calage($birthdate);
	$_SESSION['age']=$age;
}

$_SESSION['gender']=$gender;
$_SESSION['pn']=$pn;
$_SESSION['addr']=$addr;
$_SESSION['diag1']=$diag1;
$_SESSION['icd1']=$icd1;

$_SESSION['date1']=$date1;
$_SESSION['date2']=$date2;
$_SESSION['date3']=$date3;




?>
<?php
function calage($birthdate){
	$now = date("Ymd");
	$birthday = str_replace("-", "", $birthdate);//ハイフンを除去しています。
	return floor(($now-$birthday)/10000).'歳';

}

?>
<?php 
	/*	if(!empty($_SESSION['markarray'])){
			var_dump($_SESSION['markarray']);
			//header('location:tokuji.php');
		}else{
			echo 'no data';
		}
		*/
	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/tokuji.css">
	<script type="text/javascript" src="./js/jquery-3.4.1.js"></script>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	<script type="text/javascript" src="./js/tokuji.js"></script>


  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" >
  

</head>
<body>


	
	

<div id="stage">
	<div  id="top1">
		
		<form action="regtokuji.php" method="post">
		<button type="submit">登録</button>
		</form>
		<button id="reserve1">項目チェック保存</button>
		<form action="clear.php" method="post">
		<button type="submit">クリア</button>
		</form>
		<button id="dienl">項目データ入力画面拡大</button>
		<button id="dien2">記述入力画面拡大</button>
	
	</div>
	<div id="mid">
			<div class="wrap" id="wrap1">
					<div class="page" id="page1">

						<div id="main">
							<div id="y1" class="y">
								<div id="y1x1">
									<div id="furi"> （ふりがな）</div>
									<div id="simei">　氏　　名</div>
								</div>
								<div id="y1x2">
									<div id="y1x2u" class=""><?php echo $namef ?></div>
									<div id="y1x2l" class="fs1"><?php echo $namej ?></div>
								</div>
								<div id="y1x3" class="fs1">生年月日</div>
								<div id="y1x4" class="fs1"><?php echo date('Y年m月d日',  strtotime($birthdate)).'  ('.$age.' )' ?></div>
								<div id="y1x5" class="fs1">性別</div>
								<div id="y1x6" class="fs1"><img id="img1" src="<?php echo $gendstr ; ?>">  </div>
							</div>
							<div id="y2" class="y">
								<div id="ad1" class="fs1">住所</div>
								<div id="ad2">
										<div id="ad2u" class="fs0ss">住所地の郵便番号</div>
										<div id="ad2l" class="fs0ss"><?php echo $pn ?></div>
								</div>
								<div id="ad3" class="fs1"><?php echo $addr ?></div>
							</div>
							<div id="y3" class="y">
								<div id="dia1" class="fs1">①　障害の原因となった傷病名</div>
								<div id="dia2" class="fs1"><?php echo $diag1 ?></div>
								<div id="dia3" class="fs1">
									ICD-10コード（<?php echo $icd1 ?>　　）　　
								</div>
							</div>
							<div id="y4" class="y">
								<div id="on1" class="fs1">②　傷病発生<br>年月</div>
								<div id="on2">
									<div id="on21" class="fs1">
										<?php echo '主な精神障害　　　'.$date1  ?>
									</div>
									<div id="on22" class="fs1">
										<?php echo '合併精神障害　　　'.$date2  ?>
									</div>
									<div id="on23" class="fs1">
										<?php echo '合併身体障害　　　'.$date2  ?>
									</div>
									<div id="on24" class="fs1"><img id="img2" src="<?php echo $sostr1 ; 		?>">  </div>
									<div id="on25" class="fs1"><img id="img3" src="<?php echo $sostr2 ; ?>">
									</div>
								</div>
								<div id="on3">
									<div id="on3u" class="fs1">③　合併症</div>
									<div id="on3l" class="fs0">④　①のため初めて医師の診断を受けた日</div>
								</div>
								<div id="on4">
									<div id="on4u">
										<div id="on4uu" class="fs1"><?php echo '精神障害　　　'. $compl1  ?>
										</div>
										<div id="on4ul" class="fs1"><?php echo '身体障害　　　'. $compl2 ; ?></div>
										</div>
									<div id="on4l">
										<div id="on4l1"><?php echo date('Y年m月d日',  strtotime($fdiagdate)) ; ?></div>
										<div id="on4l2">
										<div id="on4l2u" class="fs1"><img id="img4" src="<?php echo $sostr3 ; ?>">
										</div>
											<div id="on4l2l" class="fs1"><img id="img5" src="<?php echo $sostr4 ; ?>">
											</div>
									</div>
								</div>
							</div>
						</div>
						<div id="y5" class="y">
								<div id="his1">
									<div id="his1u" class="fs1">⑤　現病歴（陳述者より聴取）<br> ア　発病以来の病状と経過
									</div>
									<div id="his1l" class="fs1"><?php echo $pillness ; ?></div>
								</div>
								<div id="his2">
									<div id="his2u">
										<div id="his2u1" class="fs1">陳述者の氏名</div>
										<div id="his2u2"></div>
										<div id="his2u3" class="fs1">患者との続柄</div>
										<div id="his2u4"></div>
									</div>
									<div id="his2l">
										<div id="his2l1" class="fs1">イ　発病以来の治療歴</div>
										<div id="his2l2">
											<div id="his2l21"></div>
											<div id="his2l22" class="fs1">（病院名）</div>
											<div id="his2l23" class="fs1">（治療期間）</div>
											<div id="his2l23e" class="fs1"></div>
											<div id="his2l24" class="fs0">（入院・外来別）</div>
											<div id="his2l25" class="fs1">（病名）</div>
											<div id="his2l26" class="fs1">（主な療法）</div>
											<div id="his2l27" class="fs1">（転帰）</div>
										</div>
										<div id="his2l3">
											<div id="his2l31" class="hfs">（ア）</div>
											<div id="his2l32" class="hfs"><?php echo $hosp1; ?></div>
											<div id="his2l33" class="hfs"><?php echo $stm1; ?></div>
											<div id="his2l33e" class="hfs"><?php echo $em1; ?></div>
											<div id="his2l34" class="hfs"><?php echo $adm1; ?></div>
											<div id="his2l35" class="hfs"><?php echo $diag1; ?></div>
											<div id="his2l36" class="hfs"><?php echo $treat1; ?></div>
											<div id="his2l37" class="hfs"><?php echo $res1; ?></div>
										</div>
										<div id="his2l4">
											<div id="his2l41" class="fs1">（イ）</div>
											<div id="his2l42" class="hfs"><?php echo $hosp2; ?></div>
											<div id="his2l43" class="hfs"><?php echo $stm2; ?></div>
											<div id="his2l43e" class="hfs"><?php echo $em2; ?></div>
											<div id="his2l44" class="hfs"><?php echo $adm2; ?></div>
											<div id="his2l45" class="hfs"><?php echo $diag2; ?></div>
											<div id="his2l46" class="hfs"><?php echo $treat2; ?></div>
											<div id="his2l47" class="hfs"><?php echo $res2; ?></div>
										</div>
										<div id="his2l5">
											<div id="his2l51" class="fs1">（ウ）</div>
											<div id="his2l52" class="hfs"><?php echo $hosp3; ?></div>
											<div id="his2l53" class="hfs"><?php echo $stm3; ?></div>
											<div id="his2l53e" class="hfs"><?php echo $em3; ?></div>
											<div id="his2l54" class="hfs"><?php echo $adm3; ?></div>
											<div id="his2l55" class="hfs"><?php echo $diag3; ?></div>
											<div id="his2l56" class="hfs"><?php echo $treat3; ?></div>
											<div id="his2l57" class="hfs"><?php echo $res3; ?></div>
										</div>
										<div id="his2l6">
											<div id="his2l61" class="fs1">（エ）</div>
											<div id="his2l62" class="hfs"><?php echo $hosp4; ?></div>
											<div id="his2l63" class="hfs"><?php echo $stm4; ?></div>
											<div id="his2l63e" class="hfs"><?php echo $em4; ?></div>
											<div id="his2l64" class="hfs"><?php echo $adm4; ?></div>
											<div id="his2l65" class="hfs"><?php echo $diag4; ?></div>
											<div id="his2l66" class="hfs"><?php echo $treat4; ?></div>
											<div id="his2l67" class="hfs"><?php echo $res4; ?></div>
										</div>
									</div>
								</div>

							</div>
						<div id="y6" class="y">
							<div id="phis1" class="fs0">
									⑥　これまでの発育・養育歴等(出生から発育の状況や教育歴を陳述者より聴取の上、できるだけ詳しく記入してください。)
							</div>
							<div id="phis2">
									<div id="phis2u" class="fs0">ア　発育・教育歴</div>
									<div id="phis2l" class="fs0"><?php echo $phis; ?></div>
							</div>
							<div id="phis3">
									<div id="phis31" class="fs0">
										イ　教育歴
									</div>
									<div id="phis32" class="fs0">
											乳児期
									</div>
									<div id="phis33" class="">
										<div id="phis331" class="fs0">
												<div id="phis3311" class="fs0">
													不就学
												</div>
										</div>
										<div id="phis332" class="" >
												<div id="phis3321" class="fs0">
													就学猶予
												</div>
										</div>
									</div>
									<div id="phis34" class="">
										<div id="phis341" class="fs0">
											小学校
										</div>
										<div id="phis342" class="">
											<div id="phis3421" class="fs0">
												普通学級
											</div>
										</div>
										<div id="phis343" class="">
											<div id="phis3431" class="fs0">
												特別支援学級
											</div>
										</div>
										<div id="phis344" class="">
											<div id="phis3441" class="fs0">
												特別支援学校
											</div>
										</div>
									</div>
									<div id="phis35" class="">
										<div id="phis351" class="fs0">
												中学校
										</div>
										<div id="phis352" class="">
											<div id="phis3521" class="fs0">
													普通学級
											</div>
										</div>
										<div id="phis353" class="">
											<div id="phis3531" class="fs0">
													特別支援学級
											</div>
										</div>
										<div id="phis354" class="">
											<div id="phis3541" class="fs0">
													特別支援学校
											</div>
										</div>
									</div>
									<div id="phis36" class="">
											<div id="phis361" class="fs0">
													高校
											</div>
											<div id="phis362" class="">
												<div id="phis3621" class="fs0">普通学級</div></div>
												<div id="phis363" class="">
													<div id="phis3631" class="fs0">	
														特別支援学校
													</div>
												</div>
											</div>
									<div id="phis37" class="fs0">
											<div id="phis371" class="fs0">
												<div id="phis3711" class="fs0">
												その他
												</div>
											</div>
											<div id="phis372" class="fs0">
											</div>
											<div id="phis373" class="fs0">
											</div>
											<div id="phis374" class="fs0">
											</div>
									</div>
							</div>
						</div>
						<div id="y7" class="y" class="fs0">　　　　　　　　　　　　　　　　　　障害の状態(<?php echo $pillness ?>　現症）
						</div>
						<div id="y8" class="">
							<div id="pil1"　class="fs0">
									現症
							</div>
							<div id="pil2">
								<div id="p21">
									<div id="p211" class="fs0" > 
										現在の病状または状態像
									</div>
									<div id="p212" class="">	
										<div id="p2121" class="fssm">左記の状態について、その程度・症状・処方薬等を具体的に記入してください。</div>
									</div>
								</div>
								<div id="p22">
									<div id="p221" class="fs0">
									⑦　知能障害等
									</div>
									<div id="p222">
										<div id="p2221" class="">
											<div id="p22211" class="fs0">
													1 知的障害
											</div>
										</div>
										<div id="p2222" class="">
											<div id="p22221" class="fs0">
													知能指数又は発達指数
											</div>
											<div id="p22222" class="">
												<div id="p222221" class="fs0">IQ</div>
											</div>
											<div id="p22223" class="">
												<div id="p222231" class="fs0">・DQ</div>
											</div>
											<div id="p22224" class=""></div>
								
										</div>
										<div id="p2223" class="">
												<div id="p22231" class="fs0">
														テスト方式
												</div>
												<div id="p22232" class="fs0">
												</div>
												<div id="p22233" class="">
													<div id="p222331" class="fs0">
															テスト不能
													</div>
												</div>
										</div>
										<div id="p2224" class="">
												<div id="p22241" class="fs0">
														判定
												</div>
												<div id="p22242" class="">
													<div id="p222421" class="fs0">
															最重度
													</div>
												</div>
												<div id="p22243" class="">
													<div id="p222431" class="fs0">
															重度
													</div>
												</div>
												<div id="p22244" class="">
													<div id="p222441" class="fs0">
															中度
													</div>
												</div>
												<div id="p22245" class="">
													<div id="p222451" class="fs0">
															軽度
													</div>
												</div>
										</div>
										<div id="p2225" class="">
												<div id="p22251" class="fs0">
														判定年月日
												</div>
												<div id="p22252" class="fs0">	
												</div>
										</div>
										<div id="p2226" class="">
												<div id="p22261" class="">
													<div id="p222611" class="fs0">
															2 高次脳機能障害
													</div> 
															
												</div>
												<div id="p22262" class="">
														<div id="p222621" class="fs0">
															ア 失行
														</div>
														　
												</div>
												<div id="p22263" class="">
														<div id="p222631" class="fs0">
															イ 失認
														</div>
													　	
												</div>
										</div>
										<div id="p2227" class="">
												<div id="p22271" class="">
													<div id="p222711" class="fs0">
															ウ 記憶障害
													</div>
													　	
													</div>
												<div id="p22272" class="">
													<div id="p222721" class="fs0">
															エ 注意障害
													</div>
													　
												</div>
										</div>
										<div id="p2228" class="">
												<div id="p22281" class="">
													<div id="p222811" class="fs0">
															オ 遂行機能障害
													</div>
													　 
												</div>
												<div id="p22282" class="">
													<div id="p222821" class="fs0">
															ヵ 社会的行動障害
													</div>
											　				
													</div>
										</div>
										<div id="p2229" class="fs0">
												<div id="p22291" class="">
													<div id="p222911" class="fs0">
															3 学習障害
													</div>
														
												</div>
												<div id="p22292" class="fs0">
													<div id="p222921" class="fs0">
															ア 読み
													</div>
														　
												</div>
												<div id="p22293" class="">
													<div id="p222931" class="fs0">
															イ 書き
													</div>
											　				
												</div>
												<div id="p22294" class="">
													<div id="p222941" class="fs0">
															ウ 算数
													</div>
											　				
												</div>
							
										</div>
										<div id="p22210" class="fs0">
												<div id="p222101" class="">
														<div id="p2221011" class="fs0">
															エ その他
														</div>
											　			
												</div>
										</div>
										<div id="p22211" class="">
												<div id="p222111" class="">
													<div id="p2221111" class="fs0">
															4 その他
													</div>
														 
												</div>
												<div id="p222112" class="fs0"></div>
												</div>
							

										</div>
								<div id="p223">
							
								</div>
							</div>
							<div id="p23">
								<div id="p231" class="fs0">⑧　発達障害関連症状</div>
								<div id="p232">
									<div id="p2321" class="">
										<div id="p23211" class="fs0">
												1 相互的な社会関係の質的異常 
										</div>
												
									</div>
									<div id="p2322" class="">
										<div id="p23221" class="fs0">
										2 言語コミュニケーションの障害 
										</div>
											
									</div>
									<div id="p2323" class="">
										<div id="p23231" class="fs0">
												3 限定した常同的で反復的な関心と行動 
										</div> 
											
									</div>
									<div id="p2324" class="">
											<div id="p23241" class="fs0">
									 			4  その他 
											</div>
												
											 <div id="p23242" class="fs0">	
											 </div>
								
								
									</div>
								</div>
							<div id="p233">
							</div>
						</div>
						<div id="p24">
								<div id="p241" class="fs0">⑨　意識障害・てんかん</div>
								<div id="p242">
									<div id="p2421" class="">
										<div id="p24211" class="">
											<div id="p242111" class="fs0">
													1 意識混濁
												</div>
										 		
										</div>
										<div id="p24212" class="">
											<div id="p242121" class="fs0">
													2 （夜間）せん妄
											</div>
										 		
										</div>
									</div>
									<div id="p2422" class="">
										<div id="p24221" class="">
											<div id="p242211" class="fs0">
													3 もうろう
											</div>
												 
										</div>
										<div id="p24222" class="">
											<div id="p242221" class="fs0">
												4 錯乱
											</div>
													 
										</div>
										<div id="p24223" class="">
											<div id="p242231" class="fs0">
													5 てんかん発作
											</div>
												 
										</div>
									</div>
									<div id="p2423" class="">
										<div id="p24231" class=""><div id="p242311" class="fs0">6 不機嫌症</div> </div>
										<div id="p24232" class=""><div id="p242321" class="fs0">7 その他</div> </div>
										<div id="p24233" class="fs0">（　　　）</div>
									</div>
									<div id="p2424" class="">
										<div id="p24241" class="fs0">てんかん発作のタイプ</div>
										<div id="p24242" class="fs0"></div>
									</div>
									<div id="p2425" class="">
										<div id="p24251" class="fs0">てんかん発作の頻度</div>
										<div id="p24252" class="fs0">（（年間・</div>
										<div id="p24253" class="fs0">・月・</div>
										<div id="p24254" class="fs0">・週）</div>
										<div id="p24255" class="fs0">回程度）</div>
									</div>
								</div>
								<div id="p243">
									
								</div>
						</div>
						<div id="p25">
								<div id="p251" class="fs0">⑩　精神症状</div>
								<div id="p252">
									<div id="p2521">
										<div id="p25211" class=""><div id="p252111" class="fs0">1 幻覚</div>  </div>
										<div id="p25212" class=""><div id="p252121" class="fs0">2 妄想</div>  </div>
										<div id="p25213" class=""><div id="p252131" class="fs0">3 自閉</div>  </div>
										<div id="p25214" class=""><div id="p252141" class="fs0">4 無為</div>  </div>
										<div id="p25215" class=""><div id="p252151" class="fs0">5 感情の平板化</div>  </div>
										<div id="p25216" class=""><div id="p252161" class="fs0">6 不安</div>  </div>
									</div>
									<div id="p2522">
										<div id="p25221"class=""><div id="p252211" class="fs0">7 恐怖</div>  </div>
										<div id="p25222"class=""><div id="p252221" class="fs0">8 強迫行為</div>  </div>
										<div id="p25223"class=""><div id="p252231" class="fs0">9 思考障害</div>  </div>
										<div id="p25224"class=""><div id="p252241" class="fs0">10 心気症</div>  </div>
										<div id="p25225"class=""><div id="p252251" class="fs0">11 中毒嗜癖</div>  </div>
									</div>
									<div id="p2523">
										<div id="p25231"class=""><div id="p252311" class="fs0">12 うつ状態</div>  </div>
										<div id="p25232"class=""><div id="p252321" class="fs0">13 そう状態</div>  </div>
										<div id="p25233"class=""><div id="p252331" class="fs0">14 その他()</div> </div>

									</div>
								</div>
								<div id="p253"></div>
						</div>
						<div id="p26">
								<div id="p261" class="fs0">⑪　問題行動及び習癖</div>
								<div id="p262">
									<div id="p2621" class="fs0s">
										<div id="p26211" class=""><div id="p262111" class="fs0">1 興奮</div></div>
										<div id="p26212" class=""><div id="p262121" class="fs0">2 暴行</div></div>
										<div id="p26213" class=""><div id="p262131" class="fs0">3 多動</div></div>
										<div id="p26214" class=""><div id="p262141" class="fs0">4 拒絶</div></div>
										<div id="p26215" class=""><div id="p262151" class="fs0">5 自殺企図</div></div>
										<div id="p26216" class=""><div id="p262161" class="fs0">6 自傷</div></div>
									</div>
									<div id="p2622" class="fs0s">
										<div id="p26221" class=""><div id="p262211" class="fs0">7 破衣</div> </div>
										<div id="p26222" class=""><div id="p262221" class="fs0">8 不潔</div> </div>
										<div id="p26223" class=""><div id="p262231" class="fs0">9 放火・弄火</div></div>
										<div id="p26224" class=""><div id="p262241" class="fs0">10 器物破壊</div> </div>
										<div id="p26225" class=""><div id="p262251" class="fs0">11 徘徊・浮浪</div> </div>
									</div>
									<div id="p2623" class="fs0s">
										<div id="p26231" class=""><div id="p262311" class="fs0">12 盗み</div> </div>
										<div id="p26232" class=""><div id="p262321" class="fs0">13 性的逸脱行為</div> </div>
									</div>
									<div id="p2624" class="fs0s">
										<div id="p26241" class=""><div id="p262411" class="fs0">14 排泄の問題</div> </div>
										<div id="p26242" class=""><div id="p262421" class="fs0">（尿失禁、</div></div>
										<div id="p26243" class=""><div id="p262431" class="fs0">便失禁、</div></div>
										<div id="p26244" class=""><div id="p262441" class="fs0">便こね、</div></div>
										<div id="p26245" class=""><div id="p262451" class="fs0">その他</div></div>
									</div>
									<div id="p2625" class="fs0s">
										<div id="p26251" class=""><div id="p262511" class="fs0">15 食事の問題</div> （</div>
										<div id="p26252" class=""><div id="p262521" class="fs0">拒食</div>、</div>
										<div id="p26253" class=""><div id="p262531" class="fs0">異食</div>、</div>
										<div id="p26254" class=""><div id="p262541" class="fs0">大食</div>、</div>
										<div id="p26255" class=""><div id="p262551" class="fs0">小食</div>、</div>
										<div id="p26256" class=""><div id="p262561" class="fs0">偏食</div>、</div>
										<div id="p26257" class=""><div id="p262571" class="fs0">その他</div></div>
									</div>
									<div id="p2626" class="">
										<div id="p26261" class="fs0">16 その他</div>
									</div>
								</div>
								<div id="p263"></div>
							</div>
							<div id="p27">
								<div id="p271">性格特徴</div>
								<div id="p272"></div>
						
							</div>
						</div>
					</div>
	   			</div>
			</div>

<div id="page2" class="page">
	　　　　　　　　　　　　　　　　　　　　　　(裏面)
	<div id="main2">
		<div id="y9">
			<div id="pil3">現症</div>
			<div id="pil4">
				<div id="p28">
						<div id="p281">
								⑬　日常生活の程度<br>
							（かならず記入してください）
						</div>
						<div id="p282">
							
							<div id="p2821">
								
								<div id="p28211">
									
									<div id="p282111">
										<div id="p2821111" class="fs0s">1 食事</div>
										<div id="p2821112"><div id="p28211121" class="fs0s">（全介助</div></div>
										<div id="p2821113"><div id="p28211131" class="fs0s">・半介助</div></div>
										<div id="p2821114"><div id="p28211141" class="fs0s">・自立）</div></div>
									</div>
									<div id="p282112">
										<div id="p2821121"　class="fs0s"><div id="p28211211" class="fs0s">2 洗面</div></div>
										<div id="p2821122"　class="fs0s"><div id="p28211221" class="fs0s">（全介助</div></div>
										<div id="p2821123"　class="fs0s"><div id="p28211231" class="fs0s">・半介助</div></div>
										<div id="p2821124"　class="fs0s"><div id="p28211241" class="fs0s">・自立）</div></div>
									</div>
									<div id="p282113">
										<div id="p2821131"><div id="p28211311" class="fs0s">3 排泄</div></div>	
										<div id="p2821132">
												<div id="p28211321">
													<div id="p282113211" class="fs0s"><div id="p2821132111" class="fs0s">おむつ必要</div></div>
													<div id="p282113212" class="fs0s"><div id="p2821132121" class="fs0s">・おむつ不要</div></div>
												</div>
												<div id="p28211322">
													<div id="p282113221" class="fs0s"><div id="p2821132211" class="fs0s">全介助</div></div>
													<div id="p282113222" class="fs0s"><div id="p2821132221" class="fs0s">・半介助</div></div>
													<div id="p282113223" class="fs0s"><div id="p2821132231" class="fs0s">・自立</div></div>
												</div>
											
										</div>
										
										<div id="p2821133"　class="fs0s"></div>
									</div>
									<div id="p282114">
										<div id="p2821141"><div id="p28211411" class="fs0s">4 衣服</div></div>
										<div id="p2821142">
											<div id="p28211421">
												<div id="p282114211" class="fs0s"><div id="p2821142111" class="fs0s">脱げない</div></div>
												<div id="p282114212" class="fs0s"><div id="p2821142121" class="fs0s">・着れない</div></div>
											</div>
											<div id="p28211422">
												<div id="p282114221" class="fs0s"><div id="p2821142211" class="fs0s">ボタン不能</div></div>
												<div id="p282114222" class="fs0s"><div id="p2821142221" class="fs0s">・自立</div></div>
											</div>
										</div>
										<div id="p2821143"></div>
									</div>
								
								</div>
								<div id="p28212">
									<div id="p282121">
										<div id="p2821211" class="fs0s">5 入浴</div>
										<div id="p2821212" class=""><div id="p28212121" class="fs0s">(全介助</div></div>
										<div id="p2821213" class=""><div id="p28212131" class="fs0s">・半介助</div></div>
										<div id="p2821214" class=""><div id="p28212141" class="fs0s">・自立</div></div>
									</div>
									<div id="p282122">
										<div id="p2821221" class="fs0s">6 危険物[</div>
										<div id="p2821222">
											<div id="p28212221">
												<div id="p282122211" class=""><div id="p2821222111" class="fs0s">全くわからない</div></div>
												<div id="p282122212" class=""><div id="p2821222121" class="fs0s">特定の物</div></div>
											</div>
											<div id="p28212222">
												<div id="p282122221" class=""><div id="p2821222211" class="fs0s">場所はわかる</div></div>
												<div id="p282122222" class=""><div id="p2821222221" class="fs0s">・大体わかる</div></div>
											</div>
										</div>
									</div>
									<div id="p282123">
										<div id="p2821231" class="fs0s">7 睡眠</div>
										<div id="p2821232">
											<div id="p28212321">
												<div id="p282123211" class=""><div id="p2821232111x" class="fs0s">夜眠らず騒ぐ</div></div>
												<div id="p282123212" class=""><div id="p2821232121" class="fs0s">・時々不眠</div></div>
											</div>
											<div id="p28212322">
												<div id="p282123221" class=""><div id="p2821232211" class="fs0s">寝ぼける</div></div>
												<div id="p282123222" class=""><div id="p2821232221" class="fs0s">・問題なし</div></div>
											</div>
										</div>
									</div>
								</div>
							
								
							</div>
							<div id="p2822">
								<div class=fs0s>上記の状態を具体的に記載してください。</div>
								
								<div><?php echo $dlife; ?></div>
							</div>
							
						</div>	
					
				</div>
				<div id="p29">
					<div id="p291" class=fs1>⑭　要注意度</div>
					<div id="p292">
						<div id="p2921" class=fs0s>1.常に厳密な注意を必要とする　</div>
						<div id="p2922" class=fs0s>2.随時一応の注意を必要とする。 </div>
						<div id="p2923" class=fs0s>3.ほとんど必要ない</div>
					</div>		
				</div>

			</div>			
		</div>
		<div id="y10">
			<div id="tasses" class=fs0>⑮　医学的総合判定<br>（かならず記入してください）</div>
			<div id="tasses2" class=fs0s><?php echo $tasses; ?></div>
		</div>
		<div id="y11">
			<div id="tcomment" class=fs0>⑯　備考</div>
			<div id="tcomment2" class=fs0s><?php echo $tcomment; ?></div>
		</div>
		
				
	</div>
			<div id="y12">本人の障害の程度及び状態に無関係な欄は記入する必要はありません。（無関係な欄は斜線により抹消してください）</div>
			<div id="y13">
				<div id="y131">上記の通り診断します。</div>
				<div id="y132"></div>
				<div id="y133">年　月　日</div>
				<div id="y134"><?php echo $wrday ?></div>
			</div>
			<div id="y14">
				<div id="y141">病院又は診療所の名称</div>
				<div id="y142"><?php echo $hname ?></div>
				<div id="y143">診療担当科名</div>
				<div id="y144"><?php echo $dname ?></div>
			</div>
			<div id="y15">
				<div id="y151">所在地</div>
				<div id="y152"><?php echo $haddr ?></div>
				<div id="y153">医師氏名</div>
				<div id="y154"> <?php echo $dr ?>　　　　　　　　印</div>
				
			</div>
		
	</div>

</div>
	<div id="ref1" class="ref0">
		<div class="wrap">
			<h3>教育歴</h3>
			<div id="nkind" class="circle">不就学</div>
			<div id="wkind" class="circle">就学猶予</div>
			<h3>小学校</h3>
			<div id="paver" class="circle">普通学級</div>
			<div id="psup" class="circle">支援学級</div>
			<div id="pssch" class="circle">支援学校</div>
			<h3>中学校</h3>
			<div id="javer" class="circle">普通学級</div>
			<div id="jsup" class="circle">支援学級</div>
			<div id="jssch" class="circle">支援学校</div>
			<h3>高校</h3>
			<div id="haver" class="circle">普通学級</div>
			<div id="hssch" class="circle">支援学校</div>
			<div id="other" class="circle">その他</div>
			
			<div id="mr" class="circle">知的障害</div>
			<div id="iq" class="circle">IQ</div>
			<div id="dq" class="circle">DQ</div>
			<div id="ntest" class="circle">テスト不能</div>
			<div id="msmr" class="circle">最重度</div>
			<div id="smr" class="circle">重度</div>
			<div id="mmr" class="circle">中度</div>
			<div id="slmr" class="circle">軽度</div>
    </div>
  </div>
  <div id="ref2" class="ref">
		<div class="wrap">
			<div id="hbd" class="circle">高次脳機能障害</div>
			<div id="apr" class="circle">ア　失行</div>
			<div id="agn" class="circle">イ　失認</div>
			<div id="med" class="circle">ウ　記憶障害</div>
			<div id="attd" class="circle">エ　注意障害</div>
			<div id="exd" class="circle">オ　遂行機能障害</div>
			<div id="sbd" class="circle">カ　社会的行動障害</div>
			<div id="read" class="circle">ア　読み</div>
			<div id="write" class="circle">イ　書き</div>
			<div id="calc" class="circle">ウ　算数</div>
			<div id="ldother" class="circle">エ　その他</div>
			<div id="fother" class="circle">　その他</div>

			<div id="msrd" class="circle">　1 相互的な社会関係の質的障害</div>
			<div id="comd" class="circle">　2 言語コミュニケーションの障害</div>
			<div id="sterd" class="circle">　3 限定した常同的な関心と行動</div>
			<div id="otherdev" class="circle">　4 その他</div>
			<div id="cons" class="circle">　1 意識障害</div>
			<div id="deli" class="circle">　2 （夜間）せん妄</div>
			<div id="twi" class="circle">　3 もうろう</div>
			<div id="dera" class="circle">　4 錯乱</div>
			<div id="epi" class="circle">　5 てんかん発作</div>
			<div id="sul" class="circle">　6 不機嫌症</div>
			<div id="otherep" class="circle">　7 その他</div>
		</div>
	</div>
	<div id="ref3" class="ref1">
		<div class="wrap">
			<div id="hal" class="circle">　1 幻覚</div>
			<div id="del" class="circle">　2 妄想</div>
			<div id="auti" class="circle">　3 自閉</div>
			<div id="idl" class="circle">　4 無為</div>
			<div id="emfl" class="circle">　5 感情の平板化</div>
			<div id="anx" class="circle">　6 不安</div>
			<div id="fear" class="circle">　7 恐怖</div>
			<div id="compul" class="circle">　8 強迫行為</div>
			<div id="thoud" class="circle">　9 思考障害</div>
			<div id="hypo" class="circle">　10 心気症</div>
			<div id="addi" class="circle">　11 中毒嗜癖</div>
			<div id="depr" class="circle">　12 うつ状態</div>
			<div id="overall" class="circle">　13 そう状態</div>
			<div id="otherps" class="circle">　14 その他</div>

			<div id="excite" class="circle">　1 興奮</div>
			<div id="viol" class="circle">　2 暴行</div>
			<div id="hyperact" class="circle">　3 多動</div>
			<div id="rej" class="circle">　4 拒絶</div>
			<div id="suic" class="circle">　5 自殺企図</div>
			<div id="sinj" class="circle">　6 自傷</div>
			<div id="twp" class="circle">　7 破衣</div>
			<div id="uncl" class="circle">　8 不潔</div>
			<div id="ars" class="circle">　9 放火・弄火</div>
			<div id="dprop" class="circle">　10 器物破損</div>
			<div id="prow" class="circle">　11 徘徊浮浪</div>
			<div id="steal" class="circle">　12 盗み</div>
			<div id="sesc" class="circle">　13 性的逸脱行為</div>
		</div>
	</div>
	 <div id="ref4" class="ref1">
		<div class="wrap">
   
			<div id="excp" class="circle">　14 排泄の問題</div>
			<div id="uinco" class="circle">　 尿失禁</div>
			<div id="sinco" class="circle">　 便失禁</div>
			<div id="protub" class="circle">　 便こね</div>
			<div id="otherexc" class="circle">　 その他</div>
			<div id="dietp" class="circle">　15 食事の問題</div>
			<div id="refeat" class="circle">　拒食</div>
			<div id="diffood" class="circle">　異食</div>
			<div id="glut" class="circle">　大食</div>
			<div id="litfood" class="circle">　小食</div>
			<div id="unbdiet" class="circle">　偏食</div>
			<div id="othereat" class="circle">　その他</div>
			<div id="otherbeh" class="circle">　16 その他</div>
			1 食事
			<div id="diet1" class="circle">全介助</div>
			<div id="diet2" class="circle">半介助</div>
			<div id="diet3" class="circle">自立</div>
			2 洗面
			<div id="wf1" class="circle">全介助</div>
			<div id="wf2" class="circle">半介助</div>
			<div id="wf3" class="circle">自立</div>
			3 排泄
			<div id="ex1" class="circle">おむつ必要</div>
			<div id="ex2" class="circle">・おむつ不要</div>
			<div id="ex3" class="circle">全介助</div>
			<div id="ex4" class="circle">・半介助</div>
			<div id="ex5" class="circle">・自立</div>
			4 衣服
			<div id="clo1" class="circle">脱げない</div>
			<div id="clo2" class="circle">・着れない</div>
			<div id="clo3" class="circle">ボタン不能</div>
			<div id="clo4" class="circle">・自立</div>
			5 入浴
			<div id="ba1" class="circle">全介助</div>
			<div id="ba2" class="circle">半介助</div>
			<div id="ba3" class="circle">自立</div>
			6 危険物
			<div id="ris1" class="circle">全くわからない</div>
			<div id="ris2" class="circle">・特定の物</div>
			<div id="ris3" class="circle">場所はわかる</div>
			<div id="ris4" class="circle">・大体わかる</div>
			7 睡眠
			<div id="sle1" class="circle">夜眠らず騒ぐ</div>
			<div id="sle2" class="circle">・時々不眠</div>
			<div id="sle3" class="circle">寝ぼける</div>
			<div id="sle4" class="circle">・問題なし</div>

			<div id="cdeg1">常に厳重な注意を必要とする</div>
			<div id="cdeg2">随時一応の注意を必要とする</div>
			<div id="cdeg3">ほとんど必要ない</div>
			

		
		</div>	
	</div>
	<div id="inpform1" class="inpform">
		<?php echo 'id'.$id; ?>
		<form action="tokuji.php" method="post">
		<label for="id">ID</label><br>
		<input type="text" name="id" value="" id="id" class="inp"><br>
		<label for= "namef">名前（ふりがな）</label><br>	
		<input type="text" name="namef" value="" id="namef" class="inp"><br>
		<label for="namej">名前</label><br>
		<input type="text" name="namej" value="" id="namej" class="inp"><br>
		<label for="bday">出生年月日</label><br>
		<input type="date" name="birthday" value="" id="bday"　class="inp"><br>
		<label for="male">性別</label><br>
		<input type="checkbox" name="gender[]" value="male" id="male"> 男
		<input type="checkbox" name="gender[]" value="female" id="female"> 女<br>
		
		
		
		郵便番号:<input type="text" name="zip01" class="inp" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');"><br>
 
		<label for="address01">住所</label><br>
		<input type="text" name="addr11" size="60" id="address01" class="inp" /><br>
		<label for="diag1">診断</label><br>
		<input type="text" name="diag1" value="" id="diag1" class="inp"><br>
		<label for="icd1">ICD10</label><br>
		<input type="text" name="icd1" value="" class="inp"><br>
		<div class="wrap">
				<label for="date1">主な精神障害</label><br>
				<input type="date" name="date1" value="" id="date1" class=""><br>
				<label for="date2">合併精神障害</label><br>
				<input type="date" name="date2" value="" id="date2" class="inp"><br>
				<label for="date3">合併身体障害</label><br>
				<input type="date" name="date3" value="" id="date3" class="inp"><br>
				<label for="s1">診療録で確認</label><br>
				<input type="checkbox" name="source1[]" id="s1" value="form"><br>
				<label for="s2">本人の申し立て</label><br> 
				<input type="checkbox" name="source2[]" id="s2" value="dict"><br>
		</div>
		<div class="wrap">
				<label for="compl1">合併精神障害</label><br>
				<input type="text" name="compl1" id="compl1" class="inp"><br>
				<label for="compl2">合併身体障害</label><br>
				<input type="text" name="compl2" id="compl2" class="inp"><br>
				<label for="fdiagdate">はじめて医師の診断を受けた日</label><br>
				<input type="date" name="fdiagdate" id="fdiagdate" class="inp" ><br>
				<label for="s1">診療録で確認</label><br>
				<input type="checkbox" name="source3[]" id="s1" value="form"><br>
				<label for="s2">本人の申し立て</label><br> 
				<input type="checkbox" name="source4[]" id="s2" value="dict"><br>	
		</div>
				<label for="pillnes">現病歴</label><br>
			 	<textarea cols="30" rows="10" id="pillness" name="pillness" class="tarea"></textarea><br>
	</div>
	<div id="inpform2" class="inpform">
		
		<div class="wrap">
				<h3>発病依頼の治療歴</h3>
			 	<label for="hosp1">病院名</label><br>
			 	<input type="text" name="hosp1" id="hosp1" class="inp" list="hosp" placeholder="病院名" autocomplete="off">
  						<datalist id="hosp">
   								<option value="旭川荘南愛媛病院">
  								<option value="愛媛県立子ども療育センター">
  　　　　 						<option value="市立宇和島病院">
  								<option value="愛媛大学医学部付属病院">
  						</datalist><br>
			 	<label for="stm1">診療開始</label><br>
			 	<input type="month" name="stm1" id="stm1" value="" class="inp"><br>

			 	<label for="em1">診療終了</label><br>
			 	<input type="month" name="em1" id="em1" value="" class="inp"><br>
			 	<label for="adm1">入院</label><br>
				
				<select id="adm1" name="adm1" class="inp">
					<option>入院</option>
					<option>外来</option>
					
				</select><br>
				<label for="diag1">病名</label><br>
			 	
			 	<input type="text" name="diag1" id="diagname1" class="inp" list="diag" placeholder="病名" autocomplete="off">
  						<datalist id="diag">
   								<option value="自閉スペクトラム症、">
  								<option value="注意欠如多動性障害">
  　　　　 						<option value="学習障害">
  								<option value="知的障害">
  						</datalist><br>
			 	<label for="treat1">治療</label><br>
			 	
			 	<input type="text" name="treat1" id="treat1" class="inp" list="treat" placeholder="治療" autocomplete="off">
  						<datalist id="treat">
   								<option value="相談">
  								<option value="薬物療法">
  　　　　 						<option value="言語療法">
  								<option value="作業療法">
  								<option value="理学療法">
  								<option value="リハビリテーション">
  						</datalist><br>
			 	<label for="res1">転帰</label><br>
			 	<select id="res1" name="res1" class="inp">
			 		<option>軽快</option>
			 		<option>不変</option>
			 		<option>増悪</option>
			 	</select><br><br>

			 	<label for="hosp2">病院名</label><br>
			 	<input type="text" name="hosp2" id="hosp2" class="inp" list="hosp" placeholder="病院名" autocomplete="off">
  						<datalist id="hosp">
   								<option value="旭川荘南愛媛病院">
  								<option value="愛媛県立子ども療育センター">
  　　　　 						<option value="市立宇和島病院">
  								<option value="愛媛大学医学部付属病院">
  						</datalist><br>
			 	<label for="stm2">診療開始</label><br>
			 	<input type="month" name="stm2" id="stm2" value="" class="inp"><br>
			 	<label for="em2">診療終了</label><br>
			 	<input type="month" name="em2" id="em2" value="" class="inp"><br>
			 	<label for="adm2">入院</label><br>
				<select id="adm2" name="adm2" class="inp">
					<option>入院</option>
					<option>外来</option>
				</select><br>
				<label for="diag2">病名</label><br>
			 	<input type="text" name="diag2" id="diagname2" class="inp" list="diag" placeholder="病名" autocomplete="off">
  						<datalist id="diag">
   								<option value="自閉スペクトラム症、">
  								<option value="注意欠如多動性障害">
  　　　　 						<option value="学習障害">
  								<option value="知的障害">
  						</datalist><br>
			 	<label for="treat2">治療</label><br>
			 	<input type="text" name="treat2" id="treat2" class="inp" list="treat" placeholder="治療" autocomplete="off">
  						<datalist id="treat">
   								<option value="相談">
  								<option value="薬物療法">
  　　　　 						<option value="言語療法">
  								<option value="作業療法">
  								<option value="理学療法">
  								<option value="リハビリテーション">
  						</datalist><br>
			 	<label for="res2">転帰</label><br>
			 	<select id="res2" name="res2" class="inp">
			 		<option>軽快</option>
			 		<option>不変</option>
			 		<option>増悪</option>
			 	</select><br><br>

			 	<label for="hosp3">病院名</label><br>
			 	<input type="text" name="hosp3" id="hosp3" class="inp" list="hosp" placeholder="病院名" autocomplete="off">
  						<datalist id="hosp">
   								<option value="旭川荘南愛媛病院">
  								<option value="愛媛県立子ども療育センター">
  　　　　 						<option value="市立宇和島病院">
  								<option value="愛媛大学医学部付属病院">
  						</datalist><br>
			 	<label for="stm3">診療開始</label><br>
			 	<input type="month" name="stm3" id="stm3" value="" class="inp"><br>
			 	<label for="em3">診療終了</label><br>
			 	<input type="month" name="em3" id="em3" value="" class="inp"><br>
			 	<label for="adm3">入院</label><br>
				<select id="adm3" name="adm3" class="inp">
					<option>入院</option>
					<option>外来</option>
				</select><br>
				<label for="diag3">病名</label><br>
			 	<input type="text" name="diag3" id="diagname3" class="inp" list="diag" placeholder="病名" autocomplete="off">
  						<datalist id="diag">
   								<option value="自閉スペクトラム症、">
  								<option value="注意欠如多動性障害">
  　　　　 						<option value="学習障害">
  								<option value="知的障害">
  						</datalist><br>
			 	<label for="treat3">治療</label><br>
			 	<input type="text" name="treat3" id="treat3" class="inp" list="treat" placeholder="治療" autocomplete="off">
  						<datalist id="treat">
   								<option value="相談">
  								<option value="薬物療法">
  　　　　 						<option value="言語療法">
  								<option value="作業療法">
  								<option value="理学療法">
  								<option value="リハビリテーション">
  						</datalist><br>
			 	<label for="res3">転帰</label><br>
			 	<select id="res3" name="res3" class="inp">
			 		<option>軽快</option>
			 		<option>不変</option>
			 		<option>増悪</option>
			 	</select><br><br>

			 	<label for="hosp4">病院名</label><br>
			 	<input type="text" name="hosp4" id="hosp4" class="inp" list="hosp" placeholder="病院名" autocomplete="off">
  						<datalist id="hosp">
   								<option value="旭川荘南愛媛病院">
  								<option value="愛媛県立子ども療育センター">
  　　　　 						<option value="市立宇和島病院">
  								<option value="愛媛大学医学部付属病院">
  						</datalist><br>
			 	<label for="stm4">診療開始</label><br>
			 	<input type="month" name="stm4" id="stm4" value="" class="inp"><br>
			 	<label for="em4">診療終了</label><br>
			 	<input type="month" name="em4" id="em4" value="" class="inp"><br>
			 	<label for="adm4">入院</label><br>
				<select id="adm4" name="adm4" class="inp">
					<option>入院</option>
					<option>外来</option>
				</select><br>
				<label for="diag4">病名</label><br>
			 	<input type="text" name="diag4" id="diagname4" class="inp" list="diag" placeholder="病名" autocomplete="off">
  						<datalist id="diag">
   								<option value="自閉スペクトラム症、">
  								<option value="注意欠如多動性障害">
  　　　　 						<option value="学習障害">
  								<option value="知的障害">
  						</datalist><br>
			 	<label for="treat4">治療</label><br>
			 	<input type="text" name="treat4" id="treat4" class="inp" list="treat" placeholder="治療" autocomplete="off">
  						<datalist id="treat">
   								<option value="相談">
  								<option value="薬物療法">
  　　　　 						<option value="言語療法">
  								<option value="作業療法">
  								<option value="理学療法">
  								<option value="リハビリテーション">
  						</datalist><br>
			 	<label for="res4">転帰</label><br>
			 	<select id="res4" name="res4" class="inp">
			 		<option>軽快</option>
			 		<option>不変</option>
			 		<option>増悪</option>
			 	</select><br>
		</div>
	</div>

<div id="inpform3" class="inpform">
		
		<div class="wrap">

		<div>
			<label for='phis'>発育・養育歴</label><br>
			<textarea id="phis" cols="30" rows="10" name="phis" class="tarea">	
			</textarea>
			
		</div>	
		<div>
			<label for="pdata">現症日付</label><br>
			<input type="date" name="pillness" class="inp" id="pdata"><br>
			<label for="tmethod">テスト方式</label><br>
			
			<input type="text" name="iqtest" id="iqtest" class="inp" list="tmethod" placeholder="test" autocomplete="off">
			
				<datalist id="tmethod">
   					<option value="WAIS-III">
  					<option value="田中ビネー">
  					<option value="遠城寺式発達検査">
  					<option value="グッドイナフ式知能検査"> 								
  			    </datalist><br>
  			<label for="testday">判定年月日</label><br>
  			<input type="date" name="tdate" id="testday" class="inp"><br>
  			<label for="ldother">LDその他</label><br>
  			<input type="text" name="ldother" id="ldother" class="inp"><br>
  			<label for="ldother">知能その他</label><br>
  			<input type="text" name="iqother" id="iqother" class="inp"><br>
  			<label for="intass">知能面に関するコメント</label><br>
  			<textarea id="inass" name="inass" cols="30" rows="30" class="tarea"></textarea><br>
  			<label for="epiother">てんかんその他</label><br>
  			<input type="text" name="epiother" id="eipother" class="inp"><br>
  			<label for="sztype">てんかん発作のタイプ</label><br>
  			<input type="text" name="sztype" id="sztype" class="inp" list="szlist" placeholder="seizure type" autocomplete="off">
  			<datalist id="szlist">
   					<option value="焦点発作">
  					<option value="全般発作">
  					<option value="分類不能">									
  			    </datalist><br>

  			<label for="szfreq">てんかん発作の頻度</label><br>
  			<input type="text" name="szfreq" id="szfreq" class="szfreq"><br>
  			<label for="epicom">意識障害・てんかんに関するコメント</label><br>
  			<textarea id="epicom" name="epicom" cols="30" rows="30" class="tarea"></textarea><br>

		</div>
	</div>

	<div id="inpform3" class="inpform">	
		<div class="wrap">
			<label for="psother">精神症状その他</label><br>
  			<input type="text" name="psother" id="psother" class="inp"><br>
  			<label for="pscom">精神症状に関するコメント</label><br>
  			<textarea id="pscom" name="pscom" cols="30" rows="30" class="tarea"></textarea><br>
  			<label for="bother">問題行動その他</label><br>
  			<input type="text" name="bother" id="bother" class="inp"><br>
  			<label for="bcom">問題行動に関するコメント</label><br>
  			<textarea id="bcom" name="bcom" cols="30" rows="30" class="tarea"></textarea><br>
  			<label for="charcom">性格特徴</label><br>
  			<textarea id="charcom" name="charcom" cols="30" rows="20" class="tarea"></textarea><br>
  			<label for="dlife">日常生活能力の程度</label><br>
  			<input type="text" name="dlife" id="dlife" class="inp"><br>
  			<label for="tasses"></label>医学的総合判定<br>
  			<input type="text" name="tasses" id="tasses" class="inp"><br>
  			<label for="tcomment2">備考</label><br>
  			<input type="text" name="tcomment2" id="tcomment2" class="inp"><br>

  			<label for="wrday">年月日</label><br>
  			<input type="date" name="wrday" id="wrday" class="inp"><br>
  			<label for="hname">病院又は診療所の名称</label><br>
  			<input type="text" name="hname" id="hname" class="inp"><br>
  			<label for="dname">診療担当科名</label><br>
  			<input type="text" name="dname" id="dname" class="inp"><br>
  			<label for="haddr">所在地</label><br>
  			<input type="text" name="haddr" id="haddr" class="inp"><br>
  			<label for="dr">医師氏名</label><br>
  			<input type="text" name="dr" id="dr" class="inp"><br>

		</div>
		<button type="submit">入力</button>
		</form>
	</div>
	</div>	

</div>

</div>	

	
</div>
</body>
</html>
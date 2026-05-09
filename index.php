<?php
/*
session_start();
$rowMax=100;
$selCaseNumber=file_get_contents('selCaseNumber.dat');
if(file_exists('scase.dat')){
	$scase=json_decode(file_get_contents('scase.dat'),true);
}else{
	$scase=array();
}
//print_r($scase);
if(file_exists('caseArray.dat')){
	$caseArray=json_decode(file_get_contents('caseArray.dat'),true);
}else{
	$caseArray=array();
}
//print_r($caseArray);
*/
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/index.css" media="screen">
	<link rel="stylesheet" type="text/css" href="./css/print.css" media="print">
	
    <title></title>
	
	<script type="module" src="js/index.js"></script>
	


</head>
<body>

<input id="sindex" type="hidden" name="" value="<?php echo $selindex;?>">
<input id="selCaseNumber" type="hidden" name="" value="<?php echo $selCaseNumber;?>">   

<div id="stage">
	<div  id="top">

		<div id="topx1">	  	
  			 <ol>
  			 	<?php 
  			 	/*
  			 	$m=count($fpaths);
  			 	for($i=0;$i<$m;$i++){ 
  			 		$pi=pathinfo($fpaths[$i]);
  			 		$fpaths[$i]=$pi['basename'];
  			 	 ?>
  			 		<li> <?php echo $fpaths[$i]; ?> </li>
  			 	<?php
  			 	}
  			 	*/
  			 	 ?>	
		    </ol>
		</div>
	
      	<div id="topx2" >
				
				<label for="caseid">ID</label>
				<div id="disp0" class="disp">
						<input type="text" id="t0" class="inp" style="background: darkgreen;color:white" value="23337">
					    <button id="search" class="b5" type="">検索</button>			
				</div>
			  			
				
      	</div >

		<div id="topx3" >
				<button class="bbox" id="backwardBtn">入力フォーム</button>
				<button class="bbox" id="confirm">確定</button>
				<button class="bbox" id="clear">クリア</button>
				<button class="bbox" id="recover">修正</button>

	    </div>

		<div id="topx4">
   			   <button id="store" class="bbox" >保存</button>
   	    </div>

   	    <div id="topx5">
   			   <button id="printout" class="bbox" >印刷</button>
		</div>
		<form action="../top" method="post">
			<button id="" type="submit" class="bbox">to Top</button>
		</form>
		
		
	
  </div>
	
    		
     
	
	<div id="mid">
		    <div id="refList" style="width:20%;height:100%;overflow-y: scroll;border:2px solid red" >
		    	
		    </div>
			<div class="wrap" id="wrap1" style="width:80%">
				   
<!--/////////////////tokubetushougai  form front///////////////////////////////////////////////////-->				
					<div class="page" id="page1">
						<div id="bl1">
							<div id="l1"><div class="fs">様式第16号</div></div>
							<div id="l2"><div class="fs">（表　　面）</div></div>
							
							
						</div>

						<div id="main">
							<div id="y0" class="y">
								<div id="l3" class="fs2">
									特別障害者手当認定診断書（精神の障害用）
								</div>
							</div>
							<div id="y1" class="y">
								<div id="y1x1">
										<div id="l4" class="fs1">①　氏　　　名</div>
								</div>
								<div id="y1x2">
									<div id="y1x2y1" class="fs1">
									 	<div id="disp1" class="disp">
											<input type="text" name="sid" value="" id="t1" class="inp">
 									 	</div>
 									</div>
 									<div id="y1x2y2" class="fs1">
										<div id="disp2" class="disp">
											<input id="t2" class="inp" type="" name="" value="<?php if(!empty($scase['name'])){echo $scase['name'];} ?>">
										</div>
									</div>
								</div>
								<div id="y1x3" class="fs1">
									<div id="m1" class="mark">男</div>
									<div id="dot1">・</div>
									<div id="m2" class="mark">女</div>
								</div>
								<div id="y1x4" class="exp">
									<div id="l5" class="fs1">②　生年月日</div>
								</div>
								
                				<div id="y1x5" class="exp">
                					<div id="disp3" class="disp">
                						<input id=t3 class="inp" type="" name="" value="<?php if(!empty($scase['birthday'])){echo $scase['birthday'];} ?>">
                					</div>
                				</div>
							</div>
<!--------------------------------------------------------------------------------------------------------->
							<div id="y2" class="y">
								<div id="y2x1" class="fs1">
									<div id="l6" class="fs1">③　住　　　所</div>
								</div>
								<div id="y2x2">
										<div id="y2x2y1" class="" style="width:20%;font-size:9px">〒</div>
										<div id="y2x2y2" class="" style="width:80%">
											<div id="disp4" class="disp" style="width:98%;font-size:6px">
												<input  class="inp" type="text" id="t4" name="zip" ><br>
												
											</div>
										</div>
								</div>
								<div id="y2x3" class="exp" style="font-size:9px;border">
									<div id="disp5" class="disp" style="font-size:9px">
										
										<input id="t5"  class="inp" type=""  name="">
									</div>
								</div>
								<div id="y2x4" class="exp">
									<div id="dia1">
										<div id="l7" class="fs1" style="font-size:9px">
											④　障害の原因と<br>　　なった傷病名
										</div>
								    </div>
								</div>
								<div id="y2x5" class="exp">
									<div id="disp6" class="disp" style="width:90%;height:90%;font-size:9px">
										<input id="t6" class="inp" type="" name="" value="" list="disorders">
										
									</div>
								</div>
								
							</div>
<!--------------------------------------------------------------------------------------------------------->
							
							<div id="y3" class="y">
								    <div id="y3x1" class="fs1">
								    	<div id="l8" class="fs1">
								    		　　傷病発生<br>
								    		⑤<br>
								    		　　年　　月
								    	</div>
								    </div>
								    <div id="y3x2">
								        	<div id="y3x2y1" class="exp">
                             					  <div id="y3x2y1x1" class="fs1">
                             					  	<div id="l8a">
                             					  		主な精神障害
                             					  	</div>
                             					  </div>
										          <div id="y3x2y1x2">
                                					  <div id="disp7" class="disp"><input id="t7" class="inp" type="" name="" value=""></div>
                           						  </div>
									        </div>
									        <div id="y3x2y2" class="exp">
                              					  <div id="y3x2y2x1" class="fs1">
                              					  	<div id="l9">
                              					    	合併精神障害
                              					    </div>
                              					  </div>
                        					      <div id="y3x2y2x2">
                              						   <div id="disp8" class="disp"><input id="t8" class="inp" type="" name="" value="">
                              						   </div>
                          						  </div>
									       </div>
									       <div id="y3x2y3" class="exp">
                             					  <div id="y3x2y3x1" class="fs1">
                             					  	<div id="l10">
                             					  	    合併身体障害
                             					 	 </div>
                             					  </div>
                           					      <div id="y3x2y3x2">
									                   <div id="disp9" class="disp"><input id="t9" class="inp" type="" name="" value="">
									                   </div>
                             					   </div>
									       </div>
									       
								        	
								</div>
								<div id="y3x3">
								    	<div id="on3u" class="fs1">
								    		<div id="l11" class="fs1">
								    			⑥　合併症 
								    		</div>
										</div> 	
								</div>
								<div id="y3x4">
								    	<div id="y3x4y1">      	
                                  			<div id="y3x4y1x1" class="fs1">
                                  				<div id="l12" class="fs1">
                                  					精神障害
                                  				</div>
                                  		   </div>
                                  		   <div id="y3x4y1x2">
                                  		   		<div id="disp10" class="disp">
                                  		   			<input id="t10" class="inp" type="" name="" value="">
                                  		   		</div>
                                  		   </div>
										</div>
										<div id="y3x4y2" class="exp">
                                  			<div id="y3x4y2x1" class="fs1">
                                  				<div id="l12b" class="fs1">
                                 			 		身体障害
                                 				 </div>
                              				</div>
                              　  			<div id="y3x4y2x2">
                              					<div id="disp11" class="disp">
                              					<input id="t11" class="inp" type="" name="" value="">
                              					</div>
                              				</div>
                           				 </div>
								</div>
					</div>
									    

					<div id="y4" class="y">
						<div id="y4x1" class="y">
							
							<div id="l13" class="fs1">
								⑦　④のため初めて医師<br>
								　　の診断を受けた日
							</div>
						</div>
						<div id="y4x2" class="y">
							<div id="disp12" class="disp">
								<input id="t12" type="" name="" class="inp">
							</div>
						</div>
						<div id="y4x3" class="y">
							<div id="l14" class="fs1">
									⑧　将来再判定の要
							</div>
						</div>
						<div id="y4x4" class="y">
							<div id="m3" class="mark">
								有
							</div>
						</div>
						<div id="y4x5" class="fs">
							<div id="m3a" class="fs1">
							（
							</div>
						</div>
						<div id="y4x6" class="y">
							<div id="disp13" class="disp">
									<input id="t13" type="text" name="" class="inp">
						　　</div>
						</div>
						<div id="y4x7" class="y">
							<div id="dot2" class="fs1">
								年後）・
							</div>
						</div>
						<div id="y4x8" class="y">
							<div id="m4" class="mark">
								無
							</div>
						</div>
						
									    
         			</div>
					
<!--------------------------------------------------------------------------------------------------------->
					<div id="y5" class="y">
						
								<div id="y5x1" class="yx">
									
									   <div id="y5x1y1" class="fs1">
									   		<div id="l15" class="fs1">
									  		 	⑨　現病歴（陳述者より聴取）<br> 
									 	    </div>
									   </div>
									   <div id="y5x1y2" class="fs1">
									   		<div id="l16" class="fs1">
									   			　　ア　発病以来の病状と経過
									   		</div>
									   </div>
								    	<div id="y5x1y3" class="exp" >	
								    			<div id="disp14" class="disp" > 
								    				<textarea cols="20" rows="6" id="t14" class="inp" type="" name="" value=""></textarea>
								    			</div>
								    	</div>
								</div> <!--y5x1----------------------->
								<div id="y5x2" class="yxe">
										<div id="y5x2y1" class="y">
					
										    <div id="y5x2y1x1" class="fs1">
										  	    <div id="l17" class="fs1">
										    		陳述者の<br>氏　　名
												</div>
											</div>
										    <div id="y5x2y1x2" class=""   >
										    	<div id="disp15" class="disp">
										    		<input id="t15" class="inp" type="" name="" value="">
										    	</div>
										    </div>
										    <div id="y5x2y1x3" class="fs1">
										    	 <div id="l18" class="fs1">
										    		患者との<br>続　　柄
										    	  </div>
											</div>
										    <div id="y5x2y1x4" class="" >
										    	<div id="disp16" class="disp">
										    		<input id="t16" class="inp" style="width:95%;height:95%" value="">
										    	</div>
										    </div>
										</div>	<!--y5x2y1----------------------->

										<div id="treatmentHist" class="">
											<?php
												include_once('treatmentHist.html');
											?>
									    
         				       		    </div><!--treatmentHist----------------------->
								</div><!--y5x2----------------------->
         			</div><!--y5----------------------->
<!--------------------------------------------------------------------------------------------------------->
					<div id="y6" class="y">
							   <div id="y6x1" class="fs1">
							   			 
								    	<div id="l19" class="fs">
								    	⑩　これまでの発育・養<br>　　育歴等(出生から発<br>
								    	　　育の状況や教育歴を<br>　　陳述者より聴取の<br>
								    	　　上、できるだけ詳しく<br>　　記入してください。)
								   		 </div>
							   </div>
							   <div id="y6x2">
								    	<div id="phis2u" class="fs">
								    		<div id="l20" class="fs">
								    			ア　発育・教育歴
								    		</div>
								    	</div>
								    	<div id="phis2l" class="exp"><div id="disp41" class="disp"><textarea cols="23" rows="6" id="t41" class="inp" type="" name="" value=""></textarea></div></div>
							   </div>
							   <div id="y6x3">
								      	<div id="y6x3y1" class="fs">
										    イ　教育歴
									    </div>
									     <div id="y6x3y2" class="fs">
										    	　　乳児期
									     </div>

									     <div id="y6x3y3" class="">
										        <div id="phis331" class="fs">
										     		   <div id="m13" class="mark">
												        	　　不就学　・　
												        </div>
										        </div>
										        <div id="phis332" class="" >
												        <div id="m14" class="mark">
												        	就学猶予
												        </div>
										        </div>
									     </div>

									     <div id="y6x3y4" class="">
										        <div id="" class="" style="font-size:9px">
									   	        	      　　小学校（
									         	</div>
										        <div id="y6x3y4x2" class="">
										            	<div id="m15" class="mark">
										        	       	普通学級&nbsp・　
										        	    </div>
									        	</div>
										        <div id="y6x3y4x3" class="">
										      	   <div id="m16" class="mark">
											              	特別支援学級&nbsp・　
										      	   </div>
										        </div>
									        	<div id="y6x3y4x4" class="">
									           		<div id="m17" class="mark">
										              		特別支援学校&nbsp）
									           		</div>
									        	</div>
									  	 </div>

									     <div id="y6x3y5" class="">
										       <div id="y6x3y5x1" class="fssm" style="font-size:9px">
												        　　中学校（
										       </div>
										       <div id="y6x3y5x2" class="">
										           	<div id="m18" class="mark">
												        普通学級&nbsp・　
											         </div>
									       	   </div>
										       <div id="y6x3y5x3" class="">
									           		<div id="m19" class="mark">
												        特別支援学級&nbsp・　
											          </div>
										       </div>
										       <div id="y6x3y5x4" class="">
										        	<div id="m20" class="mark">
													    特別支援学校&nbsp）
											       </div>
										      </div>
									     </div>

									     <div id="y6x3y6" class="">
											   <div id="y6x3y6x1" class="fssm" style="font-size:9px" >
											       		　　高校（
										  	  </div>
											  <div id="y6x3y6x2" class="">
												    <div id="m21" class="mark">
												    普通学級&nbsp・　
												　　</div>
                                               </div>
												<div id="y6x3y6x3" class="">
													  <div id="m22" class="mark">	
														特別支援学校&nbsp・)　
												  	</div>
												</div>
									    </div>

									    <div id="y6x3y7" class="">
										    	<div id="phis371" class="fssm">
											       	<div id="m23" class="mark">
											           	　　その他
											       	</div>
											   </div>
										    	
								        </div>
						  </div><!--y6x3---->
						</div> <!--y6---->
<!--------------------------------------------------------------------------------------------------------->
						<div id="y7" class="exp">
							<div id="y7x1" class="fs1">
							障害の状態(
							</div>
							<div id="y7x2" class="fs1">
								<div id="disp42" class="disp">
									<input id="t42" class="inp" type="" name="" value="">
								</div>
							</div>
							<div id="y7x3" class="fs1">
							 現症）
							</div>
						</div>
<!--------------------------------------------------------------------------------------------------------->
						<div id="y8" class="">
							<div id="y8x1"　class="fs1">
									<span class="gensyou">　　　　　　　　　　　　　　　　現　　　　　　　　　　症</span>
							</div>
<!--------------------------------------------------------------------------------------------------------->
							<div id="y8x2">
			<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
								<div id="y8x2y1">
									<div id="y8x2y1x1" class="" > 
										<div id="l21" class="fs">現在の病状または状態像</div>
									</div>
									<div id="y8x2y1x2" class="">	
										<div id="l22" class="fs0">左記の状態について、その程度・症状・処方薬等を具体的に記入してください。</div>
									</div>
								</div>
			<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
								<div id="y8x2y2">
								    	<div id="y8x2y2x1" class="fs">
								        	 &nbsp⑪　知　能　障　害　等
								    	</div>
								    	<div id="y8x2y2x2">
									       	<div id="y8x2y2x2y1" class="">
										    	<div id="m24" class="mark">
											   		　1 知的障害
										    	</div>
										      </div>

									        <div id="y8x2y2x2y2" class="">
											       <div id="y8x2y2x2y2x1" class="fs">
												        	　　知能指数又は発達指数(
											       </div>
										          <div id="y8x2y2x2y2x2" class="">
											               <div id="m25" class="mark">IQ・</div>
											        </div>
										          <div id="y8x2y2x2y2x3" class="">
											               	<div id="m26" class="mark">DQ</div>
											        </div>
										          <div id="y8x2y2x2y2x4" class="exp">
                                     				 <div id="disp43" class="disp"><input id="t43" class="inp" type="" name="" value=""></div>         
                            					　</div>
                            					<div id="y8x2y2x2y2x5" class="fs">
                            						)
                            					</div>
								
										     </div>

										     <div id="y8x2y2x2y3" class="">
											        	<div id="y8x2y2x2y3x1" class="fs">
													       	　　テスト方式(
												        </div>
												        <div id="y8x2y2x2y3x2" class="fssm">
                                    						  <div id="disp44" class="disp">
                                    						  	<input id="t44" class="inp" type="tid50" name="" value="" list="tests">
                                    						  		
															</div>
												        </div>
												        <div id="y8x2y2x2y3x3" class="fs">
												        	)
												        </div>
												        <div id="y8x2y2x2y3x4" class="">
												                	<div id="m27" class="mark">
													           	       	テスト不能
													               </div>
											           </div>
										     </div>

										    <div id="y8x2y2x2y4" class="">
											      	<div id="y8x2y2x2y4x1" class="fs">
												        		　　判定(
											       	</div>
												      <div id="y8x2y2x2y4x2" class="">
												          	<div id="m28" class="mark">
													           		最重度,
												          	</div>
											       	</div>
												      <div id="y8x2y2x2y4x3" class="">
												          	<div id="m29" class="mark">
														          	重度,
												          	</div>
												      </div>
											       	<div id="y8x2y2x2y4x4" class="">
													         <div id="m30" class="mark">
													           		中度,
												        	</div>
											      	</div>
											       	<div id="y8x2y2x2y4x5" class="">
													         <div id="m31" class="mark">
													             軽度
												            </div>
												     </div>
												     <div id="y8x2y2x2y4x6" class="fs">
												     	)
												     </div>
										    </div>

										    <div id="y8x2y2x2y5" class="">
												        <div id="y8x2y2x2y5x1" class="fs">
													           	　　判定年月日(
												        </div>
												        <div id="y8x2y2x2y5x2" class="exp">	
                                     						 <div id="disp45" class="disp"><input id="t45" class="inp" type="" name="date" value=""></div>
											         	</div>
											         	<div id="y8x2y2x2y5x2" class="fs">
											         		)
											         	</div>
										    </div>

								    		<div id="y8x2y2x2y6" class="">
											       	<div id="y8x2y2x2y6x1" class="">
												        	<div id="p222611" class="fs">
													       		　　2 高次脳機能障害
													       </div> 
															
												      </div>
											       	<div id="y8x2y2x2y6x2" class="">
													       	<div id="m32" class="mark">
													           		ア 失行
													       	</div>
														　
												      </div>
											       	<div id="y8x2y2x2y6x3" class="">
													       	<div id="m33" class="mark">
														        	イ 失認
														      </div>
													　	
												      </div>
									   	</div>


									  	<div id="y8x2y2x2y7" class="">
												    <div id="y8x2y2x2y7x1" class="">
												        	<div id="m34" class="mark">
													       		ウ 記憶障害
													       </div>
													　	
													 </div>
												   <div id="y8x2y2x2y7x2" class="">
													    <div id="m35" class="mark">
														    	エ 注意障害
													    </div>
													　
												  </div>
										</div>

										<div id="y8x2y2x2y8" class="">
											   	<div id="y8x2y2x2y8x1" class="">
												    	<div id="m36" class="mark">
													   		オ 遂行機能障害
												    	</div>
													　 
											   	</div>
											   	<div id="y8x2y2x2y8x2" class="">
												    	<div id="m37" class="mark">
														    	ヵ 社会的行動障害
													   </div>
											　				
													</div>
										</div>

										<div id="y8x2y2x2y9" class="fs">
												    <div id="y8x2y2x2y9x1" class="">
												    	<div id="m38" class="mark">
													   		　　3 学習障害
													   </div>
														
												    </div>
												<div id="y8x2y2x2y9x2" class="">
													   <div id="m39" class="mark">
													   		ア 読み
													   </div>
														　
												</div>
												<div id="y8x2y2x2y9x3" class="">
												    	<div id="m40" class="mark">
														    	イ 書き
													   </div>
											　				
												</div>
												<div id="y8x2y2x2y9x4" class="">
												    	<div id="m41" class="mark">
														    	ウ 算数
													   </div>
											　				
												</div>
							
										</div>

										<div id="y8x2y2x2y10" class="fs">
												    <div id="y8x2y2x2y10x1" class="exp">
                                    					 <div id="m42" class="mark">
                                    						 エ その他( 
                                    					</div>
                                    				</div>
                                  					<div id="y8x2y2x2y10x2">
                                  						<div id="disp46" class="disp">
                                  							<input id="t46" class="inp" type="" name="" value="">
                                  						</div>
                                  					</div>
                                  					<div id="y8x2y2x2y10x3">
                                  						)
                                  					</div>
													       		
													
										</div>

										<div id="y8x2y2x2y11" class="">
											   	
											   	<div id="y8x2y2x2y11x1" class="exp">
                               					 		<div id="m43" class="mark" >
                               					 			　　4　その他(
                               					 		</div>
                               					 </div>
                               					 <div id="y8x2y2x2y11x2">
                               						    	<div id="disp47" class="disp">
                               						    		<input id="t47" class="inp" type="" name="" value="">
                               						    	</div>
                               					 </div>
                               					 <div id="y8x2y2x2y11x3" class="fs">
                               						   )
                               					 </div>
                         					    
										</div>
							   

								</div>
					<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
								<div id="y8x2y2x3" class="exp">
										<div id="disp48" class="disp"><textarea cols="20" rows="8" id="t48" class="inp" type="" name="" value=""></textarea></div>

								</div>
							</div>
							<div id="y8x2y3">
								<div id="y8x2y3x1" class="fs1">
									&nbsp⑫　発達障害関連症状
								</div>
								<div id="y8x2y3x2">
									<div id="y8x2y3x2y1" class="">
										<div id="m44" class="mark">
												　1 相互的な社会関係の質的異常 
										</div>
												
									</div>
									<div id="y8x2y3x2y2" class="">
										<div id="m45" class="mark">
										　2 言語コミュニケーションの障害 
										</div>
											
									</div>
									<div id="y8x2y3x2y3" class="">
										<div id="m46" class="mark">
												　3 限定した常同的で反復的な関心と行動 
										</div> 
											
									</div>
									<div id="y8x2y3x2y4" class="">
											<div id="y8x2y3x2y1x1" class="fs">
                           						  <div id="m47" class="mark">
                           							  　4  その他(
                           						  </div>
                           					</div>
                         				    <div id="y8x2y3x2y1x2">
                         						  		<div id="disp49" class="disp">
                         						  			<input id="t49" class="inp" type="" name="" value="">
                         						  		</div>
                         					</div>

                        					<div id="y8x2y3x2y1x3" class="fs">
                        						)
                        					</div>
											
									
									</div>
							</div>	
							<div id="y8x2y3x3" class="">
							    		   	<div id="disp50" class="disp">
							    		   		<textarea cols="20" rows="8" id="t50" class="inp" type="" name="" value=""></textarea>
							    		   	</div>
							</div>
						</div>
		    <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
						<div id="y8x2y4">
								<div id="y8x2y4x1" class="fs">&nbsp⑬　意　識　障　害・<br>　　て　ん　か　ん</div>
								<div id="y8x2y4x2">
									<div id="y8x2y4x2y1" class="">
										<div id="y8x2y4x2y1x1" class="">
											<div id="m48" class="mark">
													　1 意識混濁
											</div>
										 		
										</div>
										<div id="y8x2y4x2y1x2" class="">
											<div id="m49" class="mark">
													2 （夜間）せん妄
											</div>	
										</div>
									</div>
									<div id="y8x2y4x2y2" class="">
										<div id="y8x2y4x2y2x1" class="fs">
											<div id="m50" class="mark">
													　3 もうろう
											</div>	 
										</div>
										<div id="y8x2y4x2y2x2" class="fs">
											<div id="m51" class="mark">
												4 錯乱
											</div>		 
										</div>
										<div id="y8x2y4x2y2x3" class="">
											<div id="m52" class="mark">
													5 てんかん発作
											</div>	 
										</div>
									</div>
									<div id="y8x2y4x2y3" class="">
											<div id="y8x2y4x2y3x1" class="fs">
												<div id="m53" class="mark">　6 不機嫌症
												</div> 
											</div>
											<div id="y8x2y4x2y3x2" class="fs">
                           						 <div id="m54" class="mark">7 その他( 
                          					 	
                          					 	 </div> 
                           						 
                   							 </div>
                      
											<div id="y8x2y4x2y3x3" class="fs">

                          					 	 	<div id="disp51" class="disp">
                          					 	 		<input id="t51" class="inp" type="" name="" value=""	>
                          					 	 	</div>
												
											</div>
											<div class="fs">)</div>
									</div>
									<div id="y8x2y4x2y4" class="">
                         				 <div id="y8x2y4x2y4x1" class="fs">　・てんかん発作のタイプ( </div>
                         				 <div id="y8x2y4x2y4x2"><div id="disp52" class="disp"><input id="t52" class="inp" type="" name="" value=""></div></div>
                         				 <div id="y8x2y4x2y4x3" class="fs">)</div>
									</div>
									<div id="y8x2y4x2y5" class="">
										<div id="y8x2y4x2y5x1" class="fs">
											　・てんかん発作の頻度
										</div>
										<div id="y8x2y4x2y5x2" class="fs">
											<div id="m55" class="mark">
											（(年間・
											</div>
										</div>
										<div id="y8x2y4x2y5x3" class="fs">
											<div id="m56" class="fs">・月・</div>
										</div>
										<div id="y8x2y4x2y5x4" class="">
											<div id="m57" class="fs">・週）</div>
										</div>
										<div id="y8x2y4x2y5x5" class="">
											<div id="disp53" class="disp"><input id="t53" class="inp" type="" name="" value=""></div>
										</div>
										
										<div id="y8x2y4x2y5x6" class="exp">
											
											<div id="szfr" class="fs">回程度</div>
                     						
										</div>
										<div class="fs">)</div>
									</div>
								</div>
								<div id="y8x2y4x3" class="exp">
									<div id="disp54" class="disp"><textarea cols="20" rows="8" id="t54" class="inp" type="" name="" value=""></textarea></div>
								</div>
						</div>
		<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
						<div id="y8x2y5">
								<div id="y8x2y5x1" class="fs">&nbsp⑭　精　神　症　状</div>
								<div id="y8x2y5x2">
									<div id="y8x2y5x2y1">
										<div id="y8x2y5x2y1x1" class=""><div id="m58" class="mark">1 幻覚</div>  </div>
										<div id="y8x2y5x2y1x2" class=""><div id="m59" class="mark">2 妄想</div>  </div>
										<div id="y8x2y5x2y1x3" class=""><div id="m60" class="mark">3 自閉</div>  </div>
										<div id="y8x2y5x2y1x4" class=""><div id="m61" class="mark">4 無為</div>  </div>
										<div id="y8x2y5x2y1x5" class=""><div id="m62" class="mark">5 感情の平板化</div>  </div>
										<div id="y8x2y5x2y1x6" class=""><div id="m63" class="mark">6 不安</div>  </div>
									</div>
									<div id="y8x2y5x2y2">
										<div id="y8x2y5x2y2x1"class=""><div id="m64" class="mark">7 恐怖</div>  </div>
										<div id="y8x2y5x2y2x2"class=""><div id="m65" class="mark">8 強迫行為</div>  </div>
										<div id="y8x2y5x2y2x3"class=""><div id="m66" class="mark">9 思考障害</div>  </div>
										<div id="y8x2y5x2y2x4"class=""><div id="m67" class="mark">10 心気症</div>  </div>
										<div id="y8x2y5x2y2x5"class=""><div id="m68" class="mark">11 中毒嗜癖</div>  </div>
									</div>
									<div id="y8x2y5x2y3">
										<div id="y8x2y5x2y3x1"class=""><div id="m69" class="mark">12 うつ状態</div>  </div>
										<div id="y8x2y5x2y3x2"class=""><div id="m70" class="mark">13 そう状態</div>  </div>
										<div id="y8x2y5x2y3x3"class="">
                          						<div id="m71" class="fs">
                          							14 その他(
                          						</div>
                          				</div>
                         				<div id="y8x2y5x2y3x4">
                         				 		<div id="disp55" class="disp">
                         				 			<input id="t55" class="inp" type="" name="" value="">
                         				 		</div>
                         				 </div>
                         			
                         				<div class="y8x2y5x2y3x5" class="fs">
                         					<div id="" class="fs">)</div>
                         				</div> 
									</div>
								 
               					</div><!--y8x2y5x2-->
								<div id="y8x2y5x3" class="exp">
									<div id="disp56" class="disp">
										<textarea cols="20" rows="8" id="t56" class="inp" type="" name="" value=""></textarea>
									</div>
								</div>
						</div><!--y8x2y5-->
		<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
						<div id="y8x2y6">
								<div id="y8x2y6x1" class="fs">&nbsp⑮　問　題　行　動<br>　　及　び　習　癖</div>
								<div id="y8x2y6x2">
									<div id="y8x2y6x2y1" class="fs">
										<div id="y8x2y6x2y1x1" class=""><div id="m72" class="mark">1 興奮</div></div>
										<div id="y8x2y6x2y1x2" class=""><div id="m73" class="mark">2 暴行</div></div>
										<div id="y8x2y6x2y1x3" class=""><div id="m74" class="mark">3 多動</div></div>
										<div id="y8x2y6x2y1x4" class=""><div id="m75" class="mark">4 拒絶</div></div>
										<div id="y8x2y6x2y1x5" class=""><div id="m76" class="mark">5 自殺企図</div></div>
										<div id="y8x2y6x2y1x6" class=""><div id="m77" class="mark">6 自傷</div></div>
									</div>
									<div id="y8x2y6x2y2" class="fs">
										<div id="y8x2y6x2y2x1" class=""><div id="m78" class="mark">7 破衣</div> </div>
										<div id="y8x2y6x2y2x2" class=""><div id="m79" class="mark">8 不潔</div> </div>
										<div id="y8x2y6x2y2x3" class=""><div id="m80" class="mark">9 放火・弄火</div></div>
										<div id="y8x2y6x2y2x4" class=""><div id="m81" class="mark">10 器物破壊</div> </div>
										<div id="y8x2y6x2y2x5" class=""><div id="m82" class="mark">11 徘徊・浮浪</div> </div>
									</div>
									<div id="y8x2y6x2y3" class="fs">
										<div id="y8x2y6x2y3x1" class=""><div id="m83" class="mark">12 盗み</div> </div>
										<div id="y8x2y6x2y3x2" class=""><div id="m84" class="mark">13 性的逸脱行為</div> </div>
									</div>
									<div id="y8x2y6x2y4" class="fs">
										<div id="y8x2y6x2y4x1" class=""><div id="m85" class="mark">14 排泄の問題</div> </div>
										<div id="y8x2y6x2y4x2" class=""><div id="m86" class="mark">（尿失禁、</div></div>
										<div id="y8x2y6x2y4x3" class=""><div id="m87" class="mark">便失禁、</div></div>
										<div id="y8x2y6x2y4x4" class=""><div id="m88" class="mark">便こね、</div></div>
										<div id="y8x2y6x2y4x5" class=""><div id="m89" class="mark">その他</div></div>
										<div id="y8x2y6x2y4x6" class="">)</div>
									</div>
									<div id="y8x2y6x2y5" class="fs">
										<div id="y8x2y6x2y5x1" class=""><div id="m90" class="mark">15 食事の問題(</div></div> 
										<div id="y8x2y6x2y5x2" class=""><div id="m91" class="mark">拒食,</div></div>
										<div id="y8x2y6x2y5x3" class=""><div id="m92" class="mark">異食,</div></div>
										<div id="y8x2y6x2y5x4" class=""><div id="m93" class="mark">大食,</div></div>
										<div id="y8x2y6x2y5x5" class=""><div id="m94" class="mark">小食,</div></div>
										<div id="y8x2y6x2y5x6" class=""><div id="m95" class="mark">偏食,</div></div>
										<div id="y8x2y6x2y5x7" class=""><div id="m96" class="mark">その他)</div></div>
										
									</div>
									<div id="y8x2y6x2y6" class="">
											<div id="y8x2y6x2y6x1" class="">
                        						<div id="m97" class="mark">
                        							16 その他(
                        						</div>
                        					</div>
                       						<div id="y8x2y6x2y6x2">
                       							<div id="disp57" class="disp">
                       								<input id="t57" class="inp" type="" name="" value="">
                       							</div>
                       						</div>
										    <div id="y8x2y6x2y6x3"  class="fs" >
										    		)
										    </div>
									</div>
								</div>
								<div id="y8x2y6x3" class="exp">
									<div id="disp58" class="disp"><textarea cols="20" rows="8" id="t58" class="inp" type="" name="" value=""></textarea>64</div>
								</div>
							</div>
		<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
							<div id="y8x2y7">
								<div id="y8x2y7x1" class="fs">&nbsp⑯性　格　特　徴</div>
								<div id="y8x2y7x2" class="exp">
									<div id="disp59" class="disp"><input id="t59" class="inp" type="" name="" value=""></div>
								</div>
		<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->				
							</div>
						</div>
					</div>
	   			</div>
			</div>
<!--/////////////////tokuji form back///////////////////////////////////////////////////-->
<div id="page2" class="page">
	　　　　　　　　　　　　　　　　　　　　　　(裏面)
	<div id="main2">
<!------------------------------------------------------------------------------------------------->
		<div id="y9">
			
			<div id="y9x1" 　><span class="gensyou">　　　　　現　　　　　　症</span></div>
			
			<div id="y9x2">
				<div id="y9x2y1" class="fs1">
						<div id="L">
								&nbsp⑬　日常生活<br>　　能力の程度<br><br><br><br>
							<span class="fs0">（かならず記入してください）</span>
						</div>
				</div>
				<div id="y9x2y2" class="fs">
					<div id="L" class="fs">
						⑱　要注意度
					</div>
				</div>
				
			</div>

			<div id="y9x3">

				<div id="y9x3y1">
					<div id="y9x3y1y1" class="fs">
						<div id="y9x3y1y1x1" class="fs">&nbsp1　食事</div>
						<div id="y9x3y1y1x2" class="fs">（</div>
						<div id="y9x3y1y1x3" class="fs"><div id="m98" class="mark">・ひとりでできる</div></div>
						<div id="y9x3y1y1x4" class="fs"><div id="m99" class="mark">・介助があればできる</div></div>
						<div id="y9x3y1y1x5" class="fs"><div id="m100" class="mark">・できない</div></div>
						<div id="y9x3y1y1x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y2" class="fs">
						<div id="y9x3y1y2x1" class="fs">&nbsp2　排便（月経）の始末</div>
						<div id="y9x3y1y2x2" class="fs">（</div>
						<div id="y9x3y1y2x3" class="fs"><div id="m101" class="mark">・ひとりでできる</div></div>
						<div id="y9x3y1y2x4" class="fs"><div id="m102" class="mark">・介助があればできる</div></div>
						<div id="y9x3y1y2x5" class="fs"><div id="m103" class="mark">・できない</div></div>
						<div id="y9x3y1y2x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y3" class="fs">
						<div id="y9x3y1y3x1" class="fs">&nbsp3　衣服の着脱</div>
						<div id="y9x3y1y3x2" class="fs">（</div>
						<div id="y9x3y1y3x3" class="fs"><div id="m104" class="mark">・ひとりでできる</div></div>
						<div id="y9x3y1y3x4" class="fs"><div id="m105" class="mark">・介助があればできる</div></div>
						<div id="y9x3y1y3x5" class="fs"><div id="m106" class="mark">・できない</div></div>
						<div id="y9x3y1y3x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y4" class="fs">
						<div id="y9x3y1y4x1" class="fs">&nbsp4　簡単な買い物</div>
						<div id="y9x3y1y4x2" class="fs">（</div>
						<div id="y9x3y1y4x3" class="fs"><div id="m107" class="mark">・ひとりでできる</div></div>
						<div id="y9x3y1y4x4" class="fs"><div id="m108" class="mark">・介助があればできる</div></div>
						<div id="y9x3y1y4x5" class="fs"><div id="m109" class="mark">・できない</div></div>
						<div id="y9x3y1y4x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y5" class="fs">
						<div id="y9x3y1y5x1" class="fs">&nbsp5　家族との会話</div>
						<div id="y9x3y1y5x2" class="fs">（</div>
						<div id="y9x3y1y5x3" class="fs"><div id="m110" class="mark">・通じる</div></div>
						<div id="y9x3y1y5x4" class="fs"><div id="m111" class="mark">・少しは通じる</div></div>
						<div id="y9x3y1y5x5" class="fs"><div id="m112" class="mark">・通じない</div></div>
						<div id="y9x3y1y5x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y6" class="fs">
						<div id="y9x3y1y6x1" class="fs">&nbsp6　家族以外の者との会話</div>
						<div id="y9x3y1y6x2" class="fs">（</div>
						<div id="y9x3y1y6x3" class="fs"><div id="m113" class="mark">・通じる</div></div>
						<div id="y9x3y1y6x4" class="fs"><div id="m114" class="mark">・少しは通じる</div></div>
						<div id="y9x3y1y6x5" class="fs"><div id="m115" class="mark">・通じない</div></div>
						<div id="y9x3y1y6x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y7" class="fs">
						<div id="y9x3y1y7x1" class="fs">&nbsp7　刃物・火の危険</div>
						<div id="y9x3y1y7x2" class="fs">（</div>
						<div id="y9x3y1y7x3" class="fs"><div id="m116" class="mark">・わかる</div></div>
						<div id="y9x3y1y7x4" class="fs"><div id="m117" class="mark">・少しはわかる</div></div>
						<div id="y9x3y1y7x5" class="fs"><div id="m118" class="mark">・わからない</div></div>
						<div id="y9x3y1y7x6" class="fs">）</div>
					</div>
					<div id="y9x3y1y8" class="fs">
						<div id="y9x3y1y8x1" class="fs">&nbsp8　屋外での危険（交通事故）<br>から身を守る</div>
						<div id="y9x3y1y8x2" class="fs">（</div>
						<div id="y9x3y1y8x3" class="fs"><div id="m119" class="mark">・守ることが出来る</div></div>
						<div id="y9x3y1y8x4" class="fs"><div id="m120" class="mark">・不十分ながら守る<br>ことができる</div></div>
						<div id="y9x3y1y8x5" class="fs"><div id="m121" class="mark">・まもることが<br>できない</div></div>
						<div id="y9x3y1y8x6" class="fs">）</div>
					</div>
				</div>

				<div id="y9x3y2">
						<div id="p2822u" class=fs>上記の状態を具体的に記載してください。</div>
				</div>				
				<div id="y9x3y3">
					<div id="disp60" class="disp">
						<textarea cols="40" rows="3" id="t60" class="inp" type="" name="" value=""></textarea>
					</div>
				</div>
					
				<div id="y9x3y4">
					
					<div id="y9x3y4x1">
						<div id="m122" class="mark">1.常に厳密な注意を必要とする　</div>
					</div>
					<div id="y9x3y4x2">
						<div id="m123" class="mark">2.随時一応の注意を必要とする。 </div>
					</div>
					<div id="y9x3y4x3">
						<div id="m124" class="mark">3.ほとんど必要ない</div>
					</div>
				</div>		
			

			</div>
		</div>
	


		<div id="y10">
			<div id="y10x1" class="">
				<div id="L" class="fs" >
					&nbsp⑲　備考
				</div>
			</div>
			<div id="y10x2" class="fs">
				<div id="disp61" class="disp">
					<textarea cols="40" rows="3" id="t61" class="inp" type="" name="" value="">
						
					</textarea>
				</div>
			</div>
		</div>

		<div id="y11">
			
			<div id="y11y1" class="fs">*上記の通り診断します。</div>
			<div id="y11y2">
				<div id="disp62" class="disp">
					<input id="t62" class="inp" type="" name="" value="">
				</div>
			</div>

			<div id="y11y3">
				<div id="y11y3x1">
					<div id="L" class="fs">
						　　　病院又は診療所の名称
					</div>
				</div>
				<div id="y11y3x2">
					<div id="disp63" class="disp"><input id="t63" class="inp" type="" name="" value="" list="hlist">
						
					
					</div>
				</div>
			</div>
			<div id="y11y4">
				<div id="y11y4x1">
					<div id="L" class="fs">　　　　　　　　所　在　地</div>
				</div>
				<div id="y11y4x2">
					<div id="disp64" class="disp">
							<input id="t64" class="inp" type="" name="" value="" list="adr" >
							
					</div>	
				</div>
			</div>
			<div id="y11y5">
				<div id="y11y5x1">
					<div id="L" class="fs">　　　　　　　　診療担当科名</div>
				</div>
				<div id="y11y5x2">
					<div id="disp65" class="disp">
						<input id="t65" class="inp" type="" name="" value="" list="deps">
						 	
					</div>
				</div>
				<div id="y11y5x3">
					<div id="y153" class="fs">医　師　氏　名</div>
				</div>
				<div id="y11y5x4">
					<div id="disp66" class="disp">
						<input id="t66" class="inp" type="" name="">	
					</div>	
				</div>
				<div id="y11y5x5" class="fs">印</div>

			</div>
		</div>

	</div>

 </div>

</div>



</body>
</html>
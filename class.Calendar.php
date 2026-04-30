<?php
class Calendar
{
   protected $calNum;
   protected $y;
   protected $m;
   public function calFrame()
   {
      
      
      $w=array('日','月','火','水','木','金','土');
   	echo '<div id="cal" class="" style="width:100%;height:100%;background:darkblue" >';
   	  echo '<div id="nengoList" class="" style="width:100%;height:20%;display:flex;border-bottom:1px solid white">';
   	     echo '<div id="w" class="nengo" style="width:24%;height:95%;border:1px solid white;margin-left:2px;font-size:14px">西暦</div>';
   	     echo '<div id="s" class="nengo" style="width:24%;height:95%;border:1px solid white;margin-left:2px;font-size:14px">昭和</div>';
   	     echo '<div id="h" class="nengo" style="width:24%;height:95%;border:1px solid white;margin-left:2px;font-size:14px">平成</div>';
   	     echo '<div id="r" class="nengo" style="width:24%;height:95%;border:1px solid white;margin-left:2px;font-size:14px">令和</div>';
   	  echo '</div>';
   	  echo '<div id="" class="" style="width:100%;height:80%;display:flex">';
   	     echo '<div id="yBox" class="" style="width:24%;height:100%;border-right:1px solid white">';
             echo '<div id="" class="" style="width:100%;height:15%;border-bottom:1px solid white;font-size:14px">';
               echo '年';
             echo '</div>';
             
             echo '<div id="seireki" class="seireki" style="width:100%;height:80%;border-bottom:1px solid white;overflow-y:auto" >';
             for($i=0;$i<200;$i++)
             {
                      echo '<div id="sY'.$i.'" class="sYear" style="width:100%;height:30px;border-bottom:1px solid yellow;font-size:15px">';
                          echo (1920+$i);
                      echo '</div>' ;
             }
             echo '</div>';
             
             echo '<div id="wareki" class="wareki" style="width:100%;height:80%;border-bottom:1px solid white;overflow-y:auto">';
             for($j=0;$j<100;$j++)
             {
                      echo '<div id="wY'.$j.'" class="wYear" style="width:100%;height:25px;border-bottom:1px solid yellow;font-size:15px">';
                          echo $j;
                      echo '</div>' ;
             }
             echo '</div>';
         echo '</div>';

         echo '<div id="mBox" class="" style="width:24%;height:100%;border-right:1px solid white;">';
              echo '<div id="" class="" style="width:100%;height:15%;border-bottom:1px solid white;font-size:14px">';
                echo '月';
              echo '</div>';
              echo '<div id="" class="" style="width:100%;height:85%;border-bottom:1px solid white;">';
               for($i=0;$i<4;$i++)
               {
                   echo '<div id="" class="" style="width:100%;height:15%;display:flex">';
                       for($j=0;$j<3;$j++)
                       {
                           echo '<div id="m'.($i*3+$j+1).'" class="month" style="width:33%;height:100%;border:1px solid yellow;font-size:14px">';
                               echo ($i*3+$j+1);
                          echo '</div>' ;

                       }
                   echo '</div>';
                      
               }
              echo '</div>';

         echo '</div>';
         

   	     echo '<div id="dBox" class="" style="width:52%;height:100%;display:">';
               echo '<div id="" class="" style="width:100%;height:14%;display:flex;border-bottom:1px solid white">';
                   for($i=0;$i<7;$i++)
                   {
                      echo '<div id="" class="" style="width:14%;height:100%;border-right:1px solid white;font-size:14px">';
                          echo $w[$i];
                      echo '</div>' ;
                   }
                 echo '</div>';
              for($i=0;$i<6;$i++)
              {
                 echo '<div id="" class="" style="width:100%;height:14%;display:flex;border-bottom:1px solid white">';
                   for($j=0;$j<7;$j++)
                   {
                      $rN=7*$i+$j;
                      echo '<div id="cal-cell'.$rN.'" class="cal-cell" style="width:14%;height:100%;border-right:1px solid white;font-size:14px;">';
                        //echo 'c'.$rN;
                      echo '</div>' ;
                   }
                 echo '</div>';
              }
           echo '</div>';
   	  echo '</div>';
   	echo '</div>';
   }

   function calDays($y,$m)
   {
       
       $this->y=$y;
       $this->m=$m;
       $fday=date('w',strtotime($y.'/'.$m.'/01'));
       $ldate=date('t',strtotime($y.'/'.$m.'/01'));
     //  echo $fday;echo '<br>';
     //  echo $ldate;
       $res=array();
       $d=1;


       for($i=0;$i<$fday;$i++)
       {
          $res[$i]=0;
       }
       
       for($i=$fday;$i<($ldate+$fday);$i++)
       {
          
          $res[$i]=$d++;
       }
       for($i=($ldate+$fday);$i<42;$i++)
       {
        
          $res[$i]=0;
       }
       $resArray=array($res);
       return $resArray;
   }
}
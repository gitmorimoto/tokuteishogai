<?php
class Calendar2
{
   protected $calNumS;
   protected $yS;
   protected $mS;
   public function calFrame()
   {
   //////////////////////////////////////////part box/////////////////////////////////////////////////////////////////////////////	
   echo '<div id="calS" class="" style="width:500px;height:250px;background:darkblue;color:white" >';
   	  
      echo '<div id="nengoListS" class="" style="width:500px;height:40px;display:flex;border-bottom:1px solid white">';
   	     echo '<div id="wS" class="nengoS" style="width:125px;height:38px;border:1px solid white;margin-left:2px;font-size:14px">西暦</div>';
   	     echo '<div id="sS" class="nengoS" style="width:125px;height:38px;border:1px solid white;margin-left:2px;font-size:14px">昭和</div>';
   	     echo '<div id="hS" class="nengoS" style="width:125px;height:38px;border:1px solid white;margin-left:2px;font-size:14px">平成</div>';
   	     echo '<div id="rS" class="nengoS" style="width:125px;height:38px;border:1px solid white;margin-left:2px;font-size:14px">令和</div>';
   	  echo '</div>';
    //--------------------------------------container (year box and month box)---------------------------------------
   	  echo '<div id="" class="" style="width:500px;height:200px;display:flex">';  
      //----------------------------------year box---------------------------------------------------------------------
        echo '<div id="yBoxS" class="" style="width:250px;height:200px;border-right:1px solid white">';
             echo '<div id="" class="" style="width:250px;height:30px;
             border-bottom:1px solid white;font-size:14px;
             display:flex;justify-content:center;align-items:center;font-size:21px">';
               echo '年';
             echo '</div>';
             
             echo '<div id="seirekiS" class="seireki" style="width:250px;height:128px;border-bottom:1px solid white;overflow-y:auto" >';
             for($i=0;$i<200;$i++)
             {
                      echo '<div id="sYS'.$i.'" class="sYearS" style="width:250px;height:30px;
                      border-bottom:1px solid yellow;font-size:15px;display:flex;justify-content:center;align-items:center">';
                          echo (1920+$i);
                      echo '</div>' ;
             }
             echo '</div>';
             
             echo '<div id="warekiS" class="warekiS" style="width:250px;height:128px;border-bottom:1px solid white;overflow-y:auto">';
             for($j=0;$j<100;$j++)
             {
                      echo '<div id="wYS'.$j.'" class="wYearS" style="width:250px;height:25px;
                      border-bottom:1px solid yellow;font-size:15px;display:flex;justify-content:center;align-items:center">';
                          echo $j;
                      echo '</div>' ;
             }
             echo '</div>';
        echo '</div>';
    //---------------------------------------------------------------------------------------------------------------------
    //----------------------------------------month box----------------------------------------------------------------------
        echo '<div id="mBoxS" class="" style="width:250px;height:200px;border-right:1px solid white;">';
              echo '<div id="" class="" style="width:250px;height:30px%;
              border-bottom:1px solid white;font-size:14px;
              display:flex;justify-content:center;align-items:center;font-size:21px">';
                echo '月';
              echo '</div>';
              echo '<div id="" class="" style="width:250px;height:170px;border-bottom:1px solid white;">';
               for($i=0;$i<4;$i++)
               {
                   echo '<div id="" class="" style="width:250px;height:42px;display:flex">';
                       for($j=0;$j<3;$j++)
                       {
                           echo '<div id="mS'.($i*3+$j+1).'" class="monthS" style="width:81px;height:42px%;
                           border:1px solid yellow;font-size:14px;display:flex;justify-content:center;align-items:center">';
                               echo ($i*3+$j+1);
                          echo '</div>' ;

                       }
                   echo '</div>';
                      
               }
              echo '</div>';

         echo '</div>';
      //------------------------------------------------------------------------------------------------------------------    

   	     
   	  echo '</div>';
   	echo '</div>';
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   }  
}

////////////////////////////////example////////////////////////////////////////////

?>
<!-------
<html>
    <body style="width:100%;height:100%;background:black;">
    <div style="width:300px;height:200px;border:1px solid white">
        <?php
           // $obj->calFrame();
        ?>
    </div>
    </body>
</html>
-->
<?php
include_once('config.php');
$return = [];
$filePathArray = glob($pathToDatabase.'/*.*');
foreach($filePathArray as $fp){
    if(file_exists($fp)&& !empty(file_get_contents($fp))){
        $fName = pathinfo($fp, PATHINFO_FILENAME);
        $fname = trim($fName);
       // echo $fName;echo '<br>';
        if (preg_match('/^\d+_.+$/u', $fName)) {
           // echo "マッチします";echo '<br>';
            $fName = explode('_',$fName,2)[0];
        } else {
          //  echo "マッチしません";echo '<br>';
        }
       // echo $fName;;echo '<br>';echo '<br>';
        $time = Date('Y-m-d',$fName);
      //  echo $time;echo '<br>';
        $cont = json_decode(file_get_contents($fp),true);
        if ($cont === null) {
            echo 'JSON decode error';
            exit;
        }
        if(count($cont)!=2){
            $cont = [$cont,[]];
        }
     //   print_r($cont);echo '<br>';
     //   print_r(count($cont));echo '<br>';
        $listName = $cont[0][0].'/'.$cont[0][2].'/'.$time;
        $listElement = [$listName=>$cont];
        $return[]=$listElement;
      //  echo $listName;;echo '<br>';
    }
}

//$json = file_get_contents( $pathToDatabase.'/)

echo json_encode($return,JSON_UNESCAPED_UNICODE);

?>
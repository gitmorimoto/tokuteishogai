<?php
$bday=$_POST['bday'];
$wday=$_POST['wday'];
$age=getAge($bday,$wday);
echo $age;




function getAge($bday,$wday) {
    
    $bday = str_replace('-', '', $bday);
    $wday = str_replace('-', '', $wday);
    $age = floor(($wday - $bday)/10000);
    return $age;
}




?>
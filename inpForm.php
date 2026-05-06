<?php
include('class.Calendar.php');

$data = ['a'=>1,'b'=>4,'c'=>2,'d'=>3,'e'=>12,'f'=>11,'g'=>13,'h'=>9,'i'=>7,'j'=>3,'k'=>8];
$calObj=new Calendar();

?>

<html>
    <head>
	<title></title>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/inpForm.css" media="screen">
	<link rel="stylesheet" href="css/itemList.css">
    <title></title>
	
	<script type="module" src="./js/inpForm.js"></script>
    <style>
        body{
            background-color:black;
            color:white;
        }
    </style>
	

</head>
<!--  <div id="" class=""></div> -->
<body style="position:relative;">
    <div id="container0" class="container" style="width:99% ;height:250px;border:1px solid white">

    </div>
    <div id="instruction"  class="" style="width:99% ;height:50px;
    border:1px solid white;margin-top:2px;margin-bottom:2px">
    </div>
    <div id="container1" class="container" style="width:99% ;height:200px;border:1px solid white">
    </div>
    
    <div id="calendar" style="width:500px;height:200px;border:2px solid white;
    color:white;position:absolute;left:50%;top:60%">
        <?php
            $calObj->calFrame(0);
        ?>
    </div>
    <div id="itemList" style="width:500px;height:180px;border:2px solid white;
    color:white;position:absolute;left:50%;top:60%">
        <?php
           // $obj -> makeListTable();
        ?>
    </div>
    
</body>
</html>
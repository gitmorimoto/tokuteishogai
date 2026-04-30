<?php
include('class.Calendar.php');

$calObj=new Calendar();

?>

<html>
    <head>
	<title></title>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/inpForm.css" media="screen">
	
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
    color:white;position:absolute;left:50%;top:50%">
        <?php
            $calObj->calFrame(0);
        ?>
    </div>
    
</body>
</html>
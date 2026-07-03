<?php
class ItemListMaker
{
    protected $itemArray;
    protected $pathToRepository;

    public function __construct($pathToRepository)
	{
		$this->pathToRepository=$pathToRepository;
		
	}
    protected function makeList()
    {
        if(file_exists($this->pathToRepository))
            {
                $json = file_get_contents($this->pathToRepository);
                $this->itemArray = json_decode($json,true);
                if ($this->itemArray === null) {
                    $this->itemArray = [];
                }
            }else{
                echo 'The repository is empty.';
                $this->itemArray = [];
            }
            
        return $this->itemArray;
        
        
    }
    public function makeListTable()
    {
        $itemArray = $this->makeList();
        echo '<div id="list_container" style="width:100%;height:98%;border:1px solid red">';
        $i=0;
        foreach($itemArray as $k=>$v)
        { 
            echo '<div id="li'.$i.'" class="li" style="width:100%;height:30px;">';
                echo $k;
                echo $v;
            echo '</div>';
            $i++;
        }
        echo '</div>';
    }
    

}




///////////////////////////////example/////////////////////////////////
/*This table create the list which is made from data array.
*/
/*
$data = ['a'=>1,'b'=>4,'c'=>2,'d'=>3,'e'=>12,'f'=>11,'g'=>13,'h'=>9,'i'=>7,'j'=>3,'k'=>8];

file_put_contents('repository/itemArray.json',json_encode($data,JSON_UNESCAPED_UNICODE));
/* The path to data(array) is provedet to constructor*/
//$obj = new ItemListMaker('repository/itemArray.json');




?>
<!--
<html>
<head>
 <link rel="stylesheet" href="css/itemList.css">
</head>
<div id="body" style="width:100%;height:100%;background:black;color:white">
    <div id="" style="width:100px;height:200px;
    border:1px solid white;">
    <?php
    /* The list is made */
      //  $obj -> makeListTable();
    ?>
    </div>
</div>
</html>-->
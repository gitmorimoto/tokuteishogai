<?php
Class DatabaseManager
{
    private $pathToDatabase;
    function __construct($pathToDatabase)
    {
        $this->pathToDatabase = $pathToDatabase;
    }

    public function idToPathMaker()
    {
        $allDataPathArray = glob($this->pathToDatabase.'/*.*');

        //make an array consiting id elements in the files and 
        // an array consisting of elements containing id and paths.
        $idArray = [];
        $idToPathArray = [];
        $idToPath = [];
        foreach($allDataPathArray as $p)//$p expresses each path
        {
            //print_r($p);echo '<br>';
            $content = json_decode(file_get_contents($p),true);
            //echo 'content=';
            //print_r($content);echo '<br><br>';
            //echo 'count(data)=';
            //echo count($content);echo '<br><br>';
           
            if(is_array($content)){
                if(count($content)==67){
                    $id = $content[0];
                    $idArray[] = $id;
                   // print_r($content);echo '<br><br>';
                    $idToPathArray[] =[$id=>$p]; 
                }else{
                    $id = $content[0][0];
                    $idToPathArray[] =[$id=>$p];
                    $idArray[] = $id;
                }

            }
            //print_r('==========================================');  echo '<br>';
                // The content of file is got. Pay attention to the structure of the content
                
                //var_dump($content);echo '<br><br>';
                //var_dump($content);echo '<br>';
                //****** */ The index of content should be modified according to the structure of the content****//
               // print_r($dataArray);
               /*
                if(gettype($content[0][0])=='string')
                {    
                    $id = $content[0][0];
                    //var_dump($id);echo '<br>';
                    //**************************************************************** 
                    $idArray[] = $id;
                    //make an associative array from it and $p
                    //$aArrayElement = [$id=>$p];
                    
                    $idToPathArray[] =[$id=>$p] ;
                }
                if(gettype($content[0][0])=='integer')
                {    
                    $id = $content[0][1];
                    //var_dump($id);echo '<br>';
                    //**************************************************************** 
                    $idArray[] = $id;
                    //make an associative array from it and $p
                    //$aArrayElement = [$id=>$p];
                    
                    $idToPathArray[] =[$id=>$p] ;
                }
               */ 
        }
        $idArray = array_unique($idArray);
        $idArray = array_values($idArray);
        //var_dump($idToPathArray);
        
        
        foreach($idArray as $id)
        {
        
            $idToPath[$id] = [];
            foreach($idToPathArray as $el)
            {
                foreach($el as $elId => $path)
                {
                
                    if($id==$elId)
                    {
                        $idToPath[$id][] = $path;
                        
                    }
                }
            }
        }
        //echo 'idToPath=';
        //print_r($idToPath);
        /*
        foreach($idToPath as $k=>$p){
            echo $k;echo '<br>';
            foreach($p as $path){
                echo $path;echo '<br>';
            }
        }
            */
        return $idToPath;
        
    }
        
}
/////////////////////////////example/////////////////////////////////////
/*
include('config.php');
$obj = new DatabaseManager($pathToDatabase);
$idToPath = $obj->idToPathMaker();

file_put_contents($pathToDatabase.'/manager/idToPath.json',json_encode($idToPath,JSON_UNESCAPED_UNICODE));
//print_r($idToPath)
echo '$idToPath=';
print_r($idToPath);
*/


?>
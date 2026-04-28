<?php

class backUp
{
	private $sPath;//original data path (folder)
	private $dPath;//destination data path (folder)
	public function __construct($sPath,$dPath)
	{
		$this->sPath=$sPath;
		$this->dPath=$dPath;
	}
	public function backUpMaker() //create back up
	{ 
		//echo 'backupMaker';
		$msg=array();
		$n=0;
		$docName="";
		$sPath=$this->sPath;
		$dPath=$this->dPath;
		$sdocName=explode('/',$sPath);
		
        $n=count($sdocName);
        $n=$n-2;
       
		$docName=$sdocName[$n];//folder name containing data file
		
		$sPathArray=glob($sPath.'*.dat');//all file paths of original data
		
		$ts=date('d_m_Y H_i_s', time());
		$dir=$dPath.$docName.'-'.$ts.'/';//path for new destination folder 
		
		mkdir($dir,0777,true);//make new destination folder
		for($i=0;$i<count($sPathArray);$i++)
		{
             $flg=copy($sPathArray[$i],$dir.pathinfo($sPathArray[$i])['basename']);
           
		}

		$dataFolderList=scandir($dPath);
		$dataFolderList=array_diff($dataFolderList,array('.','..'));
		$dataFolderList=array_values($dataFolderList);
		
		$scolum=array();
		for($i=0;$i<count($dataFolderList);$i++)
		{
			$scolum[$i]=[explode('-',$dataFolderList[$i])[1],$dataFolderList[$i]];//arg0 shows the time the folder was made and arg1 is the path for the folder
		}//$scolum is the column consiting of element array(folderCreatedTime,the path for the folder)
	//	var_dump($scolum);
		$arrayColumn=array_column($scolum, 0);//the column consisting of created times
		array_multisort($arrayColumn, SORT_DESC, $scolum);//scolum is sorted by the time the folder was created
	   
	    ////input starting dir then the all files and directories under the starting path are deleted.///////////////////
	
			//************************scanInp********************************************
				function scanInp($inpArray) //The directories and files benieth the inpArray(starting paths) are collected as $outArrayArray
				{
					$outArrayArray=array();
					for($i=0;$i<count($inpArray);$i++)
					{
						$outPathArray[$i]=array();
						if(is_dir($inpArray[$i]))
						{
							$outArray[$i]=scandir($inpArray[$i]);
							$outArray[$i]=array_diff($outArray[$i], array('.','..'));
							$outArray[$i]=array_values($outArray[$i]);
							
							if(!empty($outArray[$i]))
							{
		   						for($j=0;$j<count($outArray[$i]);$j++)
		   						{
									array_push($outArrayArray,$inpArray[$i].'/'.$outArray[$i][$j]);
		   						}
							}
						}
		
		
					}
					
					return $outArrayArray;
				}
//***************************************************************************************************
//***************************delDirSystem*************************************
				

				function delDirSystem($dir)
				{
					for($i=0;$i<count($dir);$i++)
					{
							do{
									rmdir($dir[$i]);
									do
									{
										$delChar[$i]=substr($dir[$i],-1);
										$dir[$i]=substr($dir[$i],0,-1);
									
									}
							while($delChar[$i]!='/');
								
    						}while($dir[$i]!='./start');
    				}
				}
//***************************************************************************************************
//************************************************************************
				function delFileEmpDir($inpArray)//if $outArrayArray[i] is file, it is deleted,and if $outArrayArray[i] is directory which 		contains no file or directory,it is deleted
				{
	
					for($i=0;$i<count($inpArray);$i++)
					{
					
						if(!is_dir($inpArray[$i]))
						{
							unlink($inpArray[$i]);
						}else if(count(glob($inpArray[$i].'/*'))==0)
						{
							rmdir($inpArray[$i]);
					
						}
					}
					
					return $inpArray;//The directories containing directories or files are returned
				}

//*************************************************************************************************************************
	    		function cleanDirSystem($startDir,$dPath)
				{
					    
	    				$inpArray=array($dPath.$startDir);//starting path is converted to array form.
						
						do
						{
    						$outArrayArray=scanInp($inpArray);//The directories and files benieth the inpArray(starting paths) are collected as $outArrayArray
    						$outArray=delFileEmpDir($outArrayArray);//if $outArrayArray[i] is file, it is deleted,and if $outArrayArray[i] is directory which contains no file or directory,it is deleted
    		               
						}while(count($outArray)!=0);
						rmdir($dPath.$startDir);


				}
				
	
		

	    for($i=3;$i<count($scolum);$i++)
	    {
	    	
	    	cleanDirSystem($scolum[$i][1],$dPath);
	    	
	    }
	  }
	 
}
///////////////////TEST////////////////////////////////////////////////
//$obj=new backUp('../database/nenkin/','D:/BACKUP/nenkin/');
//echo $obj->backUpMaker();

?>
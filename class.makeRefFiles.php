<?php
class MakeRefFiles
{
    private $pathToRef;
    private $diagnosisGroup;
    private $hospitalGroup;
    private $treatmentGroup;
    private $outcomeGroup;
    function __construct($pathToRef,$diagnosisGroup,$hospitalGroup,$treatmentGroup,$outcomeGroup)
    {
        $this->pathToRef = $pathToRef;
        $this->diagnosisGroup = $diagnosisGroup;
        $this->hospitalGroup = $hospitalGroup;
        $this->treatmentGroup = $treatmentGroup;
        $this->outcomeGroup = $outcomeGroup;
    }
    public function makeRefData($k,$v){
        if(in_array($k,$this->diagnosisGroup))
        {
            $pathToRefFile = $this->pathToRef.'/refDiagnosis.json';
        }else
        if(in_array($k,$this->hospitalGroup))
        {
            $pathToRefFile = $this->pathToRef.'/refHospital.json';
        }else
        if(in_array($k,$this->treatmentGroup))
        {
            $pathToRefFile = $this->pathToRef.'/refTreatment.json';
        }else
        if(in_array($k,$this->outcomeGroup))
        {
            $pathToRefFile = $this->pathToRef.'/refOutcome.json';
        }else{
            $pathToRefFile = $this->pathToRef.'/ref'.$k.'.json';
        }
        
        if(is_file($pathToRefFile)){
            $json = file_get_contents($pathToRefFile);
            $refData = json_decode($json,true);
            $keyArray = array_keys($refData);
            if(in_array($v,$keyArray))
            {
                $freq = $refData[$v] + 1;
                $refData[$v] = $freq;
            }else{
                $refData[$v] = 1;
            }
            file_put_contents($pathToRefFile,json_encode($refData,JSON_UNESCAPED_UNICODE));
        }else{
            
            file_put_contents($pathToRefFile,json_encode([$v=>1],JSON_UNESCAPED_UNICODE));
        }
        
    }


}
////////////////////////example////////////////////////////////////////////////////
/*
$obj = new MakeRefFiles('refData');
$k = 6;
$v = 'itemA';
$obj->makeRefData($k,$v);
*/
?>
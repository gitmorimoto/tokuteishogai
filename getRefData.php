<?php
include('config.php');
$json = file_get_contents('php://input');
$data = json_decode($json,true);


// エラーチェック（重要）
if ($data === null) {
    echo json_encode(['error' => 'Invalid JSON']);
    exit;
}

// 送られてきた値を取得
$num = $data['num'] ?? null;

    if(in_array($num,$diagnosisGroup)){
        $filePath = 'refData/refDiagnosis.json';
    }
    else
    if(in_array($num,$hospitalGroup)){
        $filePath = 'refData/refHospital.json';
    }
    else
    if(in_array($num,$treatmentGroup)){
        $filePath = 'refData/refTreatment.json';
    }
    else
    if(in_array($num,$outcomeGroup)){
        $filePath = 'refData/refOutcome.json';
    }else{
         $filePath = 'refData/ref'.$num.'.json';
    }
    

//$num = 6;

//$filePath = 'refData/ref6.json';
if(file_exists($filePath))
{
    $dataArray = json_decode(file_get_contents($filePath),true);
}
else{
    $dataArray = [];
}
$sender = [$num,$dataArray];
echo json_encode($sender,JSON_UNESCAPED_UNICODE);

?>
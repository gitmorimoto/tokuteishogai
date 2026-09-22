<?php
include_once('config.php');
$ts = time();

if (!is_dir($pathToDatabase)) {
    mkdir($pathToDatabase, 0777, true);
}
$pathToDatabaseFile = $pathToDatabase.'/'.$ts.'.json';
if(file_exists('temp/store.json')){
   
    if (copy('temp/store.json', $pathToDatabaseFile)) {

        $return = ['stored'];

    } else {

        $return = ['copy failed'];

    }
}else{
    $return = ['no data in the temp/store.json'];
}
makeIdToPath($pathToDatabaseFile);
echo json_encode($return,JSON_UNESCAPED_UNICODE);
function makeIdToPath($path) {
    include('config.php');

    $idToPath = [];

    $cont = json_decode(file_get_contents($path), true);

    print_r($cont);
    echo '<br>';

    $selId = $cont[0];

    echo $path . '<br>';

    $pathToIdToPath = $pathToDatabase . '/manager/idToPath.json';

    if (file_exists($pathToIdToPath)) {

        $idToPath = json_decode(
            file_get_contents($pathToIdToPath),
            true
        );

        print_r($idToPath);
        echo '<br>';

    } else {

        $idToPath = [];

    }

    echo $selId . '<br>';

    if (array_key_exists($selId, $idToPath)) {

        // ID already exists
        $idToPath[$selId][] = $path;

        echo 'id exists<br>';

    } else {

        // New ID
        $idToPath[$selId] = [$path];

        echo 'No id exists<br>';
    }

    file_put_contents(
        $pathToIdToPath,
        json_encode($idToPath, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
    );
}
?>
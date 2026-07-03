<?php
if(file_exists('temp/forward.json')){
    unlink('temp/forward.json');
}
echo json_encode(['delete ok']);
?>
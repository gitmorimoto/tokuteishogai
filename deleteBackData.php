<?php
if(file_exists('temp/backward.json')){
    unlink('temp/backward.json');
}
echo json(['backward.json deleted']);
?>
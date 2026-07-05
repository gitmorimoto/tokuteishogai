<?php
$json = file_get_contents('php://input');
$selId = json_decode($json,JSON_UNESCAPED_UNICODE);
echo json_encode([$selId]);



?>
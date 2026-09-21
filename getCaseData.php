<?php
/*
$path = json_decode(file_get_contents('php://input'),true);
$json = file_get_contents($path);
$data = json_decode($json,true);
echo json_encode($data,JSON_UNESCAPED_UNICODE);
*/
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$path = $data["filePath"];


if (!is_string($path)) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid path"]);
    exit;
}

if (!is_file($path)) {
    http_response_code(404);
    echo json_encode(["error" => "File not found"]);
    exit;
}

$json = file_get_contents($path);
$data = json_decode($json, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid JSON file"]);
    exit;
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
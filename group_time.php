<?php

$filepath = 'group_data.json';

if(!file_exists($filepath)){
    file_put_contents($filepath,'{}');
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $data = json_decode(file_get_contents($filepath));
    echo $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST["id"];
    $time_allocated = $_POST["time_allocated"];

    $data = json_decode(file_get_contents($filepath));
    $data -> $id = $time_allocated;
    file_put_contents($filepath, json_encode($data));
}
<?php
function getCount(){
    $file = './core/generated.json';
    $data = file_get_contents($file);
    $count = json_decode($data, true);
    return $count['count'];
}

function addCount(){
    $file = './core/generated.json';
    $data = file_get_contents($file);
    $count = json_decode($data, true);
    $count['count']++;
    $jsonData = json_encode($count);
    file_put_contents($file, $jsonData);
}

function detectFalseCount(){
    // Placeholder function
}
?>

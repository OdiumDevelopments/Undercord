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

function DetectFalseCount(){
    $file = './core/data.json';
    $data = json_decode(file_get_contents($file), true);

    $lastCount = $data['count'];
    $lastTime = $data['time'];

    $currentTime = time();
    $timeDiff = $currentTime - $lastTime;

    if ($timeDiff > 60) { // Check if more than 1 minute has elapsed
        $data['count'] = 0;
        $data['time'] = $currentTime;
        file_put_contents($file, json_encode($data));
    } elseif ($lastCount >= 5) { // Check if more than 5 counts have occurred within 1 minute
        // Spam detected, do nothing
    } else {
        $data['count'] = $lastCount + 1;
        file_put_contents($file, json_encode($data));
        AddCount();
    }
}

?>

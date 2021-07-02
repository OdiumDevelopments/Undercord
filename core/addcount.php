<?php
function GetCount(){
    $file = './core/generated.int'; 
    $Number = file_get_contents($file); 
    $fdata = intval($Number);
    return $fdata;
}
//PPF6 -> Unable to open or read file (maybe doesnt exist or have permissions to read)
function AddCount(){
    $file = './core/generated.int'; 
    $Number = file_get_contents($file); 
    $fdata = intval($Number)+1; 
    file_put_contents($file, $fdata); 
}

function DetectFalseCount(){
    
}

?>

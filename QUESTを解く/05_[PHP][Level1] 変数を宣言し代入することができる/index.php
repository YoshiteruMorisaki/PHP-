<?php 

function redeclare_time($seconds){

    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $remind_seconds = $seconds % 60;

    return sprintf("%d:%02d:%02d", $hours, $minutes, $remind_seconds);
}

$result = redeclare_time(4300);
echo $result;

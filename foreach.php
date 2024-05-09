<?php

$results = array(
    "math" => 90,
    "english" => 80,
    "japanese" => 85,
    "history" => 75
);

foreach($results as $score){
    echo $score . "<br>";
}

echo "<hr>";

foreach($results as $title => $score){
    echo $title . ":" . $score . "<br>";
}
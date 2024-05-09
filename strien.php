<?php
//p126

$greeting = "こんにちは";

$count = mb_strlen($greeting);

//戻り地を$countにいれる
echo $count;
//mb_strlenは文字数を数える関数
echo "<hr>";
$now_time = time();
echo $now_time;
echo "<hr>";

$fruits = array("apple","lemon" ,"banana");
sort($fruits);
var_dump($fruits);
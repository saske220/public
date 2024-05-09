<?php

//配列の要素　果物　野菜
//果物、野菜も配列

//一度に作るのが難しい場合は、
//1.まず　果物の配列をつくる、野菜の配列をつくる
//2.果物の配列と野菜の配列を要素にする配列を作る

$fruits = array("いちご", "リンゴ", "バナナ");
$vegetables = array("きゅうり", "かぼちゃ", "じゃがいも");

$foods = array(
    "果物" => $fruits,
    "野菜" => $vegetables);

var_dump($foods);

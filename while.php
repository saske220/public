<?php   //p91



$i = 1;
while ($i <= 10) {//10以下の間繰り返す
    echo $i . "<br>";//出力する
    $i++;//$iに1を足す
}


echo "<hr>";

$j = 1000;
while ($j >= 150) {//100以上の間繰り返す
    echo  "買います<br>";//出力する
    $j = $j - 150;//$jから150引く
    echo "残金" . $j . "円です<br>";//出力する
}

echo "<hr>";


//p94

$k = 0;
while ($k < 3){
    echo "こんにちは<br>";
    $k++;

}

echo "<hr>";


// p96
$i=0;
if($i==0){
// 処理
}else if ($i==1){
// 処理
}else{
// 処理
}

switch($i){
    case 0:
        echo"swich構文 iは0";// 処理
        break;
    case 1:
        echo"swich構文 iは1";// 処理
        break;
    default:
        echo"swich構文 iは0でも1でもない";// 処理
}

// p97 breakを書かないと？
switch($i){
    case 0:
        echo"swich構文 iは0";// 処理
    case 1:
        echo"swich構文 iは1";// 処理
    default:
        echo"swich構文 iは0でも1でもない";// 処理
}
// switch caseを使う時は break を忘れないように

echo "<hr>";
// p97 5-9
$i = "Yes";
switch ($i) {
    case "はい":
    case "Yes":
        echo "okです";
        break;
    case "いいえ":
    case "no";
        echo "noです";
        break;
}
// break書かないと処理が続くことを利用して0と1の間に共通の処理を行う
// defaultを書かないと、どれにも当てはまらないときは何もしない

echo "<hr>";

// do while

$j=100;
do{
    echo  "買います<br>";//出力する
    $j = $j - 150;//$jから150引く
    echo "残金" . $j . "円です<br>";//出力する
}while($j>=150);

// do whileは一回は必ず実行される
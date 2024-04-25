<?php
$age = 23;
// if(20歳以上){
//     購入できる
// }

// else{
//     購入できない
// }

if ($age >= 21) {


    echo"お買い上げありがとうございます。";
}else{
    echo "購入できません";
}


echo "<hr>";

$age = 19;

if ($age < 20) {
    echo "購入できません";
} else if ($age <= 25) {
    echo "年齢確認が必要です";
} else {
    echo "購入できます";
}


echo "<hr>";


$age = 33;

if ($age >=  20) {
    echo "20歳以上";
} else if ($age >=30) {
    echo "30歳以上";
}

echo "<hr>";

if ($age >=  30) {
    echo "30歳以上";
} else if ($age >=20) {
    echo "20歳以上";
}

echo "<hr>";

?>

for (式1 ; 式2 ; 式3){
処理内容
}

式1 : 最初に1回だけ実行する
式2 : 処理を継続するか判定する条件(ifは実行する・しない)
式3 : 繰り返し処理の最後に実行する
<hr>
<?php
for ($i = 1; $i <= 10; $i = $i + 1) {
    echo $i . "<br>";
}
echo "<hr>";

for ($i = 1; $i <= 31;$i++){

echo $i ."";
if($i % 7 ==0){
        echo"<br>";
}
}



?>
<hr>

Q1

式1 ループの最初に一回実行する処理
式2 ループ処理を継続するか判定する処理

Q2

インクリメント
$i++

Q3

デクリメント
$i--


<hr>

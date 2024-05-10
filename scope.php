<?php
//p134 7-6
function print_name(){
    $name = "太郎";
    echo "私の名前は" . $name . "です";
}
print_name();

echo $name;
//関数の外で定義された変数は関数の中で使えない
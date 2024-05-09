

<?php

function get_price($price){
   $price = $price * 1.1;
   return round($price);
   //round は、端数を四捨五入する関数
}

echo get_price(300);
echo "<br>";
echo get_price(1000);
echo "<br>";
echo get_price(3);
echo "<br>";
echo get_price(5);
echo "<br>";
echo get_price(10003);


//引数のない関数は、関数名()と()の中なし
function taxratio(){
    return "10%";
}
echo taxratio();

echo "<hr>";
function default_demo($name = "太郎"){
    echo "私の名前は"
. $name . "です";
}

default_demo("花子");
echo "<br>";
default_demo();
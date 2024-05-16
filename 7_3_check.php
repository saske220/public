
<?php

// Q1
// 年月日時分秒
echo date("Y-m-d H:i:s");
//         ⇧文字の意味は https://www.php.net/manual/ja/datetime.format.php
echo "<hr>";
// 年月日
echo date("Y-m-d");


echo "<hr>";
// Q2 dateの二つ目の引数に昨日を指定する

// mktime 時分秒月日年
 $yesterday = mktime(10,0,0,5,15,2024);
 echo date("Y-m-d H:i:s", $yesterday);
 echo "<hr>";
 echo date("Y-m-d", $yesterday);
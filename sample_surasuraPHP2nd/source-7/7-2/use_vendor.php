<?php 
  include 'vendor.php';		// 関数ファイルを読み込む

 // 引数に数値と文字列を直接指定する
  echo vending_machine (120, "オレンジジュース");
  
  // 引数に変数を使う
  $price = 90;
  $juice_name = "アップルジュース";
  echo vending_machine($price, $juice_name);
?>

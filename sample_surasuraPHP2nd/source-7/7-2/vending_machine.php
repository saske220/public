<?php
  function vending_machine ($price, $juice_name){
    if ($price >= 120){	// 金額が120円以上なら購入可能
      return $juice_name ."のお買い上げありがとうございます！<br>";
    } else {
      return $juice_name ."の購入金額が不足しています<br>";
    }
  }
  
  // 引数に数値と文字列を直接指定する
  echo vending_machine (120, "オレンジジュース");
  
  // 引数に変数を使う
  $price = 90;
  $juice_name = "アップルジュース";
  echo vending_machine($price, $juice_name);
?>

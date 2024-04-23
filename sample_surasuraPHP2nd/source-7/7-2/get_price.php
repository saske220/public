<?php
  function get_price ($price){
    $price = $price * 1.1;
    // 3行目なしで、return round($price * 1.1) としてもよい
    return round($price);
  }
  echo get_price(300);	// 330と表示される
?>

<?php
  function default_demo($name = "太郎"){
    echo "私の名前は" . $name . "です<br>";
  }
  default_demo("花子");	// 引数あり
  default_demo();		// 引数なし。デフォルト引数「太郎」を使う
?>

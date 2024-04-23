<pre>
<?php
  // 基本の連想配列を作成
  $result = array(
    "Japanese" => 80,
    "math" => 75,
    "science" => 90
  );
  var_dump($result);	// 連想配列の確認
  
  // mathの点数を上書き
  $result["math"] = 85;
  var_dump($result);
  
  // musicの点数を追加
  $result["music"] = 90;
  var_dump($result);
?>
</pre>

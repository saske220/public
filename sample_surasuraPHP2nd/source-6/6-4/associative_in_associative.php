<pre>
<?php
  // テスト結果を連想配列にする
  $result = array("math" => 90, "English" => 80);
  
  // 連想配列$friendsにテスト結果の連想配列を代入
  $friends = array("Haruki" => $result);
  var_dump($friends);	// 結果を確認
  
  // 連想配列にキーを指定して追加し、値として連想配列を代入
  $friends["Kaoru"] = array("math" => 95, "English" => 85);
  var_dump($friends);	// 結果を確認
?>
</pre>

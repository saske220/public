<pre>
<?php
  // 配列の作成、$friends[0]〜$friends[2]ができる
  $friends = array("はるき", "かおる", "ひでと");
  // キーを指定して値を追加する。キーは飛び飛びの値でもOK
  $friends[5] = "まさとし";
  // 存在するキーを指定すると値が上書きされる
  $friends[2] = "よしき";
  var_dump($friends);
?>
</pre>

<pre>
<?php
  $numbers = array(2, 4, 6);
  foreach ($numbers as $key => $value){
    $numbers[$key] = $value * 10;	// 10倍して元の配列要素に代入し直す
  }
  var_dump($numbers);		// 10倍になったか確認
?>
</pre>

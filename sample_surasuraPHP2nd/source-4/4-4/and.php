<pre>
<?php
  $true = TRUE;		// 確認のため変数に論理型を代入しておく
  $false = FALSE;

  $a = $true && $true;	// どちらもTRUEなのでANDの結果はTRUE
  $b = $true && $false;	// 片方がFALSEなのでANDの結果はFALSE
  $c = $true && $true && $true;	// 一度に複数の演算ができる。全てTRUEなので結果はTRUE
  $d = $true && $false && $false;	// FALSEが含まれるので結果はFALSE
  $e = $true && ($true && $false);	// カッコ内が先に演算されて結果はFALSE
  var_dump($a, $b, $c, $d, $e);	// 変数の中身をダンプ（そのまま表示）する
?>

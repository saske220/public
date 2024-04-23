<pre>
<?php
  $true = TRUE;	// 確認のための準備
  $false = FALSE;

  $a = !$true;	// TRUEの否定なので結果はFALSE
  $b = !$false;	// FALSEの否定なので結果はTRUE
  $c = !$true && !$true;	// TRUEの否定はFALSEで、FALSEのANDはFALSE
  $d = !($true && $true);	// TRUEのANDはTRUEで、その否定のため結果はFALSE
  var_dump($a, $b, $c, $d);	// ダンプして確認
?>

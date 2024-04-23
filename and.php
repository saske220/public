 <?php
 $true = TRUE;
 $false = FALSE;

 $a = $true && $true;
 $b = $true && $false;
 $c = $true && $true && $true;
 $d = $true && $false && $false;
 $e = $true && ($false && $false);

 var_dump($a, $b, $c, $d, $e);
 //var_dumpは変数の型の内容を出力する

 ?>
 OR
 </pre>

  <?php
 $true = TRUE;
 $false = FALSE;

 $a = $true || $true;
 $b = $true || $false;
 $c = $true || $true || $true;
 $d = $true || $false || $false;
 $e = $true || ($false || $false);

 var_dump($a, $b, $c, $d, $e);
 //var_dumpは変数の型の内容を出力する

 ?>
 </pre>



 </pre>
<?php
$true = TRUE;
$false = FALSE;

$a = !$true;
$b = !$false;
$c = !$true && !$true;

$d = !($true && $true);

var_dump($a, $b, $c, $d);

echo "<hr>";

$a = $true && $true;
$b = $true && $false;
$c = $true||$true;
$d = $true||$false;
$e = !$true ;
$f = !$false;
$g = !($true && $false);
$h = !($true && $false) && $true;
var_dump($a,$b,$c,$d,$e,$f,$g,$h);

echo time();
?>

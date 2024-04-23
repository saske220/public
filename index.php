<?php

//p47

echo 2+3;

?>

hello world


<?php echo "2+3";
//文字扱いなので計算されずそのまま表示される?>

  <hr style="width:100px; margin-left: 0;">

<?php echo 2+3;
//数字扱いなので計算される?>

  <hr style="width:100px; margin-left: 0;">

<?php
  $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  foreach($list as $num) {

    if($num % 3 !== 0) {
        continue;
    }

    echo $num . 'は3の倍数です。<br>';
  }


  foreach($list as $num){
    if($num % 2 !==0){
        continue;
    }
    echo $num .  'は2の倍数です。<br>';
  }

  ?>
  <hr style="width:100px; margin-left: 0;">

  <?php
  $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  foreach($list as $num) {
  if($num % 3 == 0) {
      echo $num . 'は3の倍数です。<br>';
    }

  }

  ?>

     <hr style="width:100px; margin-left: 0;">

     <?php echo PHP_INT_MAX;//phpの整数最大の数
       ?>
       
            <?php echo _DIR_;

            ?>
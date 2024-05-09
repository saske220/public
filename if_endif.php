<?php
$i = 0;
?>
abc

<?php if ($i == 0){
    echo "iは0です";
    }?>

    <?php if ($i == 0): ?>
    iは0です
    <?php else: ?>
        if(条件を書く)｛
        ｝
        ↓
        if(条件を書く)｛//{の代わりに:を使う}

        endif:


    <?php endif; ?>
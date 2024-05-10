<?php
function vending_machine($price, $juice) {
   if ($price >= 120) {
      $message =  $juice . "が買えます";
   } else {
      $message =  $juice  . "が買えません";
   }
    return $message;
}
?>
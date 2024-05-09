<?php
function vending_machine($price, $juice) {
   if ($price >= 120) {
       echo $juice . "が買えます";
   } else {
       echo $juice . "が買えません";
   }
}
vending_machine(100, "オレンジジュース");
echo "<br>";
vending_machine(120, "コーヒー");

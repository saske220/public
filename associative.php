<pre>

<?php

$result = array(
   "English" => 80,
    "math" => 90,

);

$friends = array("Haruki" => $result);
var_dump($friends);

$friends["kaoru"] = array("math => 95", "English" => 85);
var_dump($friends);
echo "Kaoru English;" .$friends["kaoru"]["English"] . "<br>";
echo "Haruki math" . $friends["Haruki"]["math"] . "<br>";



?>
</pre>
<?php
$var = $_POST['var'];
mysql_query("SELECT * FROM sometable WHERE id = $var");
$freecodecamp = array("zero"=>"free", "one"=>"code", "two"=>"camp");
ksort($freecodecamp);
print_r($freecodecamp);
?>

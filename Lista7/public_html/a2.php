<?php
include "0begin.php";
?>
<h1>Strona druga</h1>
<?php

$a=array("ala","ola","Jurek","Zenon","Franek");

foreach($a as $x)
    echo "<li>$x</li>";
?>
<?php
include "0end.php";
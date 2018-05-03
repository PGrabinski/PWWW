<?php
include "0begin.php";
?>
<h1>Strona trzecia</h1>
Jakie pliki są w folderze img:

<ul>
<?php

  $obrazki=scandir('img');

  foreach ($obrazki as $x) {
      if ($x[0]!='.') {
          echo "<li> $x </li>";
      }
  }
?>

</ul>
<?php
include "0end.php";

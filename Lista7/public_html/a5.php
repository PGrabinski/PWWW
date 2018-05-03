<?php
include "0begin.php";
?>
<h1>Strona piąta</h1>
<ul>
<?php

  $obrazki=scandir('psy');


  foreach ($obrazki as $plik) {
      if ($plik[0]!='.') {
          echo "<img src='psy/$plik' width='600'/>";
      }
  }
?>
</ul>
<?php
include "0end.php";

<?php
 include '1/head.html';
 include '1/menu.html';
?>

<?php
  $images = scandir('../../images');

  foreach ($images as $key => $img) {
      if ($img !='.' && $img != '..') {
          echo '<img class="img=responsive img-thumbnail" id="video'.$key.'" src="../../images/'.$img.'">';
      }
  }

?>

<?php
  include '1/tail.php';
  ?>

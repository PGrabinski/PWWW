<?php
 include 'head.php';
?>

<?php
  $images = scandir('../../../images');

  foreach ($images as $key => $img) {
      if ($img !='.' && $img != '..') {
          echo '<img class="img=responsive img-thumbnail" id="video'.$key.'" src="../../../images/'.$img.'">';
      }
  }

?>

<?php
  include 'tail.php';
  ?>

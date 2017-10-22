<?php
 include 'head.php';
?>

<?php
  $videos = scandir('../../../movies');

  foreach ($videos as $key => $video) {
      if ($video !='.' && $video != '..') {
          echo '<video class="img=responsive img-thumbnail" id="video'.$key.'" src="../../../movies/'.$video.'"controls muted>
    </video>';
      }
  }

?>

<?php
  include 'tail.php';
  ?>

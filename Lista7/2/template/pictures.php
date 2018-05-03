<?php
 include 'head.php';
?>

<div id="lightgallery">

<?php
  $images = scandir('../../../images');

  foreach ($images as $key => $img) {
      if ($img !='.' && $img != '..') {
          echo '<a href="../../../images/'.$img.'">
              <img class="img=responsive img-thumbnail" id="video'.$key.'" src="../../../images/'.$img.'">
            </a>';
      }
  }
?>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.6/js/lightgallery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lightgallery").lightGallery(); 
    });
</script>

<?php
  include 'tail.php';
  ?>

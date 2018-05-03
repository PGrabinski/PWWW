<?php require('./head.php');?>

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="container">
      <div id="carouselTop" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
          $imgs = scandir('./img');
          $counter = 1;
          foreach ($imgs as $img) {
              if ($img !='.' && $img != '..') {
                $counter++;
                if ($counter === 1){
                  echo '<li data-target="#carouselTop" data-slide-to="0" class="active"></li>';
                } else {
                  echo '<li data-target="#carouselTop" data-slide-to="'.$counter.'"></li>';
                }
              }
          }
          ?>
        </ol>
        <div class="carousel-inner" role="listbox">

          <?php
          $imgs = scandir('./img');
          $counter = 1;
          foreach ($imgs as $img) {
              if ($img !='.' && $img != '..') {
                if ($counter == 1){
                  echo '<div class="carousel-item item active">
                    <img class="d-block w-100 img-carousel img-thumbnail" src="img/'.$img.'" alt="Wyposazenie1">
                  </div>';
                } else {
                  echo '<div class="carousel-item item">
                          <img class="d-block w-100 img-carousel img-thumbnail" src="img/'.$img.'" alt="Wyposazenie'.$counter.'">
                        </div>';
                }
                  $counter++;
              }
          }
          ?>

        </div>
        <a class="carousel-control-prev carousel-control left" href="#carouselTop" role="button" data-slide="prev">
  <span class="fa fa-chevron-left" aria-hidden="false"></span>
  <span class="sr-only">Poprzednie</span>
</a>
        <a class="carousel-control-next carousel-control right" href="#carouselTop" role="button" data-slide="next">
  <span class="fa fa-chevron-right" aria-hidden="false"></span>
  <span class="sr-only">Następne</span>
</a>
      </div>
    </div>
  </div>
</div>

<?php require('./tail.html');?>

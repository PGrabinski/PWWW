<?php
include "baza.php";


$wynik=$baza->query("SELECT * FROM videos");
while($r= $wynik->fetch_assoc())
{
	echo '<div class="card p-3">
          <div class="card-image">
            <div class="embed-responsive embed-responsive-16by9 mb-3">
						<iframe width="560" height="315" src="'.$r[url].'" frameborder="0" allowfullscreen></iframe>

						</div>
          </div><!-- card image -->
          <div class="card-content">
            <span class="card-title">'.$r[id].'. '.$r[name].'</span><br>
						<button class="btn btn-primary mx-auto"'."onclick=\"location='?id=".$r[id]."'\"".'>Edit video</button>
						<p class="card-text py-3 mx-auto">'.$r[comments].'</p>
          </div><!-- card content -->
        </div>';
}
	echo "<button class='btn btn-primary btn-lg my-5 mx-auto' onclick=\"location='?id=dodaj'\">Add new video</button>";

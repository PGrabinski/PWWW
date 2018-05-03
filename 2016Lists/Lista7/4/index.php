<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="/PWWW/Lista7/4">Best rock &amp; metal covers</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="video_add.php">Add video</a>
      </li>
    </ul> -->
  <!-- </div> -->
</nav>
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
    <?php
    if ($_GET) {
        if ($_GET['id']=='dodaj') {
            include("video_add.php");
        } elseif (intval($_GET['id'])) {
            include "video_edit.php";
        }
    } else {
        include "video_display.php";
    }
    ?>
      </div>
    </div>
  </div>
</body>
</html>

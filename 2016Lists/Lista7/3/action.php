<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
  <div class="container-">
    <div class="row mt-5">
      <div class="col-md-6 mx-auto">
        <h2>Twoja odpowiedź:</h2>
<?php
if ($_POST) {
  echo "<table class='table'>
  				  <tr><td>Czy jesteś za?</td><td>Na którym roku jesteś?</td><td>Komentarze</td></tr>
    				<tr><td>$_POST[answer]</td><td>$_POST[year]</td><td>$_POST[comments]</td></tr>
  				</table>";
}
 ?>
</div>
</div>
</div>
</body>

</html>

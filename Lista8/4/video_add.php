<!-- <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="/PWWW/Lista7/4/index.php">Best rock &amp; metal covers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="video_add.php">Add video</a>
      </li>
    </ul>
  </div> -->
</nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
				<h2>Adding video</h2>
				<form method='post' action='video_query.php'>
					<input name='id' type='hidden' class="form-control">
					<input type="text" name='name' placeholder='Name of the video' class="form-control">

					<textarea name='url' class="form-control"></textarea>
					<textarea name='comments' class="form-control"></textarea>

					<button class='btn btn-primary' type="submit" name="co" value="Dodaj">Add</button>
					<button class='btn btn-primary' type="submit" name="co" value="Anuluj">Cancel</button>
				</form>
      <!-- </div>
    </div>
  </div>
</body>
</html> -->

<?php
include_once 'db.php';
 ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/d4c0bc476e.js"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
  <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/PWWW/Lista10/3">Nerdshop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="browse.php">Przeglądaj</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
      <?php
        //print_r($_SESSION['test']);
        if ($_SESSION['rola'] == '2') {
          echo  '<li class="nav-item"><a href="add_product.php" class="nav-link">Dodaj przedmiot</a></li>';
          echo  '<li class="nav-item"><a href="users.php" class="nav-link">Lista użytkowników</a></li>';
        }
        if (empty($_SESSION['me'])) {
            echo  '<li class="nav-item"><a href="login.php" class="nav-link">Zaloguj się</a></li>
          <li class="nav-item"><a href="register.php" class="nav-link">Zarejestruj się</a></li>';
        } else {
            echo  '<li class="nav-item"><a href="logout.php" class="nav-link">Wyloguj</a></li>';
        }

       ?>
     </ul>
   </div>
  </nav>

  <div class="container-fluid">

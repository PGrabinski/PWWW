<?php require('./head.php');?>

    <div class="row">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <?php

        include_once "db.php";

        $id=intval($_GET['id']);
        $results = $db->query("SELECT * FROM user where id='$id'");
        $row = $results->fetch_assoc();

            echo "<div class='card card-body'>";
            if($id==$me or $_SESSION[rola]>1) {
              echo "<a class='btn btn-secondary ml-auto' href='user_edit.php?id=$row[id]'>Edytuj użytkownika</a>";
            }
            echo "<h1 class='card-title'>$row[imie] $row[nazwisko] </h1>";
            echo "<p class='card-text'>Login: $row[login]</p>";
            echo "<p class='card-text'>Email: $row[email]</p>";
            echo "<p class='card-text'>Imię: $row[imie]</p>";
            echo "<p class='card-text'>Nazwisko: $row[nazwisko]</p>";
            echo "<p class='card-text'>Rola: $row[rola]</p>";

            echo "</div>";


        ?>
      </div>
      <div class="col-md-2">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>

    <?php require('./tail.php');?>

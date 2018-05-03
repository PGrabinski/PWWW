<?php require('./head.php');?>

    <div class="row">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <?php

        include_once "db.php";

        $results = $db->query("SELECT *
                               FROM user
                               ORDER BY nazwisko,imie
                               LIMIT 200"); //użytkownicy alfabetycznie

        echo "<ul class='list-group'>";

        while ($row = $results->fetch_assoc()) //generuj listę odnośników
            echo "<li class='list-group-item text-center'><a href='user_show.php?id=$row[id]'>$row[imie] $row[nazwisko] </a></li>";

        echo "</ul>";
        ?>
      </div>
      <div class="col-md-2">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>

    <?php require('./tail.php');?>

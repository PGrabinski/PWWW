<?php require('./head.php');?>

    <div class="row mb-5">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <?php

        include_once "db.php";

        if ($id=intval($_GET['id'])) {
            $results = $db->query("SELECT * FROM user where id='$id'");
            $row = $results->fetch_assoc();
            $row['id']==$me or $_SESSION[rola]>1 or die();
        }

            echo '<div class="card card-body">
            <h1 class="card-title">'.$row[imie].' '.$row[nazwisko] .'</h1>
            <form id="userEdit" action="user_commit.php" method="post" class="clearfix">
            <input type="hidden" name="id" id="id" value='.$id.'>
              <div class="form-group">
                <label for="login">Login użytkownika:</label>
                <input id="login" type="text" name="login" class="form-control" value="'.$row["login"].'">
              </div>
              <div class="form-group">
                <label for="password">Hasło:</label>
                <input id="password" type="password" name="password" class="form-control" value="'.$row["haslo"].'">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" class="form-control" value="'.$row["email"].'">
              </div>
              <div class="form-group">
                <label for="imie">Imie:</label>
                <input id="imie" type="text" name="imie" class="form-control" value="'.$row["imie"].'">
              </div>
              <div class="form-group">
                <label for="nazwisko">Nazwisko:</label>
                <input id="nazwisko" type="text" name="nazwisko" class="form-control" value="'.$row["nazwisko"].'">
              </div>';
            if ($_SESSION[rola]>1) {
                echo '<div class="form-group">
                <label for="rola">Rola:</label>
                <input id="rola" type="number" name="rola" class="form-control" value="'.$row["rola"].'">
              </div>';
            } else {
                echo '<input type="hidden" id="rola" value="'.$row["rola"].'">';
            }
            echo '<button type="submit" class="btn btn-success mx-auto" id="edit">Zapisz</button></form>';
            echo '<button onclick="window.history.back()" class="btn btn-success mr-auto my-2" id="edit">Anuluj</button>';
            echo "</div>";

        ?>
      </div>
      <div class="col-md-2">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>
    <script>
    $("#userEdit").submit(
        (e) => {
            e.preventDefault();
            let postData = {
              login: $('#login').val(),
              haslo: $('#password').val(),
              imie: $('#imie').val(),
              nazwisko: $('#nazwisko').val(),
              email: $('#email').val(),
              rola: $('#rola').val(),
              id: $('#id').val()
            };
            $.ajax(
            {
                url : "./user_commit.php",
                type: "POST",
                data : postData
            }).done(()=>{
                  location = "user_show.php?id="+$('#id').val();
            });
        }
    );
    </script>

    <?php require('./tail.php');?>

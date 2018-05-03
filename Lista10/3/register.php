<?php require('./head.php');?>

    <div class="row mb-5">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <form method="post" action="user_commit.php" id='registerForm'>
          <div class="form-group">
            <label for="login">Login użytkownika:</label>
            <input id="login" type="text" name="login" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Hasło:</label>
            <input id="password" type="password" name="haslo" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="imie">Imie:</label>
            <input id="imie" type="text" name="imie" class="form-control">
          </div>
          <div class="form-group">
            <label for="nazwisko">Nazwisko:</label>
            <input id="nazwisko" type="text" name="nazwisko" class="form-control">
          </div>
          <button type="submit" class="btn btn-success mx-auto" id="register">Zarejestruj</button>
        </form>
        <button onclick="window.history.back()" class="btn btn-success mr-auto my-2" id="edit">Anuluj</button>
      </div>
      <div class="col-md-2">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>
    <script>
    $("#registerForm").submit(
        (e) => {
            e.preventDefault();
            let postData = {
              login: $('#login').val(),
              haslo: $('#password').val(),
              imie: $('#imie').val(),
              nazwisko: $('#nazwisko').val(),
              email: $('#email').val(),
              rola: 1,
              id: 'new'
            }
            $.ajax({
                url : "./user_commit.php",
                type: "POST",
                data : postData
            }).done(()=>{
              window.location = "index.php";
            });
        });
    </script>

    <?php require('./tail.php');?>

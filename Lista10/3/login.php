<?php require('./head.php');?>

    <div class="row">
      <div class="col-md-3">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-6">

        <form method="post" action="login_commit.php" id='loginform'>
          <div class="form-group">
            <label for="login">Login użytkownika:</label>
            <input id="login" type="text" name="login" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Hasło:</label>
            <input id="password" type="password" name="haslo" class="form-control">
          </div>
          <button type="submit" class="btn btn-success mx-auto" id="logIn">Zaloguj</button>
        </form>
        <?php
      if ($_SESSION['loginFailed']) {
          echo '<div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>Błędne login lub hasło!</div>';
          $_SESSION['loginFailed'] = false;
      }
         ?>
      </div>
      <div class="col-md-3">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>
    <script>
    $("#logform").submit(
        (e) => {
          e.preventDefault();
          let tempData = {
            login: $('#login').val(),
            password: $('#password').val()
          }
          $.ajax({url: "./login_commit.php",
                  type: 'POST',
                  data: tempData
                }).done(()=>{
                  console.log('Sent!');
                });
    	   });
    </script>

    <?php require('./tail.php');?>

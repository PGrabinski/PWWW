<?php require('./head.php');?>

    <div class="row mb-5">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <?php

        include_once "db.php";

        $id=intval($_GET['id']);
        $results = $db->query("SELECT * FROM products where id='$id'");
        $row = $results->fetch_assoc();

        echo "<div class='card card-body'>";
        if ($id==$me or $_SESSION[rola]>1) {
            echo "<a class='btn btn-secondary ml-auto' href='product_edit.php?id=$row[id]'>Edytuj produkt</a>";
        }
        echo "<h1 class='card-title'>Nazwa produktu: $row[name]</h1>";
        echo "<p class='card-text'>Cena: $row[price] zł</p>";
        echo "<p class='card-text'>Producent: $row[producent]</p>";
        echo "<p class='card-text'>Opis: $row[details]</p>
          <img src='$row[imgUrl]' class='card-img-top img-thumbnail w-50 mx-auto mb-2'/>";
          if (!empty($_SESSION['me'])) {
              echo "<button class='btn btn-success' onclick='addToCart($row[id])'>Dodaj do koszyka</button>";
          echo '<div class="card card-body">
        <form id="addComment">
          <div class="form-group">
          <label for="comment">Twój komentarz:</label>
          <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
          </div>
          <button class="btn btn-success" onclick="addComment('.$row[id].', \''.$_SESSION['user'].'\')">Dodaj komentarz</button>
        </form>
        </div>';
        }
        $sql = "SELECT * FROM comments WHERE product=$row[id]";
        if ($db->query($sql)) {
            $comments = $db->query($sql);
            if ($comments->num_rows == 0) {
                echo "<ul class='list-group'>";
                echo '<li class="list-group-item text-center"><h1>Brak komentarzy.</h1></li>';
                echo "</ul>";
            } else {
                echo "<ul class='list-group'>";
                while ($comment = $comments->fetch_assoc()) {
                    echo "<div class='card card-body'>";
                    echo "<p class='card-title'>$comment[user]</p></a>
                          <p class='card-text'>$comment[comment]</p>";
                    echo "</div>";
                }
                echo "</ul>";
            }
        }
        echo "</div>";

        ?>
        <script type="text/javascript">
        function addComment(id, user) {
          console.log(id+' '+user);
          let ajaxData = {
            product: id,
            comment: $('#comment').val(),
            user: user
          };
          $.ajax({
            url: './addComment.php',
            method: 'POST',
            data: ajaxData
          })
          .done((data) => {
            console.log(data);
            window.location = 'browse.php';
          });
        }
          function addToCart(id) {
            $.ajax({
              url: './addToCart.php',
              method: 'POST',
              data: {id: id}
            }).done(() => {
              window.location = 'browse.php';
            });
          };

        </script>
      </div>
      <div class="col-md-2">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>

    <?php require('./tail.php');?>

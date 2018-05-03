<?php require('./head.php');?>

    <div class="row mb-5">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <?php

        include_once "db.php";

        if ($id=intval($_GET['id'])) {
            $results = $db->query("SELECT * FROM products where id='$id'");
            $row = $results->fetch_assoc();
            $row['id']==$me or $_SESSION[rola]>1 or die();
        }

            echo '<div class="card card-body">
            <h1 class="card-title">'.$row[name].'</h1>
            <form method="post" action="product_commit.php" id="productEdit">
              <input type="hidden" name="id" id="id" value='.$id.'>
              <div class="form-group">
                <label for="name">Nazwa produktu:</label>
                <input id="name" type="text" name="name" class="form-control" value="'.$row["name"].'">
              </div>
              <div class="form-group">
                <label for="details">Opis:</label>
                <textarea id="details" name="details" class="form-control">'.$row["details"].'</textarea>
              </div>
              <div class="form-group">
                <label for="price">Cena:</label>
                <input id="price" type="number" name="price" class="form-control" value="'.$row["price"].'">
              </div>
              <div class="form-group">
                <label for="producent">Producent:</label>
                <input id="producent" type="text" name="producent" class="form-control" value="'.$row["producent"].'">
              </div>
              <div class="form-group">
                <label for="imgUrl">Obrazek:</label>
                <input id="imgUrl" type="text" name="imgUrl" class="form-control" value="'.$row["imgUrl"].'">
              </div>
              <div class="form-group">
                <label for="category">Kategoria:</label>
                <select name="category" id="category" class="custom-select ml-2"  value="'.$row["category"].'">
                  <option value="cosplay"';
                  if($row["category"]=='cosplay'){echo 'selected';}
                  echo '>Strój</option>
                  <option value="poster"';
                  if($row["category"]=='poster'){echo 'selected';}
                  echo '>Plakat</option>
                  <option value="figure"';
                  if($row["category"]=='figure'){echo 'selected';}
                  echo '>Figurka</option>
                  <option value="gadget"';
                  if($row["category"]=='gadget'){echo 'selected';}
                  echo '>Gadżet</option>
                </select>
              </div>';
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
    $("#productEdit").submit(
        (e) => {
            e.preventDefault();
            let postData = {
              name: $('#name').val(),
              details: $('#details').val(),
              price: $('#price').val(),
              category: $('#category').val(),
              producent: $('#producent').val(),
              imgUrl: $('#imgUrl').val(),
              id: $('#id').val()
            };
            $.ajax(
            {
                url : "./product_commit.php",
                type: "POST",
                data : postData
            }).done(()=>{
                  location = "product_show.php?id="+$('#id').val();
            });
        }
    );
    </script>

    <?php require('./tail.php');?>

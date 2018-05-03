<?php require('./head.php');?>

    <div class="row">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-7 bg">
        <?php

        include_once "db.php";
        $category=$_GET['category'];
        $price=$_GET['price'];
        $producent=$_GET['producent'];
        $sql = "SELECT * FROM products ";
        $addAnd = false;
        $addAnd2 = false;
        switch ($price) {
          case 'price1':
            $sql .= "WHERE price < 100.0";
            $addAnd = true;
            $addAnd2 = true;
            break;
          case 'price2':
            $sql .= "WHERE price >= 100 AND price < 200";
            $addAnd = true;
            $addAnd2 = true;
            break;
          case 'price3':
            $sql .= "WHERE price >= 200 AND price <=300";
            $addAnd = true;
            $addAnd2 = true;
            break;
          case 'price4':
            $sql .= "WHERE price > 300";
            $addAnd = true;
            $addAnd2 = true;
            break;
        }
        if (!empty($producent) && $addAnd2 && $producent != 'Wszystkie') {
            $sql .= " AND producent='$producent'";
            $addAnd = true;
        }
        if (!empty($producent) && !$addAnd2 && $producent != 'Wszystkie') {
            $sql .= " WHERE producent='$producent'";
            $addAnd = true;
        }
        if (!empty($category) && ($addAnd || $addAnd2) && $category != 'Wszystkie') {
            $sql .= " AND category='$category'";
        }
        if (!empty($category) && !$addAnd && !$addAnd2 && $category != 'Wszystkie') {
            $sql .= " WHERE category='$category'";
        }
        $sql .= " ORDER BY name LIMIT 200";
        //echo $sql;
        if ($db->query($sql)) {
            echo "<ul class='list-group'>";
            $results = $db->query($sql);
            if ($results->num_rows == 0) {
                echo '<li class="list-group-item text-center"><h1>Brak towarów zgodnych z wymaganiami!</h1></li>';
            }
            while ($row = $results->fetch_assoc()) {
                echo "<li class='list-group-item text-center'><a href='product_show.php?id=$row[id]'>
            <div class='card card-body my-2'>
          <img src='$row[imgUrl]' class='card-img-top img-thumbnail'/>
          <p class='card-title'>$row[name]</p></a>
          <p class='card-text'>$row[details]</p>
          <p class='card-text'>Cena: $row[price] zł</p>
          <p class='card-text'>Producent: $row[producent]</p>";
          if(!empty($_SESSION['me'])) echo "<button class='btn btn-success' onclick='addToCart($row[id])'>Dodaj do koszyka</button>";
          echo "</div>
             </li>";
            }

            echo "</ul>";
        }
        ?>
        <script type="text/javascript">
          function addToCart(id) {
            console.log(id);
            $.ajax({
              url: './addToCart.php',
              method: 'POST',
              data: {id: id}
            }).done(() => {
              window.location = 'browse.php';
            });
          }
        </script>
      </div>
      <div class="col-md-3">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>

    <?php require('./tail.php');?>


<?php
include_once 'db.php';

if(!empty($_SESSION['me'])){
  echo '<h2>Twój koszyk:</h2>';
  if (empty($_SESSION['cart'])) {
    echo "<div class='card card-body'>
    <p class='card-title'>Pusto!</p>
  </div>";
} else {
    foreach ($_SESSION['cart'] as $x) {
        echo "<div class='card card-body my-2'>
      <img src='$x->url' class='card-img-top img-thumbnail'/>
      <p class='card-title'>$x->name</p>
      <p class='card-text'>$x->details</p>
      <p class='card-text'>Cena: ". ($x->price*$x->amount)." zł</p>
      <p class='card-text'>Ilość: $x->amount</p>
    </div>";
    }
}
}

 ?>

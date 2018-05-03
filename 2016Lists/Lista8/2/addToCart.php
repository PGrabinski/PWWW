<?php
include_once "db.php";
if ($_POST) {
  $id = $_POST['id'];
  $select = $db->query("SELECT *
                         FROM products
                         WHERE id='$id'");
  $result = $select->fetch_assoc();
  $temp = false;
  foreach($_SESSION['cart'] as $product) {
    if ($product->id == $id) {
      $product->amount++;
      $temp = true;
      break;
    }
  }
  if(!$temp) {
    $newProduct = new Product();
    $newProduct->name = $result[name];
    $newProduct->price = $result[price];
    $newProduct->amount = 1;
    $newProduct->details = $result[details];
    $newProduct->category = $result[category];
    $newProduct->producent = $result[producent];
    $newProduct->url = $result[imgUrl];
    $newProduct->id = $result[id];
    array_push($_SESSION['cart'],$newProduct);
  }
}

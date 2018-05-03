<?php
$str = $_SERVER['REQUEST_URI'];
$fullPath = (explode("/",$str));
$lastPath = $fullPath[sizeof($fullPath)-1];
$main  = (explode("?",$lastPath))[0];
$defaultCat = true;
$defaultPrice = true;
$defaultProd = true;
//echo $main;
if ($lastPath == 'browse.php' || $main == 'browse.php'){
  echo '<form>
  <div class="form-group">
    <label for="category">Kategoria:</label>
    <br>
    <select name="category" id="category" class="custom-select ml-2">
    <option value="cosplay"';
    if($_GET['category']=='cosplay'){echo 'selected'; $defaultCat = false;}
    echo '>Strój</option>
    <option value="poster"';
    if($_GET['category']=='poster'){echo 'selected'; $defaultCat = false;}
    echo '>Plakat</option>
    <option value="figure"';
    if($_GET['category']=='figure'){echo 'selected'; $defaultCat = false;}
    echo '>Figurka</option>
    <option value="gadget"';
    if($_GET['category']=='gadget'){echo 'selected'; $defaultCat = false;}
    echo '>Gadżet</option>
    <option value="Wszystkie"';
    if($_GET['category']=='Wszystkie' || $defaultCat){echo 'selected';}
    echo '>Wszystkie</option>
    </select>
  </div>
  <div class="form-group">
    <label for="producent">Producent:</label>
    <br>
    <select name="producent" id="producent" class="custom-select ml-2">
    <option value="Marvel"';
    if($_GET['producent']=='Marvel'){echo 'selected'; $defaultProd = false;}
    echo '>Marvel</option>
    <option value="Disney"';
    if($_GET['producent']=='Disney'){echo 'selected'; $defaultProd = false;}
    echo '>Disney</option>
    <option value="Blizzard"';
    if($_GET['producent']=='Blizzard'){echo 'selected'; $defaultProd = false;}
    echo '>Blizzard</option>
    <option value="Wszystkie"';
    if($_GET['producent']=='Wszystkie' ||  $defaultProd){echo 'selected';}
    echo '>Wszystkie</option>
    </select>
  </div>
  <div class="form-group">
    <label for="category">Zakres cenowy:</label>
    <br>
    <select name="price" id="price" class="custom-select ml-2">
      <option value="price1"';
      if($_GET['price']=='price1'){echo 'selected'; $defaultPrice = false;}
      echo '>0-99 zł</option>
      <option value="price2"';
      if($_GET['price']=='price2'){echo 'selected'; $defaultPrice = false;}
      echo '>100-199 zł</option>
      <option value="price3"';
      if($_GET['price']=='price3'){echo 'selected'; $defaultPrice = false;}
      echo '>200-299 zł</option>
      <option value="price4"';
      if($_GET['price']=='price4'){echo 'selected'; $defaultPrice = false;}
      echo '>>300 zł</option>
      <option value="Wszystkie"';
      if($_GET['price']=='Wszystkie' || $defaultPrice){echo 'selected';}
      echo '>Wszystkie</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success mx-auto" id="add">Filtruj</button>
  <button onclick="clear()" class="btn btn-success mx-auto" id="clear">Wyczyść filtr</button>
</form>
<script>
  function clear(){
    window.location = \'browse.php?category=Wszystkie&category=Wszystkie&price=Wszystkie\';
  }
</script>';
}
?>

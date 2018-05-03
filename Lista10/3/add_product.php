<?php require('./head.php');?>

    <div class="row mb-5">
      <div class="col-md-2">
        <?php require('leftpanel.php'); ?>
      </div>
      <div class="col-md-8 bg">
        <form method="post" action="product_commit.php" id='productForm'>
          <div class="form-group">
            <label for="name">Nazwa produktu:</label>
            <input id="name" type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="details">Opis:</label>
            <textarea id="details" name="details" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Cena:</label>
            <input id="price" type="number" name="price" class="form-control">
          </div>
          <div class="form-group">
            <label for="producent">Producent:</label>
            <input id="producent" type="text" name="producent" class="form-control">
          </div>
          <div class="form-group">
            <label for="imgUrl">Obrazek:</label>
            <input id="imgUrl" type="text" name="imgUrl" class="form-control">
          </div>
          <div class="form-group">
            <label for="category">Kategoria:</label>
            <select name="category" id="category" class="custom-select ml-2">
              <option value="cosplay">Strój</option>
              <option value="poster">Plakat</option>
              <option value="figure">Figurka</option>
              <option value="gadget">Gadżet</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success mx-auto" id="add">Dodaj</button>
        </form>
        <button onclick="window.history.back()" class="btn btn-success mr-auto my-2" id="edit">Anuluj</button>
      </div>
      <div class="col-md-2">
        <?php require('rightpanel.php'); ?>
      </div>
    </div>
    <script>
    $("#productForm").submit(
        (e) => {
            e.preventDefault();
            let postData = {
              name: $('#name').val(),
              details: $('#details').val(),
              price: $('#price').val(),
              category: $('#category').val(),
              producent: $('#producent').val(),
              imgUrl: $('#imgUrl').val(),
              id: 'new'
            }
            $.ajax({
                url : "./product_commit.php",
                type: "POST",
                data : postData
            }).done(()=>{
              window.location = 'browse.php'
            });
        });
    </script>

    <?php require('./tail.php');?>

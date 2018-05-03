<?php
include_once "db.php";
if ($_POST) {
    foreach ($_POST as $x=>$y) {
        $r[$x]=mysqli_real_escape_string($db, $y);
    }
    if($_POST['id']==='new'){
      $sql = "INSERT INTO products(name,price,category,producent,details,imgUrl)
                values ('$r[name]','$r[price]','$r[category]','$r[producent]','$r[details]','$r[imgUrl]')";
      $db->query($sql);
      //echo "<script>window.location = 'index.php'</script>";
    } elseif($_SESSION['rola']>1) {
      $db->query("UPDATE products set
                 name='$r[name]',
                 details='$r[details]',
                 price='$r[price]',
                 category='$r[category]',
                 producent='$r[producent]',
                 imgUrl='$r[imgUrl]'
                 where id='$r[id]'");
                 echo "<script>window.location = 'index.php'</script>";
    }
}

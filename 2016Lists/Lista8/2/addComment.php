<?php
include_once "db.php";
if ($_POST) {
    foreach ($_POST as $x=>$y) {
        $r[$x]=mysqli_real_escape_string($db, $y);
    }
    $sql = "INSERT INTO comments(product,user,comment)
              values ($r[product],'$r[user]','$r[comment]')";
    $db->query($sql);
}
?>

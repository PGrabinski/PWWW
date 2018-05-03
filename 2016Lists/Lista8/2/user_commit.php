<?php
include_once "db.php";
if ($_POST) {
    foreach ($_POST as $x=>$y) {
        $r[$x]=mysqli_real_escape_string($db, $y);
    }

    if ($_POST['id'] === 'new') {
    $db->query("INSERT INTO user(email,imie,nazwisko,login,haslo,rola)
              values ('$r[email]','$r[imie]','$r[nazwisko]','$r[login]','$r[haslo]','$r[rola]')");
              echo "<script> location = 'index.php'</script>";
    } elseif($_SESSION['rola']>1) {
        $db->query("UPDATE user set
                   login='$r[login]',
                   haslo='$r[haslo]',
                   imie='$r[imie]',
                   nazwisko='$r[nazwisko]',
                   email='$r[email]',
                   rola='$r[rola]'
                   where id='$r[id]'");
                   echo "<script>window.location = 'index.php'</script>";
    }

}

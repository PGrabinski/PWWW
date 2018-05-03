<?php
include_once "db.php";
if($_POST)
{
    // Przygotowanie przesłanych danych do wyszukania w bazie
    foreach($_POST as $x=>$y) {
        $r[$x]=mysqli_real_escape_string($db, $y);
    }

    // Wyszukaj osoby o takim loginie lub mailu oraz haśle
    $result =  $db->query("SELECT * FROM  user WHERE  (login='$r[login]' or email='$r[login]') AND haslo='$r[haslo]'");

    if($row= $result->fetch_assoc()) // znaleziono login i hasło
    {
        $_SESSION['me']=$row['id'];     // zapamiętaj w sesji moje id
        $_SESSION['rola']=$row['rola']; // oraz moją rolę
        $_SESSION['loginFailed'] = false;
        $_SESSION['user']=$row['imie'].' '.$row['nazwisko'];
        echo "<script>window.location = 'index.php'</script>";

    }
    else {   // powrót na stronę logowania z wymuszonym odświeżeniem
    $_SESSION['loginFailed'] = true;
    echo "<script>window.location = 'login.php'</script>";
  }
}

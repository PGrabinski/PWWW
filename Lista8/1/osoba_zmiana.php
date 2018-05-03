<?php

if ($_POST) {
    include "baza.php";
    foreach ($_POST as $x=>$y) {
        $r[$x]=mysqli_real_escape_string($baza, $y);
    }
    switch ($_POST['co']) {
        case 'Usun':
            $baza->query("delete from osoby where id='$r[id]'");
            break;
        case 'Zapisz':
            $baza->query("update osoby
						 set imie='$r[imie]',
						 nazwisko='$r[nazwisko]',
						 plec='$r[plec]',
						 opis='$r[opis]'
						 where id='$r[id]'");
        break;
        case 'Dodaj':
            $baza->query("INSERT INTO osoby(imie,nazwisko,plec,opis)
                          values('$r[imie]', '$r[nazwisko]', '$r[plec]', '$r[opis]')");
            break;

    }
		echo '<script type="text/javascript">
           window.location = "/baza3"
      </script>';
}

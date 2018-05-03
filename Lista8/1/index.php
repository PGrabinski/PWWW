<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<?php
if ($_GET) {
    if ($_GET['id']=='dodaj') {
        include("osoba_dodaj.php");
    } elseif (intval($_GET['id'])) {
        include "osoba_edit.php";
    }
} else {
    //include "osoba_lista.php";
    include "osoba_tabela.php";
}
?>
</body>
</html>

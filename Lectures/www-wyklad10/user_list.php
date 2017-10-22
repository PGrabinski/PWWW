<?php

include_once "baza.php";

$results = $db->query("SELECT *
                       FROM user
                       ORDER BY nazwisko,imie
                       LIMIT 200"); //użytkownicy alfabetycznie

echo "<ul>";

while ($row = $results->fetchArray()) //generuj listę odnośników
    echo "<li><a href='#user_show.php?id=$row[id]'>$row[imie] $row[nazwisko] </a></li>";

echo "</ul>";

<?php

include_once "baza.php";

$id=intval($_GET['id']);
$results = $db->query("SELECT * FROM user where id='$id'");

echo "<ul>";

while ($row = $results->fetchArray()) 
{
    echo "<div>";
    if($id==$me or $_SESSION[rola]>1)
      echo "<a style='float:right;display:block' href='#user_edit.php?id=$row[id]'>Edit</a>";
    echo "<h1>$row[imie] $row[nazwisko] </h1>";
    echo "<div>Login: $row[login]</div>";
    echo "<div>Email: $row[email]</div>";
    echo "<div>Imię: $row[imie]</div>";
    echo "<div>Nazwisko: $row[nazwisko]</div>";
    echo "<div>Rola: $row[rola]</div>";

    echo "</div>";
    echo "<script>$('#right').load('news_list.php?autor=$row[id]')</script>";
}
echo "</ul>";



